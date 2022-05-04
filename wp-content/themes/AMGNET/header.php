<!DOCTYPE html>
<html lang="vi" class="">
   <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <meta http-equiv="Content-Type" content="application/json; charset=UTF-8" > 
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <title><?php echo get_bloginfo( 'name' );?></title>
         <meta property="og:url"           content="<?php echo get_the_permalink(get_the_ID())?>" />
         <meta property="og:title"         content="<?php echo get_the_title(get_the_ID())?>" />
         <meta property="og:description"   content="<?php echo get_the_excerpt(get_the_ID())?>" />
         <meta property="og:image"         content="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" />
         <meta property="og:type"          content="website" />

        <?php
            wp_head();
        ?>
   </head>
   <body>
      <input type="hidden" id="url-home" value="<?php echo get_home_url()?>">
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
                     <form id="frmSearch" class="" name="frmSearch" action="<?php echo get_home_url(); ?>/search">
                        <input class="search-input" type="text" placeholder="" onkeypress="" name="s" value="">
                        <button class="btn search-btn" value="" onclick=""></button>
                     </form>
                  </div>
               </div>
            </div>

            <div class="d-flex wrapper btn-group mobile">
               <div class="">
                  <a href="https://netbiz.net.vn/xem-nhieu" class="btn-grey">Xem nhiều</a>
                  <a href="https://netbiz.net.vn/moi-nhat" class="btn-grey">Mới nhất</a>
                  <!-- <a href="" class="btn-subscribe">Subscribe</a> -->
               </div>
               <div class="">
                  <div class="btn-search search-button"></div>
                  <div class="btn-menu menu-button"></div>
               </div>
            </div>
         </header>
         <div id="shortcut" class="navigation_scroll wrapper mobile">
            <a href="https://netbiz.net.vn/" class="icon-home"></a>
            <div id="list-featured" class="list-shortcut">
               <a href="https://netbiz.net.vn/showbiz" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Showbiz</a>
               <a href="https://netbiz.net.vn/gia-dinh" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Gia đình</a>
               <a href="https://netbiz.net.vn/come-out" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Come Out</a>
               <a href="https://netbiz.net.vn/giai-tri" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Giải trí</a>
               <a href="https://netbiz.net.vn/xe" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Xe</a>
               <a href="https://netbiz.net.vn/cong-nghe" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Công nghệ</a>
               <a href="https://netbiz.net.vn/tai-chinh" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Tài chính</a>
               <a href="https://netbiz.net.vn/the-thao" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Thể thao</a>
               <a href="https://netbiz.net.vn/e-magazine" class="" style="padding-left: 8.75px; padding-right: 8.75px;">E-Magazine</a>
               <a href="https://netbiz.net.vn/videos" class="" style="padding-left: 8.75px; padding-right: 8.75px;">Videos</a>
               <a href="https://netbiz.net.vn/live" style="padding-left: 8.75px; padding-right: 8.75px;">Live</a>
            </div>
            
         </div>
         <form id="mobile-frmSearch" class="" name="frmSearch" action="<?php echo get_home_url(); ?>/search">
            <input type="text" placeholder="" name="s" value="" class="search-input-mobile" >
            <button type="submit" name="submit" value="" >Tìm kiếm</button>
         </form>
         <nav class="navbar mb15 menu-list">
            <div class="menu-header">
               <span class="btn icon-close menu-button rt"></span>
               <div class="logo-bar logo-mobile wrapper mobile">
                  <div class="logo"><a href="https://netbiz.net.vn/" title="NetBiz">
                     <img src="<?php echo get_template_directory_uri()."/assets/imgs/logo.png"?>" alt="NetBiz">
                     </a>
                  </div>
               </div>
            </div>
            <ul class="navbar-nav wrapper">
               <li class="menu-item pc"><a href="<?php echo get_home_url(); ?>" class="nav-link-home"></a></li>
               <li class="menu-item first"><a href="<?php echo get_home_url()?>">Trang Chủ</a></li>
               <?php
                  do_shortcode('[main_menu]');
               ?>
            </ul>
         </nav>
         <span class="gotop" style="display: block;"><span class="arrow-up"></span></span>