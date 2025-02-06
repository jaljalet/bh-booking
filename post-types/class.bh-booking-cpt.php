<?php

if(!class_exists('BH_Booking_Post_type')) {
    class BH_Booking_Post_type {
        function __construct() {
            add_action('init', array($this, 'create_post_type'));
        }

        public function create_post_type() {
            register_post_type(
                'bh-center',
                array(
                    'label' => 'Center',
                    'description' => 'Centers',
                    'labels' => array(
                        'name' => 'Centers',
                        'singular_name' => 'Center',
                    ),
                    'public' => true,
                    'supports' => array('title', 'editor', 'thumbnail'),
                    'hierarchical' => false,
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'menu_position' => 5,
                    'show_in_admin_bar' => false,
                    'has_archive' => false,
                    'show_in_nav_menus' => false,
                    'can_export' => false,
                    'has_archive' => false,
                    'exclude_from_search' => false,
                    'publicly_queryable' => true,
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-building',
                ),
            );
        }
    }
}