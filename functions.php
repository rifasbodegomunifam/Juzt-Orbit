<?php

/**
 * @package JuztOrbit-Theme
 * @subpackage Timber
 * @since Timber 0.1
 */

use Timber\Timber;
use JuztStack\JuztOrbit\StartSite;

define('JUZT_ORBIT_VERSION', '0.0.14');
define('JUZT_ORBIT_DIR', get_template_directory(__FILE__));
define('JUZT_ORBIT_URL', get_template_directory_uri(__FILE__));
define('JUZT_ORBIT_DEVELOPMENT_MODE', false); // Change to false in production
define('JUZT_STACK_DEBUG', false);

require_once JUZT_ORBIT_DIR . '/vendor/autoload.php';

if (class_exists('Timber\\Timber')) {
    Timber::$dirname = array('views');
}

if (class_exists('JuztStack\\JuztOrbit\\StartSite')) {
    new StartSite();
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// 2. Remover query strings
/*add_filter('script_loader_src', 'remove_query_strings', 15, 1);
add_filter('style_loader_src', 'remove_query_strings', 15, 1);
function remove_query_strings($src) {
    return $src ? esc_url(remove_query_arg('ver', $src)) : $src;
}*/

// 3. Deshabilitar embeds
add_action('wp_footer', function() {
    wp_dequeue_script('wp-embed');
});

add_action('admin_init', function() {
    if (isset($_GET['rebuild'])) {
        delete_transient('juzt_registry_indexx_' . JUZTSTUDIO_CM_VERSION);
        wp_die('✅ Cache cleared! <a href="' . admin_url('admin.php?page=juzt-studio') . '">Ir a Studio</a>');
    }
});