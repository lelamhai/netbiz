<?php

define('MAIN_MENU', 'main_menu');

function agency_regsiter_styles()
{
    $version = "4";
    
    // ------------------- css ----------------- \\
    // style css
    wp_enqueue_style('agency-style', get_template_directory_uri() . "/style.css?v=$version", array(), $version);
    wp_enqueue_style('agency-player', get_template_directory_uri() . "/assets/css/player.css?v=$version", array(), $version);
    wp_enqueue_style('agency-fontawesome',  "https://netbiz.net.vn/modules/frontend/themes/netbiz/css/fonts/fontawesome/css/all.min.css", array(), $version);
    wp_enqueue_script('agency-jwplayer8', get_template_directory_uri() . "/assets/js/jwplayer8.js?v=$version", array(), $version, false);

    wp_enqueue_script('agency-jquery1.12.4.min', get_template_directory_uri() . "/assets/js/jquery1.12.4.min.js", array(), $version, true);
    wp_enqueue_script('agency-script', get_template_directory_uri() . "/assets/js/script.js", array(), $version, true);
    // <script type="text/javascript" src="./assets/js/jquery1.12.4.min.js"></script>
    // <script type="text/javascript" src="./assets/slick/slick.js?v=3"></script>
    // <script type="text/javascript" src="./assets/js/script.js"></script>
    // <script type="text/javascript" src="./assets/js/m-script.js"></script>

}
add_action('wp_enqueue_scripts', 'agency_regsiter_styles');

if (function_exists('wp_nav_menu')) {
    function agency_wp_my_menus()
    {
        register_nav_menus(array(
            MAIN_MENU => __('Menu Chính', 'text_domain'),
        ));
    }
    add_action('init', 'agency_wp_my_menus');
}

function get_main_menu()
{
    wp_nav_menu(array(
        'theme_location' => MAIN_MENU,
        'menu' => '',
        'container' => '',
        'container_class' => 'nav-item',
        'container_id' => '',
        'menu_class' => '',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => '',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '%3$s',
        'depth' => 0,
        'walker' => ''
    ));
}
add_shortcode('main_menu', 'get_main_menu');