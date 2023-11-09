<?php

function dwk_enqueues() {

    wp_register_style('bxslider-css', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '1.3.6');
    wp_enqueue_style('bxslider-css');

    wp_register_style('style-css', get_template_directory_uri() . '/css/style.css', array(), '1.3.6');
    wp_enqueue_style('style-css');

    wp_register_style('responsive-css', get_template_directory_uri() . '/css/responsive.css', array(), '1.3.6');
    wp_enqueue_style('responsive-css');

    wp_register_style('fancybox-css', get_template_directory_uri() . '/css/jquery.fancybox.css', array(), '1.3.6');
    wp_enqueue_style('fancybox-css');

    wp_register_style('bootstrapmin-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.3.6');
    wp_enqueue_style('bootstrapmin-css');

    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.3.6');
    wp_enqueue_style('bootstrap-css');

    wp_register_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css', false, '4.7.0', null);
    wp_enqueue_style('fontawesome-css');

    wp_register_style('carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), '1.3.6');
    wp_enqueue_style('carousel');

    wp_register_style('owl-theme', get_template_directory_uri() . '/css/owl.theme.css', array(), '1.3.6');
    wp_enqueue_style('owl-theme');

    /* Scripts */

    //wp_enqueue_script('jquery');
    /* Note: this above uses WordPress's onboard jQuery. You can enqueue other pre-registered scripts from WordPress too. See:
      https://developer.wordpress.org/reference/functions/wp_enqueue_script/#Default_Scripts_Included_and_Registered_by_WordPress */

    wp_register_script('jquery.min-js', get_template_directory_uri() . '/js/jquery.min.js', false, null, true);
    wp_enqueue_script('jquery.min-js');
    
    wp_register_script('bootstrap.min-js', get_template_directory_uri() . '/js/bootstrap.js', false, null, true);
    wp_enqueue_script('bootstrap.min-js');

    wp_register_script('jquery.fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', false, null, true);
    wp_enqueue_script('jquery.fancybox');

    wp_register_script('jquery.carouselmin', get_template_directory_uri() . '/js/owl.carousel.min.js', false, null, true);
    wp_enqueue_script('jquery.carouselmin');

    wp_register_script('jquery.bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js"', false, null, true);
    wp_enqueue_script('jquery.bxslider');

    wp_register_script('custom-js', get_template_directory_uri() . '/js/custom.js', false, null, true);
    wp_enqueue_script('custom-js');
}

add_action('wp_enqueue_scripts', 'dwk_enqueues', 100);
