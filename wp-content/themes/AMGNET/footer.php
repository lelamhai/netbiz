      <footer class="footer bg-grey-f8">
         <div class="wrapper">
            <div class="footer-top clearfix hr">
               <div class="footer-left lt">
                  <a class="footer-logo" href="<?php echo get_home_url()?>" title="NetBiz">
                     <img src="<?php echo get_template_directory_uri()."/assets/imgs/logo.png"?>" alt="NetBiz" />
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
            </div>
         </div>
      </footer>
      <!-- <a href="https://mastercms.org/" class="mastercms wrapper" target="_blank" rel="nofollow">Based on MasterCMS Ultimate Edition v2.9 2021</a> -->
      </div>   
   </body>
   <?php
      wp_footer();
   ?>
   <script>
      $(document).ready(function(){
         $('form').submit(function () {
         var name = $.trim($('.search-input ').val());
            if (name  === '') {
               alert('Mời bạn nhập');
               return false;
            }
         });

         $('.menu-button').click(function(){
            $('.menu-list').toggleClass('show_main_menu');
         })
      });
   </script>
</html>