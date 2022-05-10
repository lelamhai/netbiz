<!DOCTYPE html>
<html lang="vi" class="">
   <head>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <meta http-equiv="Content-Type" content="application/json; charset=UTF-8" > 
         <meta name="viewport" content="width=device-width, initial-scale=1" />
         <title><?php echo get_bloginfo( 'name' );?></title>
		   <meta property="og:url"           content="<?php echo get_the_permalink(get_the_ID())?>" />
	  	   <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" />
		   <meta property="og:image:secure_url" content="<?php echo get_the_post_thumbnail_url(get_the_ID())?>" />
	   	<meta property="og:type"          content="image/jpeg" />
		   <meta property="og:image:width" content="400" />
		   <meta property="og:image:height" content="300" />
	      <meta property="og:title"         content="<?php echo get_the_title(get_the_ID())?>" />
         <meta property="og:description"   content="<?php echo get_the_excerpt(get_the_ID())?>" />
		   <meta property="og:image:alt" content="<?php echo get_the_title(get_the_ID())?>" />
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
                     <h1 class="logo"><a href="<?php echo get_home_url()?>" title="<?php echo get_bloginfo( 'name' );?>">
                           <img src="<?php echo get_template_directory_uri()."/assets/imgs/logo.png"?>" alt="<?php echo get_bloginfo( 'name' );?>" />
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
                  <a href="<?php echo  get_home_url()?>/xem-nhieu" class="btn-grey">Xem nhiều</a>
                  <a href="<?php echo  get_home_url()?>/moi-nhat" class="btn-grey">Mới nhất</a>
               </div>
               <div class="">
                  <div class="btn-search search-button"></div>
                  <div class="btn-menu menu-button"></div>
               </div>
            </div>
         </header>
         <div id="shortcut" class="navigation_scroll wrapper mobile">
            <a href="<?php echo  get_home_url()?>" class="icon-home"></a>
            <div id="list-featured" class="list-shortcut">
               <?php
                  do_shortcode('[show_menu_mobile]');
               ?>
            </div>
         </div>
         <form id="mobile-frmSearch" class="mobile" name="frmSearch" action="<?php echo get_home_url(); ?>/search">
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