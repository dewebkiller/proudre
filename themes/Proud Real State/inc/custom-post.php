<?php
add_action('init', 'dwk_banner');

function dwk_banner() {

    register_post_type('banner', array(
        'labels' => array(
            'name' => __('Banner'),
            'singular_name' => __('banner')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-image',
        'rewrite' => array('slug' => 'banner'),
        'supports' => array('title', 'editor', 'thumbnail'),
            )
    );
}
/* -----------Banner----------- */

register_post_type('properties', array(
        'labels' => array(
            'name' => __('Properties'),
            'singular_name' => __('properties')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-multisite',
        //'rewrite' => array('slug' => 'gallery','with_front' => false),
        'supports' => array('title', 'editor', 'thumbnail'),
            )
    );

add_action('init', 'dwk_testimonials');

function dwk_testimonials() {

    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials'),
            'singular_name' => __('testimonials')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-editor-quote',
        'rewrite' => array('slug' => 'testimonials'),
        'supports' => array('title', 'editor', 'thumbnail'),
            )
    );

}

add_action('init', 'dwk_team');

function dwk_team() {

    register_post_type('team', array(
        'labels' => array(
            'name' => __('Teams'),
            'singular_name' => __('Team')
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-users',
        'rewrite' => array('slug' => 'teams'),
        'supports' => array('title', 'editor', 'thumbnail'),
            )
    );

}