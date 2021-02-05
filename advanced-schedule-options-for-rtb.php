<?php
/**
 * Plugin Name: Advanced Schedule Options for Restaurant Reservations
 * Plugin URI: https://mightymedia.nl
 * Description: Adds extra schedule options for the Restaurant Reservations WordPress plugin by Five Star Plugins
 * Version: 0.0.1
 * Author: Bas van den Wijngaard
 * Author URI: https://onlinesuperheld.nl
 * License:     GNU General Public License v3.0 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 4.4
 * Tested up to: 5.5.1
 *
 * Text Domain: restaurant-reservations
 * Domain Path: /languages/
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 3 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
if ( ! defined( 'ABSPATH' ) )
	exit;


function add_aso_rtb_options () {
    
    /*
    Example code to hijack/alter RTB options
    
    add_filter( 'rtb_booking_form_fields', 'rtbht_hide_time', 10, 2 );
    function rtbht_hide_time( $fields, $request ) {
    
        $fields['reservation']['fields']['time']['callback'] = function() {
            echo '<input type="hidden" name="rtb-time" value="05:15 PM">';
        };
    
        return $fields;
    }
    */
    
}

function add_aso_rtb_script() {
     
    // Possible fix for date range to place in the theme's footer.php
    ?>
    
    <script>
    jQuery(document).ready(function() {
        if (typeof rtb_booking_form !== 'undefined') {
            rtb_booking_form.datepicker.set( 'max', [2021,3,29] ); // JS dates... so month 3 is actually April
        }
    });
    </script>
    
    <?php 

}


function init_aso_rtb() {
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    
    // Check if Five Star Reservations plugins is activated
    if ( is_plugin_active( 'restaurant-reservations/restaurant-reservations.php' ) ) {
        
        // Maybe check if a custom date-range is added
        add_action( 'wp_footer', 'add_aso_rtb_script', 100 );
        
    } else {
        
        // Deactivate plugin if Five Star Reservations isn't found
        deactivate_plugins( 'advanced-schedule-options-for-rtb/advanced-schedule-options-for-rtb.php' );
        
        echo '<div class="notice notice-error is-dismissible">
                <p>Five Star Reservations plugin not found, deactivating Advanced Schedule Options for Restaurant Reservation.</p>
            </div>';
        
    }
    
}

add_action( 'init', 'init_aso_rtb' );

