<?php
namespace Bookly\Lib;

/**
 * Class Validator
 * @package Bookly\Lib
 */
class Validator
{
    private $errors = array();

    /**
     * Validate email.
     *
     * @param string $field
     * @param array $data
     */
    public function validateEmail( $field, $data )
    {
        if ( $data['email'] != '' ) {
            if ( ! is_email( $data['email'] ) ) {
                $this->errors[ $field ] = __( 'Invalid email', 'bookly' );
            }
            // Check email for uniqueness when a new WP account is going to be created.
            if ( get_option( 'bookly_cst_create_account', 0 ) && ! get_current_user_id() ) {
                $customer = new Entities\Customer();
                // Try to find customer by phone or email.
                $customer->loadBy(
                    Config::phoneRequired()
                        ? array( 'phone' => $data['phone'] )
                        : array( 'email' => $data['email'] )
                );
                if ( ( ! $customer->isLoaded() || ! $customer->get( 'wp_user_id' ) ) && email_exists( $data['email'] ) ) {
                    $this->errors[ $field ] = __( 'This email is already in use', 'bookly' );
                }
            }
        } else {
            $this->errors[ $field ] = Utils\Common::getTranslatedOption( 'bookly_l10n_required_email' );
        }
    }

    /**
     * Validate phone.
     *
     * @param string $field
     * @param string $phone
     * @param bool $required
     */
    public function validatePhone( $field, $phone, $required = false )
    {
        if ( $phone == '' && $required ) {
            $this->errors[ $field ] = Utils\Common::getTranslatedOption( 'bookly_l10n_required_phone' );
        }
    }

    /**
     * Validate name.
     *
     * @param string $field
     * @param string $name
     */
    public function validateName( $field, $name )
    {
        if ( $name != '' ) {
            $max_length = 255;
            if ( preg_match_all( '/./su', $name ) > $max_length ) {
                $this->errors[ $field ] = sprintf(
                    __( '"%s" is too long (%d characters max).', 'bookly' ),
                    $name,
                    $max_length
                );
            }
        } else {
            switch ( $field ) {
                case 'full_name' :
                    $this->errors[ $field ] = Utils\Common::getTranslatedOption( 'bookly_l10n_required_name' );
                    break;
                case 'first_name' :
                    $this->errors[ $field ] = Utils\Common::getTranslatedOption( 'bookly_l10n_required_first_name' );
                    break;
                case 'last_name' :
                    $this->errors[ $field ] = Utils\Common::getTranslatedOption( 'bookly_l10n_required_last_name' );
                    break;
            }
        }
    }

    /**
     * Validate number.
     *
     * @param string $field
     * @param mixed $number
     * @param bool $required
     */
    public function validateNumber( $field, $number, $required = false )
    {
        if ( $number != '' ) {
            if ( ! is_numeric( $number ) ) {
                $this->errors[ $field ] = __( 'Invalid number', 'bookly' );
            }
        } elseif ( $required ) {
            $this->errors[ $field ] = __( 'Required', 'bookly' );
        }
    }

    /**
     * Validate date.
     *
     * @param string $field
     * @param string $date
     * @param bool $required
     */
    public function validateDate( $field, $date, $required = false )
    {
        if ( $date != '' ) {
            if ( date_create( $date ) === false ) {
                $this->errors[ $field ] = __( 'Invalid date', 'bookly' );
            }
        } elseif ( $required ) {
            $this->errors[ $field ] = __( 'Required', 'bookly' );
        }
    }

    /**
     * Validate time.
     *
     * @param string $field
     * @param string $time
     * @param bool $required
     */
    public function validateTime( $field, $time, $required = false )
    {
        if ( $time != '' ) {
            if ( ! preg_match( '/^\d{2}:\d{2}$/', $time ) ) {
                $this->errors[ $field ] = __( 'Invalid time', 'bookly' );
            }
        } elseif ( $required ) {
            $this->errors[ $field ] = __( 'Required', 'bookly' );
        }
    }

    /**
     * Validate custom fields.
     *
     * @param string $value
     * @param int $form_id
     * @param int $cart_key
     */
    public function validateCustomFields( $value, $form_id, $cart_key )
    {
        $decoded_value = json_decode( $value );
        $fields = array();
        foreach ( json_decode( get_option( 'bookly_custom_fields' ) ) as $field ) {
            $fields[ $field->id ] = $field;
        }

        foreach ( $decoded_value as $field ) {
            if ( isset( $fields[ $field->id ] ) ) {
                if ( ( $fields[ $field->id ]->type == 'captcha' ) && ! Captcha\Captcha::validate( $form_id, $field->value ) ) {
                    $this->errors['custom_fields'][ $cart_key ][ $field->id ] = __( 'Incorrect code', 'bookly' );
                } elseif ( $fields[ $field->id ]->required && empty ( $field->value ) && $field->value != '0' ) {
                    $this->errors['custom_fields'][ $cart_key ][ $field->id ] = __( 'Required', 'bookly' );
                } else {
                    /**
                     * Custom field validation for a third party,
                     * if the value is not valid then please add an error message like in the above example.
                     *
                     * @param \stdClass
                     * @param ref array
                     * @param string
                     * @param \stdClass
                     */
                    do_action_ref_array( 'bookly_validate_custom_field', array( $field, &$this->errors, $cart_key, $fields[ $field->id ] ) );
                }
            }
        }
    }

    /**
     * Post-validate customer.
     *
     * @param array $data
     */
    public function postValidateCustomer( $data )
    {
        if ( empty ( $this->errors ) && ! isset ( $data['force_update_customer'] ) ) {
            $user_id  = get_current_user_id();
            $customer = new Entities\Customer();
            if ( $user_id > 0 ) {
                // Try to find customer by WP user ID.
                $customer->loadBy( array( 'wp_user_id' => $user_id ) );
            }
            if ( ! $customer->isLoaded() ) {
                // Try to find customer by 'primary' identifier.
                $identifier = Config::phoneRequired() ? 'phone' : 'email';
                $customer->loadBy( array( $identifier => $data[ $identifier ] ) );
                if ( ! $customer->isLoaded() ) {
                    // Try to find customer by 'secondary' identifier.
                    $identifier = Config::phoneRequired() ? 'email' : 'phone';
                    $customer->loadBy( array( 'phone' => '', 'email' => '', $identifier => $data[ $identifier ] ) );
                }
                if ( $customer->isLoaded() ) {
                    // Find difference between new and existing data.
                    $diff   = array();
                    $fields = array(
                        'phone'     => Utils\Common::getTranslatedOption( 'bookly_l10n_label_phone' ),
                        'email'     => Utils\Common::getTranslatedOption( 'bookly_l10n_label_email' )
                    );
                    if ( get_option( 'bookly_cst_first_last_name', 0 ) ) {
                        $fields['first_name'] = Utils\Common::getTranslatedOption( 'bookly_l10n_label_first_name' );
                        $fields['last_name']  = Utils\Common::getTranslatedOption( 'bookly_l10n_label_last_name' );
                    } else {
                        $fields['full_name'] = Utils\Common::getTranslatedOption( 'bookly_l10n_label_name' );
                    }
                    foreach ( $fields as $field => $name ) {
                        if (
                            $data[ $field ] != '' &&
                            $customer->get( $field ) != '' &&
                            $data[ $field ] != $customer->get( $field )
                        ) {
                            $diff[] = $name;
                        }
                    }
                    if ( ! empty ( $diff ) ) {
                        $this->errors['customer'] = sprintf(
                            __( 'Your %s: %s is already associated with another %s.<br/>Press Update if we should update your user data, or press Cancel to edit entered data.', 'bookly' ),
                            $fields[ $identifier ],
                            $data[ $identifier ],
                            implode( ', ', $diff )
                        );
                    }
                }
            }
        }
    }

    /**
     * Validate cart.
     *
     * @param array $cart
     * @param int $form_id
     */
    public function validateCart( $cart, $form_id )
    {
        foreach ( $cart as $cart_key => $cart_parameters ) {
            foreach ( $cart_parameters as $parameter => $value ) {
                switch ( $parameter ) {
                    case 'custom_fields':
                        $this->validateCustomFields( $value, $form_id, $cart_key );
                        break;
                }
            }
        }
    }

    /**
     * Get errors.
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}