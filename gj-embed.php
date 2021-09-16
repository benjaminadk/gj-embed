<?php
/**
 * @wordpress-plugin
 * Plugin Name:       GJ Embed
 */

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );

define( 'ERW_WIDGET_PATH', plugin_dir_path( __FILE__ ) . '/widget' );
define( 'ERW_ASSET_MANIFEST', ERW_WIDGET_PATH . '/build/asset-manifest.json' );
define( 'ERW_INCLUDES', plugin_dir_path( __FILE__ ) . '/inc' );

require_once( ERW_INCLUDES . '/enqueue.php' );
require_once( ERW_INCLUDES . '/shortcode.php' );