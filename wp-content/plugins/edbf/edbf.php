<?php
/**
 * Plugin name: Edbf
 * Created by PhpStorm.
 * User: Feri
 * Date: 20/01/2017
 * Time: 21:39
 */


define('EDBF_VERSION', '3.1.11');
define('EDBF__MINIMUM_WP_VERSION', '3.2');
define('EDBF__PLUGIN_DIR', plugin_dir_path(__FILE__));
define('EDBF_DELETE_LIMIT', 100000);


// register_activation_hook(__FILE__, 'plugin_activation');
// register_deactivation_hook(__FILE__, 'plugin_deactivation');


// add_action('init', array('Akismet', 'init'));
//
//if (is_admin()) {
//    require_once(AKISMET__PLUGIN_DIR . 'class.akismet-admin.php');
//    add_action('init', array('Akismet_Admin', 'init'));
//}

//add wrapper class around deprecated akismet functions that are referenced elsewhere
//require_once(AKISMET__PLUGIN_DIR . 'wrapper.php');

add_action('admin_menu', 'edbf_admin_menu');

function edbf_admin_menu()
{
    add_menu_page('EDBF', 'EDBF', 'manage_options', '', 'edbf_admin_page', 'dashicons-tickets', 100);
    add_submenu_page('', 'My Sub Level Menu Example', 'Sub Level Menu', 'manage_options', 'myplugin/myplugin-admin-sub-page.php', 'edbf_admin_sub_page');
}

function edbf_admin_page()
{

    require_once(EDBF__PLUGIN_DIR . '_include/admin-pages/main.php');
}

function edbf_admin_sub_page()
{


}

require_once(EDBF__PLUGIN_DIR . 'config/config.php');
require_once(EDBF__PLUGIN_DIR . 'db/connect.php');
require_once(EDBF__PLUGIN_DIR . 'DAL/FeedDAL.php');


add_filter('the_content', 'wpdev_before_after');


function wpdev_before_after($content)
{

    $key_1_value = get_post_meta(get_the_ID(), 'keyword_a', true);

// Check if the custom field has a value.
    if (!empty($key_1_value)) {
        $keyword_a = $key_1_value;
    }


    $feed = new FeedDAL();
    $results = $feed->getResults(100, 1100, $keyword_a, 'datetime', 'DESC');





    return $content . '<br>--- ' . $keyword_a . ' ---<br><hr>' . $results;


}
