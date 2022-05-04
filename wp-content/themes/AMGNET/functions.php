<?php

define('MAIN_MENU', 'main_menu');
define('TOP_STORIES', 'top_stories');
define('VIDEO_MENU', 'video_menu');

define('FOOTER_1', 'footer_1');
define('FOOTER_2', 'footer_2');
define('FOOTER_3', 'footer_3');
define('FOOTER_4', 'footer_4');
define('FOOTER_5', 'footer_5');
define('FOOTER_6', 'footer_6');


function agency_regsiter_styles()
{
    $version = "24";
    
    // ------------------- css ----------------- \\
    // style css
    wp_enqueue_style('agency-style', get_template_directory_uri() . "/style.css?v=$version", array(), $version);
    wp_enqueue_style('agency-player', get_template_directory_uri() . "/assets/css/player.css?v=$version", array(), $version);
    wp_enqueue_style('agency-reponsive', get_template_directory_uri() . "/assets/css/reponsive.css?v=$version", array(), $version);
    wp_enqueue_style('agency-fontawesome',  "https://netbiz.net.vn/modules/frontend/themes/netbiz/css/fonts/fontawesome/css/all.min.css", array(), $version);
    wp_enqueue_script('agency-jwplayer8', get_template_directory_uri() . "/assets/js/jwplayer8.js?v=$version", array(), $version, false);
    

    wp_enqueue_script('agency-jquery1.12.4.min', get_template_directory_uri() . "/assets/js/jquery1.12.4.min.js", array(), $version, true);
    wp_enqueue_script('agency-script', get_template_directory_uri() . "/assets/js/script.js", array(), $version, true);
    wp_enqueue_script('agency-zalo', get_template_directory_uri() . "/assets/js/sdk.js", array(), $version, true);
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
            VIDEO_MENU => __('Menu Trong Video', 'text_domain'),
            FOOTER_1 => __('Menu Footer 1', 'text_domain'),
            FOOTER_2 => __('Menu Footer 2', 'text_domain'),
            FOOTER_3 => __('Menu Footer 3', 'text_domain'),
            FOOTER_4 => __('Menu Footer 4', 'text_domain'),
            FOOTER_5 => __('Menu Footer 5', 'text_domain'),
            FOOTER_6 => __('Menu Footer 6', 'text_domain'),
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


function show_video_menu()
{
    wp_nav_menu(array(
        'theme_location' => VIDEO_MENU,
        'menu' => '',
        'container' => '',
        'container_class' => '',
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
add_shortcode('show_video_menu', 'show_video_menu');

function show_footer1_menu()
{
    wp_nav_menu(array(
        'theme_location' => FOOTER_1,
        'menu' => '',
        'container' => '',
        'container_class' => '',
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
add_shortcode('show_footer1_menu', 'show_footer1_menu');

function show_footer2_menu()
{
    wp_nav_menu(array(
        'theme_location' => FOOTER_2,
        'menu' => '',
        'container' => '',
        'container_class' => '',
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
add_shortcode('show_footer2_menu', 'show_footer2_menu');

/**
 * Setup Images Size
 */
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}


// =========================================================== LOAD DATA ===================================================== \\
function show_video_detail($attr)
{
    $menu_name = VIDEO_MENU;
    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        foreach ((array) $menu_items as $key => $menu_item) {
            $id =  $menu_item->object_id;
            $pieces = explode("/", $menu_item->url);
            if($pieces[count($pieces)-1] == $attr["slug"])
            {
                ?>
                    <li class="menu-item current-menu-item"><a href="<?php echo get_category_link($menu_item->object_id)?>"><?php echo $menu_item->title?></a></li>
                <?php
            } else {
                ?>
                    <li class="menu-item "><a href="<?php echo get_category_link($menu_item->object_id)?>"><?php echo $menu_item->title?></a></li>
                <?php
            }
        }
    }
}
add_shortcode('show_video_detail', 'show_video_detail');

// AJAX
function more_function() {
    $json = array();
    if($_REQUEST["key"] && !empty($_REQUEST["key"]))
    {
        $args = array(
            'post_type' => 'post',
            'post_status'  => 'publish',
            'posts_per_page' => 10,
            'paged' => $_REQUEST["paged"],
            's' => $_REQUEST["key"],
        );
        $the_query = new WP_Query( $args );
        $total = $the_query ->post_count;

        if($total <= 10)
        {
            $json['isCount'] = true;
        }
        $get_category_link = "";
        $cateName = "";
        $html = "";
        if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $categories = get_the_category(get_the_ID());
            foreach( $categories as $category ) {
                if($category ->category_parent != 0)
                {
                    $get_category_link = get_category_link($category->term_id);
                    $cateName = $category->name;
                }
            }
            $html = $html . '<article class="article">
                                <a href="'.get_the_permalink().'" title="'.get_the_title().'" class="article-thumb">
                                    <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" class="article-image">
                                </a>
                                <div class="article-info">
                                    <h3 class="article-title">
                                        <a href="'.get_the_permalink().'" title="'.get_the_title().'">
                                            '.get_the_title().'
                                        </a>
                                    </h3>
                                    <div class="article-meta">
                                        <a href="'.$get_category_link.'" class="article-catname">
                                            '.$cateName.'
                                        </a>
                                        <span class="post-publish-time">"'.get_the_date("d/m/Y").'"</span>
                                    </div>
                                </div>
                            </article>';
                           
            endwhile;
            wp_reset_postdata();
        endif;
        $json['html'] = $html;
        wp_send_json_success( $json );
    }
    wp_die(); 
}
add_action('wp_ajax_more', 'more_function');
add_action('wp_ajax_nopriv_more', 'more_function');



function news_function() {
    $json = array();

    if($_REQUEST["slug"] && !empty($_REQUEST["slug"]))
    {
        $args = array(
            'post_type'     => 'post',
            'post_status'   => 'publish',
            'category_name'  => $_REQUEST["slug"],
            'posts_per_page'=> 10,
            'paged'         => $_REQUEST["paged"],
            'offset'        => $_REQUEST["offset"],
        );
        $the_query = new WP_Query( $args );
        $total = $the_query ->post_count;
        if($total <= 10)
        {
            $json['isCount'] = true;
        }

        $get_category_link = "";
        $cateName = "";
        $html = "";
        $author = "";
        if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $categories = get_the_category(get_the_ID());
            foreach( $categories as $category ) {
                if($category ->category_parent != 0)
                {
                    $get_category_link = get_category_link($category->term_id);
                    $cateName = $category->name;
                }
            }

            if($_REQUEST["category"] == "video")
            {
                $html = $html . '<article class="article">
                                        <a class="article-thumb" href="'.get_the_permalink().'" title="<?php the_title()?>">
                                            <img class="article-image" src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" />
                                        </a>
                                        <div class="article-info">
                                            <h3 class="article-title">
                                                <a href="'.get_the_permalink().'" title="'.get_the_title().'">
                                                    '.get_the_title().'
                                                </a>
                                            </h3>
                                            <div class="article-meta">
                                                <span class="article-author">
                                                    <span class="js-video-author-name"> '.get_field("author").'</span>
                                                </span>
                                                <span class="article-publish-time no-before">'.get_the_date("d/m/Y").'</span>
                                                <a href="'.$get_category_link.'" class="article-catname">
                                                    '.$cateName.'
                                                </a>
                                                <span class="icon-view hide-empty">'.get_field("views").' lượt xem</span>
                                            </div>
                                        </div>
                                    </article>';


            } else {
                $html = $html . '<article class="article">
                                <a href="'.get_the_permalink().'" title="'.get_the_title().'" class="article-thumb">
                                    <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" class="article-image">
                                </a>
                                <div class="article-info">
                                    <h3 class="article-title">
                                        <a href="'.get_the_permalink().'" title="'.get_the_title().'">
                                            '.get_the_title().'
                                        </a>
                                    </h3>
                                    <div class="article-meta">
                                        <a href="'.$get_category_link.'" class="article-catname">
                                            '.$cateName.'
                                        </a>
                                        <span class="post-publish-time">"'.get_the_date("d/m/Y").'"</span>
                                    </div>
                                </div>
                            </article>';
            }
            

                           
            endwhile;
            wp_reset_postdata();
        endif;
        $json['html'] = $html;
        wp_send_json_success( $json );
    }
    wp_die(); 
}
add_action('wp_ajax_news', 'news_function');
add_action('wp_ajax_nopriv_news', 'news_function');


function DetailVideo_function() {
    $json = array();
    if($_REQUEST["category"] && !empty($_REQUEST["category"]))
    {
        $args = array(
            'post_type' => 'post',
            'post_status'  => 'publish',
            'category_name'  => $_REQUEST["category"],
            'posts_per_page' => 10,
            'paged' => $_REQUEST["paged"],
        );
        $the_query = new WP_Query( $args );
        $total = $the_query ->post_count;
        $json['html'] = $total;
        if($total <= 10)
        {
            $json['isCount'] = true;
        }
        $get_category_link = "";
        $cateName = "";
        $html = "";
        if ( $the_query->have_posts() ) : 
            while ( $the_query->have_posts() ) : $the_query->the_post();
            $categories = get_the_category(get_the_ID());
            foreach( $categories as $category ) {
                if($category ->category_parent != 0)
                {
                    $get_category_link = get_category_link($category->term_id);
                    $cateName = $category->name;
                }
            }

            if($_REQUEST["parent"] == "video")
            {
                $html = $html . '<article class="article">
                                <a href="'.get_the_permalink().'" title="'.get_the_title().'" class="article-thumb">
                                    <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" class="article-image">
                                </a>
                                <div class="article-info">
                                    <h3 class="article-title">
                                        <a href="'.get_the_permalink().'" title="'.get_the_title().'">
                                            '.get_the_title().'
                                        </a>
                                    </h3>
                                    <div class="article-meta">
                                        <a href="'.$get_category_link.'" class="article-catname">
                                            '.$cateName.'
                                        </a>
                                        <span class="post-publish-time">"'.get_the_date("d/m/Y").'"</span>
                                    </div>
                                </div>
                            </article>';
            } else {
                $html = $html . '<article class="article">
                                <a href="'.get_the_permalink().'" title="'.get_the_title().'" class="article-thumb">
                                    <img src="'.get_the_post_thumbnail_url().'" alt="'.get_the_title().'" class="article-image">
                                </a>
                                <div class="article-info">
                                    <h3 class="article-title">
                                        <a href="'.get_the_permalink().'" title="'.get_the_title().'">
                                            '.get_the_title().'
                                        </a>
                                    </h3>
                                    <div class="article-meta">
                                        <a href="'.$get_category_link.'" class="article-catname">
                                            '.$cateName.'
                                        </a>
                                        <span class="post-publish-time">"'.get_the_date("d/m/Y").'"</span>
                                    </div>
                                </div>
                            </article>';
                            
            }


            
                           
            endwhile;
            wp_reset_postdata();
        endif;
        $json['html'] = $html;
        wp_send_json_success( $json );
    }
    wp_die(); 
}
add_action('wp_ajax_DetailVideo', 'DetailVideo_function');
add_action('wp_ajax_nopriv_DetailVideo', 'DetailVideo_function');