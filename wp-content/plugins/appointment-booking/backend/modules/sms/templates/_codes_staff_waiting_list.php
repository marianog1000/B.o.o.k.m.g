<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
$codes = array(
    array( 'code' => 'appointment_date',         'description' => __( 'date of appointment', 'bookly' ) ),
    array( 'code' => 'appointment_time',         'description' => __( 'time of appointment', 'bookly' ) ),
    array( 'code' => 'appointment_end_date',     'description' => __( 'end date of appointment', 'bookly' ) ),
    array( 'code' => 'appointment_end_time',     'description' => __( 'end time of appointment', 'bookly' ) ),
    array( 'code' => 'appointment_waiting_list', 'description' => __( 'waiting list of appointment', 'bookly' ) ),
    array( 'code' => 'booking_number',           'description' => __( 'booking number', 'bookly' ) ),
    array( 'code' => 'category_name',            'description' => __( 'name of category', 'bookly' ) ),
    array( 'code' => 'company_name',             'description' => __( 'name of company', 'bookly' ) ),
    array( 'code' => 'company_logo',             'description' => __( 'company logo', 'bookly' ) ),
    array( 'code' => 'company_address',          'description' => __( 'address of company', 'bookly' ) ),
    array( 'code' => 'company_phone',            'description' => __( 'company phone', 'bookly' ) ),
    array( 'code' => 'company_website',          'description' => __( 'company web-site address', 'bookly' ) ),
    array( 'code' => 'service_info',             'description' => __( 'info of service', 'bookly' ) ),
    array( 'code' => 'service_name',             'description' => __( 'name of service', 'bookly' ) ),
    array( 'code' => 'service_price',            'description' => __( 'price of service', 'bookly' ) ),
    array( 'code' => 'service_duration',         'description' => __( 'duration of service', 'bookly' ) ),
    array( 'code' => 'staff_email',              'description' => __( 'email of staff', 'bookly' ) ),
    array( 'code' => 'staff_info',               'description' => __( 'info of staff', 'bookly' ) ),
    array( 'code' => 'staff_name',               'description' => __( 'name of staff', 'bookly' ) ),
    array( 'code' => 'staff_phone',              'description' => __( 'phone of staff', 'bookly' ) ),
    array( 'code' => 'staff_photo',              'description' => __( 'photo of staff', 'bookly' ) ),
);
Bookly\Lib\Utils\Common::codes( Bookly\Lib\Proxy\Shared::prepareNotificationCodes( $codes, 'appointment' ) );