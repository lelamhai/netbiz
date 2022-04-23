<!DOCTYPE html>
<html lang="vi" class="">
   <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php echo get_bloginfo( 'name' );?></title>
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
                     <h1 class="logo"><a href="https://netbiz.net.vn/" title="NetBiz">
                           <img src="<?php echo get_template_directory_uri()."/assets/imgs/logo.png"?>" alt="NetBiz" />
                        </a>
                     </h1>
                  </div>
                  <div class="logo-bar-right">
                     <div class="social-links">
                        <a href="https://www.facebook.com/MCV.NetbizEntertainment" target="_blank" rel="nofollow" class="link-item"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/channel/UCQHJtnMKQMSk-zMrTmBPzRg" target="_blank" rel="nofollow" class="link-item"><i class="fab fa-youtube"></i></a>
                        <!-- <a href="" target="_blank" rel="nofollow" class="link-item"><i class="fab fa-facebook-messenger"></i></a> -->
                        <a href="https://vt.tiktok.com/ZSeCFXFyA/" target="_blank" rel="nofollow" class="link-item"><i class="fab fa-tiktok"></i></a>
                     </div>
                     <a href="https://netbiz.net.vn/" target="_blank" class="icon-global hidden">International</a>
                     <form id="frmSearch" class="https://netbiz.net.vn/search_enginer.html?p=tim-kiem" name="frmSearch">
                        <input class="search-input " type="text" placeholder="" onkeypress="" name="q" value="">
                        <i class="btn search-btn" name="submit" value="" onclick=""></i>
                     </form>
                     <div class="site-login hidden">
                        <a href="https://netbiz.net.vn/" class="site-login-btn">Login</a>
                     </div>
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