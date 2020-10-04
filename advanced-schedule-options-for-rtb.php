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

/*
possible fix for date range to place in the theme's footer.php

<script>
jQuery(document).ready(function() {
    if (typeof rtb_booking_form !== 'undefined') {
        rtb_booking_form.datepicker.set( 'max', [2021,3,29] );
    }
});
</script>


add_filter( 'rtb_booking_form_fields', 'rtbht_hide_time', 10, 2 );
function rtbht_hide_time( $fields, $request ) {

	$fields['reservation']['fields']['time']['callback'] = function() {
		echo '<input type="hidden" name="rtb-time" value="05:15 PM">';
	};

	return $fields;
}
*/
