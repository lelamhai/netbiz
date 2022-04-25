<!DOCTYPE html>
<html lang="vi" class="">
   <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <title><?php echo get_bloginfo( 'name' );?></title>
         <meta property="og:url"           content="<?php echo get_home_url()?>" />
         <meta property="og:type"          content="website" />
         <meta property="og:title"         content="<?php echo get_bloginfo( 'name' );?>" />
         <meta property="og:description"   content="<?php the_excerpt()?>" />
         <meta property="og:image"         content="<?php the_post_thumbnail_url()?>" />

        <?php
            wp_head();
        ?>
   </head>
   <body>
      
      <div class="webpage pc-home">
         <header class="header">
            <div class="wrapper">
               <div class="logo-bar">
                  <div class="logo-bar-left">
                     <h1 class="logo"><a href="<?php echo get_home_url()?>" title="NetBiz">
                           <img src="<?php echo get_template_directory_uri()."/assets/imgs/logo.png"?>" alt="NetBiz" />
                        </a>
                     </h1>
                  </div>
                  <div class="logo-bar-right">
                     <div class="social-links">
                        <a href="https://www.facebook.com/MCV.NetbizEntertainment" target="_blank" rel="nofollow" class="link-item"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/channel/UCQHJtnMKQMSk-zMrTmBPzRg" target="_blank" rel="nofollow" class="link-item"><i class="fab fa-youtube"></i></a>
                        <a href="https://vt.tiktok.com/ZSeCFXFyA/" target="_blank" rel="nofollow" class="link-item"><i class="fab fa-tiktok"></i></a>
                     </div>
                     <form id="frmSearch" class="https://netbiz.net.vn/search_enginer.html?p=tim-kiem" name="frmSearch" action="<?php echo get_home_url(); ?>/search">
                        <input class="search-input " type="text" placeholder="" onkeypress="" name="s" value="">
                        <button class="btn search-btn" name="submit" value="" onclick=""></button>
                     </form>
                  </div>
               </div>
            </div>
         </header>
         <nav class="navbar mb15">
            <ul class="navbar-nav wrapper">
               <li class="menu-item"><a href="<?php echo get_home_url(); ?>" class="nav-link-home"></a></li>
               <?php
                  do_shortcode('[main_menu]');
               ?>
            </ul>
         </nav>
         <span class="gotop" style="display: block;"><span class="arrow-up"></span></span>