<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Current Year Shortcode
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Provides shortcode that output the current year.
 * Version:           1.1.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_shortcode( 'current-year', function() {
  return date( 'Y' );
} );
