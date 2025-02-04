<?php
/**
 * Plugin Name: Bilisimhizmet Booking
 * Plugin URI: https://github.com/jaljalet/bilisimhizmet-booking
 * Description: Special plugin for hotel reservations, programs, therapy for TheLifeCo https://thelifeco.com/,
 * Requires at least: 5.6
 * Version: 1.0.0
 * Author: Islam Ilyasoglu
 * Author URI: https://bilisimhizmet.com/
 * Licence: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: bh-booking
 * Domain Path: /languages
 */

/*
Bilisimhizmet Booking is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Bilisimhizmet Booking is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Bilisimhizmet Booking. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


 if ( ! defined( 'ABSPATH' ) ) exit;

 class BH_Booking {
    function __construct() {
        $this->define_constants();
    }

    public function define_constants() {
        define('BH_BOOKING_PATH', plugin_dir_path(__FILE__));
        define('BH_BOOKING_URL', plugin_dir_url(__FILE__));
        define('BH_BOOKING_VERSION', '1.0.0');
    }

    public static function activate() {
        update_option( 'rewrite_rules', '' );
    }

    public static function deactivate() {
        flush_rewrite_rules();
    }

    public static function uninstall() {
        
    }
 }

 if(class_exists('BH_Booking')) {
    register_activation_hook( __FILE__, array('BH_Booking', 'activate') );
    register_deactivation_hook( __FILE__, array('BH_Booking', 'deactivate') );
    register_uninstall_hook(__FILE__, array('BH_Booking', 'uninstall') );
    $bh_booking = new BH_Booking();
 }