<?php
function mytheme_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css' );
    wp_enqueue_style( 'jQuery.lightninBox', get_template_directory_uri().'/css/jQuery.lightninBox.css' );
    wp_enqueue_style( 'staff', get_template_directory_uri().'/css/staff.css' );
    wp_enqueue_style( 'footer-pic', get_template_directory_uri().'/css/footer-pic.css' );
    wp_enqueue_style( 'aos', get_template_directory_uri().'/css/aos.css' );
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );

//    wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js', array(), '1.0.0', true );
    wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js' ,array(), '4.8.2', true);
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/js/aos.js');
    wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js',array(), '4.8.2', true);
    wp_enqueue_script( 'bgfader', get_template_directory_uri() . '/js/bgfader.js', array(), '4.8.2', true );
    wp_enqueue_script( 'jarallax', get_template_directory_uri() . '/js/jarallax.js',array(), '4.8.2', true);
    wp_enqueue_script( 'jquery.picEyes', get_template_directory_uri() . '/js/jquery.picEyes.js',array(), '4.8.2', true);
    wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() .'/js/jqBootstrapValidation.js',array(), '4.8.2', true);
    wp_enqueue_script( 'SmoothScroll.min', get_template_directory_uri() . '/js/SmoothScroll.min.js',array(), '4.8.2', true);
    wp_enqueue_script( 'jQuery.lightninBox', get_template_directory_uri() . '/js/jQuery.lightninBox.js',array(), '4.8.2', true);
    wp_enqueue_script( 'top', get_template_directory_uri() . '/js/top.js',array(), '4.8.2', true);
    wp_enqueue_script( 'grayscale', get_template_directory_uri() . '/js/grayscale.js',array(), '4.8.2', true);
    wp_enqueue_script( 'jquery.easing.min', get_template_directory_uri() . '/js/jquery.easing.min.js',array(), '4.8.2', true);
    wp_enqueue_script( 'modernizr.min', get_template_directory_uri() . '/js/modernizr.min.js');
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js',array(), '4.8.2', true);
    wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery.min.js' );
}
 
add_action( 'wp_enqueue_scripts', 'mytheme_scripts' );
?>