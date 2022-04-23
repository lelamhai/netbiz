<?php

define('MAIN_MENU', 'main_menu');
define('TOP_STORIES', 'top_stories');


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
            TOP_STORIES => __('Top Stories', 'text_domain'),
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

/**
 * Setup Images Size
 */
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}


// =========================================================== LOAD DATA ===================================================== \\
function show_top_stories()
{
    $menu_name = TOP_STORIES;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $id =  $menu_item->object_id;
            // var_dump($menu_item);exit;
            ?>
                <article class="article">
                    <a href="<?php echo $menu_item->url;?>" title="<?php echo $menu_item->title?>" class="article-thumb">
                        <img src="<?php echo get_the_post_thumbnail_url($id);?>" alt="“<?php echo $menu_item->title?>" class="article-image">
                    </a>
                     <div class="article-info">
                        <h3 class="article-title">
                            <a href="<?php echo $menu_item->url;?>" title="“<?php echo $menu_item->title?>">“<?php echo $menu_item->title?>
                                <span class="ico-video"></span>                  
                            </a>
                        </h3>
                    </div>
               </article>
            <?php
        }
    }
}
add_shortcode('show_top_stories', 'show_top_stories');