<?php

/**
 * Plugin Name:       Testimonials Slick
 * Plugin URI:        https://github.com/yavallejo/testimonialsBlock
 * Description:       Handle the basics with this plugin.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            @yavallejo
 * Author URI:        https://www.aprendiendoando.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       fps
 * Domain Path:       /languages
 */

// Enqueue Scripts Blocks
function fps_enqueue()
{
    $asset_file = include(plugin_dir_path(__FILE__) . 'build/index.asset.php');
    wp_enqueue_script(
        'fps-script',
        plugins_url('/build/index.js', __FILE__),
        $asset_file['dependencies'],
        $asset_file['version']
    );
}
add_action('enqueue_block_editor_assets', 'fps_enqueue');

// Enqueue Style Blocks
function fps_stylesheet()
{
    wp_enqueue_style('fps-style', plugins_url('/assets/css/style.css', __FILE__));
}
add_action('enqueue_block_assets', 'fps_stylesheet');
