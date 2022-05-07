      <footer class="footer bg-grey-f8">
         <div class="wrapper">
            <div class="footer-top clearfix hr">
               <div class="footer-left lt">
                  <a class="footer-logo" href="<?php echo get_home_url()?>" title="<?php echo get_bloginfo( 'name' );?>">
                     <img src="<?php echo get_template_directory_uri()."/assets/imgs/logo.png"?>" alt="<?php echo get_bloginfo( 'name' );?>" />
                  </a>
                  <p>Công ty Cổ phần Tập Đoàn MCV</p>
                  <p>Địa chỉ: 18bis/22/11 Nguyễn Thị Minh Khai, phường Đa Kao, quận 1, Thành phố Hồ Chí Minh.</p>
                  <p>Giấy phép thiết lập trang thông tin điện tử tổng hợp trên mạng số 01/GP-STTTT do Sở Thông tin và Truyền thông TP.HCM cấp ngày 05 tháng 01 năm 2021</p>
                  <p>Điện thoại: 0839105142</p>
                  <p>Email: toasoan@netbiz.net.vn</p>
                  <p>Chịu trách nhiệm quản lý nội dung</p>
                  <p>Bà: Đinh Thị Hồng Thắm  </p>
                  <p>Email: tham.dinh@mcv.com.vn</p>
               </div>
               <div class="footer-right rt">
                  <ul class="footer-menu mobile">
                     <?php
                        do_shortcode('[show_footer1_menu]');
                     ?>
                     <?php
                        do_shortcode('[show_footer2_menu]');
                     ?>
                     <?php
                        do_shortcode('[show_footer3_menu]');
                     ?>
                     <?php
                        do_shortcode('[show_footer4_menu]');
                     ?>
                     <?php
                        do_shortcode('[show_footer5_menu]');
                     ?>
                     <?php
                        do_shortcode('[show_footer6_menu]');
                     ?>
                     <?php
                        do_shortcode('[show_footer7_menu]');
                     ?>
                     <?php
                        do_shortcode('[show_footer8_menu]');
                     ?>
                  </ul>
               </div>
            </div>
            <div class="footer-bottom">
               <p>© Bản quyền thuộc về Báo Tin tức - NetBiz. Cấm sao chép dưới mọi hình thức nếu không có sự chấp thuận bằng văn bản</p>
               <div class="social-link clearfix mt20 mobile">
                  <a href="https://www.facebook.com/MCV.NetbizEntertainment" class="social-link-item" target="_blank" rel="nofollow">
                     <img src="<?php echo get_template_directory_uri()."/assets/imgs/icon_facebook.png"?>" alt="">
                  </a>
                  <a href="https://www.youtube.com/channel/UCQHJtnMKQMSk-zMrTmBPzRg" class="social-link-item" target="_blank" rel="nofollow">
                     <img src="<?php echo get_template_directory_uri()."/assets/imgs/icon_youtube.png"?>" alt="">
                  </a>
                  <a href="https://vt.tiktok.com/ZSeCFXFyA/" class="social-link-item" target="_blank" rel="nofollow">
                     <img src="<?php echo get_template_directory_uri()."/assets/imgs/icon_tiktok.png"?>" alt="">
                  </a>
               </div>
            </div>
         </div>
      </footer>
      <a href="https://mastercms.org/" class="mastercms wrapper" target="_blank" rel="nofollow">Based on MasterCMS Ultimate Edition v2.9 2021</a>
      </div>   
   </body>
   <?php
      wp_footer();
   ?>
   <script>
      window.fbAsyncInit = function() {
         FB.init({
            appId      : '1024547571496706',
            xfbml      : true,
            version    : 'v13.0'
         });
         FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));
   </script>
   <script>
      $(document).ready(function(){
         var is_mobile = false;
         if( $('.mobile').css('display')!='none') {
            is_mobile = true;       
         }

         if (is_mobile == true) {
            $('#emagazine').addClass('js-slide');
         }



         $('#frmSearch').submit(function () {
         var name = $.trim($('.search-input ').val());
            if (name  === '') {
               alert('Mời bạn nhập');
               return false;
            }
         });

         $('#mobile-frmSearch').submit(function () {
         var name = $.trim($('.search-input-mobile').val());
            if (name  === '') {
               alert('Mời bạn nhập');
               return false;
            }
         });

         $('.menu-button').click(function(){
            $('.menu-list').toggleClass('show_main_menu');
         });

         $('.btn-search').click(function(){ 
            if($( "#mobile-frmSearch" ).hasClass("show-search-mobile"))
            {
               $("#mobile-frmSearch").removeClass("show-search-mobile");
            } else {
               $("#mobile-frmSearch").addClass("show-search-mobile");
            }
         });

         // cháº¡y slide box emagazine
         $('.js-slide').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
         })
         
         //list down subcategory cá»§a cĂ¡c box trang chá»§
         $('.js-list-down-btn').on('click',function() {
            $(this).toggleClass('active');
            $(this).next().slideToggle();
         })
      });


      $(".cancel-popup").click(function() {
         $(".fancybox-overlay").css("display","none");
      });

      $("#submit").click(function() {
         var comment = $.trim($('#comment').val());
         var email = $.trim($('#email').val());
         var author = $.trim($('#author').val());
         if(comment === '' || email === '' || author === '')
         {
            alert("Những trường có dấu * bắt buộc phải nhập");
            return false;
         }
      });

      $(".button-comment").click(function() { 
         var comment = $.trim($('.__comment').val());
         if(comment.length < 1 )
         {
            $(".errors").css("display","block");
            return false;
         } else {
            $(".fancybox-overlay").css("display","block");
            $('#comment').val($('.__comment').val());
         }
      });
      


   </script>

   
</html>