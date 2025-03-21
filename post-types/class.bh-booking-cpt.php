<?php

if(!class_exists('BH_Booking_Post_type')) {
    class BH_Booking_Post_type {
        function __construct() {
            add_action('init', array($this, 'create_post_type'));
            add_action('add_meta_boxes', array($this, 'add_meta_boxes'));
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
                    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
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
                    //'register_meta_box_cb' => array($this, 'add_meta_boxes'),
                ),
            );

            register_post_type(
                'bh-program',
                array(
                    'label' => 'Program',
                    'description' => 'Programs',
                    'labels' => array(
                        'name' => 'Programs',
                        'singular_name' => 'Program',
                    ),
                    'public' => true,
                    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
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

            register_post_type(
                'bh-therapy',
                array(
                    'label' => 'Therapy',
                    'description' => 'Therapies',
                    'labels' => array(
                        'name' => 'Therapies',
                        'singular_name' => 'Therapy',
                    ),
                    'public' => true,
                    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
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

            register_post_type(
                'bh-treatment',
                array(
                    'label' => 'Treatment',
                    'description' => 'Treatments',
                    'labels' => array(
                        'name' => 'Treatments',
                        'singular_name' => 'Treatment',
                    ),
                    'public' => true,
                    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
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

        public function add_meta_boxes() {
            add_meta_box(
                'bh_programs_price_days_meta_box',
                'Program Price and Days',
                array($this, 'add_inner_bh_programs_price_days_meta_boxes'),
                'bh-program',
                'side',
                'high',
            );
            add_meta_box(
                'bh_programs_includes_meta_box',
                'Program Includes',
                array($this, 'add_inner_bh_programs_includes_meta_boxes'),
                'bh-program',
                'normal',
                'high',
            );
        }

        public function add_inner_bh_programs_price_days_meta_boxes($post) {
            require_once(BH_BOOKING_PATH . 'views/program-price-days_metabox.php');
        }

        public function add_inner_bh_programs_includes_meta_boxes($post) {
            echo 'Program Includes';
        }

    }
}