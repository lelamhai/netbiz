<?php
get_header();
?>
<main class="main">
   <div class="wrapper clearfix mb35">
      <div class="w800 lt">
         <div class="cat-cover no-meta">
            <div class="cat-content">
               <!-- 2 -->
               <?php 
               $args = array(
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'category_name' => 'showbiz',
                  'posts_per_page' => 1,
              );
               $the_query = new WP_Query( $args ); ?>
               
               <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <article class="article">
                        <a href="https://netbiz.net.vn/mot-ngay-cung-miss-grand-hongkong-sen-yang-tai-sai-gon-di-tim-mon-sinh-to-oai-oam-khong-ai-ban-1493.html" title="<?php the_title();?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="article-image">
                        </a>
                        <div class="article-info">
                           <h2 class="article-title">
                              <a href="https://netbiz.net.vn/mot-ngay-cung-miss-grand-hongkong-sen-yang-tai-sai-gon-di-tim-mon-sinh-to-oai-oam-khong-ai-ban-1493.html" title="<?php the_title();?>">
                                 <?php the_title();?>                    
                                 <span class="ico-image"></span><span class="ico-video"></span>                  
                              </a>
                           </h2>
                           <div class="article-desc"><?php the_excerpt() ?></div>
                        </div>
                     </article>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
               <?php else : ?>
                  <article class="article">
                     Chưa có dữ liệu
                  </article>
               <?php endif; ?>
               
              
            </div>
         </div>
      </div>
      <div class="w300 rt">
         <div class="cat-listing cat-top-stories no-meta no-desc title-1622">
            <div class="cat-title mb35">
               <h2 class="cat-name"><span>Top Stories</span></h2>
            </div>
            <div class="cat-content scroll pr5">
               <!-- 5 -->
               <?php
                  do_shortcode('[show_top_stories]');
               ?>
            </div>
         </div>
      </div>
   </div>
   <!-- 37 -->
   <div class="wrapper">
      <div id="home-center1" class="banner banner-random mb35">
         <div class="banner-item item-random" style="display: block;">
            <a href="#" class="__ads_click" target="_blank">
               <img  src="<?php echo get_template_directory_uri()."/assets/imgs/banner1.png"?>" style="vertical-align:middle;" width="4043" height="1043">
            </a>        
         </div>
      </div>
   </div>
   <div class="section-video bg-grey-f8 pt20 pb30 mb35">
      <div class="wrapper">
         <div class="cat-title mb20">
            <h2 class="cat-name"><a href="https://netbiz.net.vn/videos">Videos</a></h2>
            <a href="https://netbiz.net.vn/" class="btn-more-video rt hidden">Xem thêm</a>
         </div>
         <div class="clearfix">
            <div class="cat-video-left w760 lt">
               <div class="cat-content">
                  <!-- 6 -->
                 
                     <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'video',
                        'posts_per_page' => 1,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                           <article class="article">
                              <div class="video-frame">
                                 <!-- show_video_file   -->
                                 <div class="videoWrapper clearfix">
                                    <div id="myElement" class="jwplayer jw-reset jw-state-idle jw-stretch-uniform jw-flag-aspect-mode jw-breakpoint-4 jw-flag-user-inactive" tabindex="0" aria-label="Video Player" style="width: 100%;">
                                       <div class="jw-aspect jw-reset" style="padding-top: 56.25%;"></div>
                                       <div class="jw-media jw-reset">
                                          <video class="jw-video jw-reset" disableremoteplayback="" webkit-playsinline="" playsinline="" preload="metadata" src="<?php echo get_field( "video" );?>" style="object-fit: fill;"></video>
                                       </div>
                                    </div>
                                    <script type="text/javascript">
                                       var playerInstance = jwplayer("myElement");
                                       playerInstance.setup({
                                       file: "<?php echo get_field( "video" );?>",
                                                               image: "<?php the_post_thumbnail_url()?>",
                                                               width: '100%',
                                       aspectratio: "16:9",
                                       autostart: false
                                       });
                                    </script>
                                 </div>
                              </div>
                              <div class="article-info">
                                 <h3 class="article-title">
                                    <a href="<?php the_permalink() ?>" title="Chàng nhạc công mãi vấn vương tình đầu ngại ngùng ôm nữ chủ tịch và cái kết"><?php the_title()?></a>
                                 </h3>
                                 <div class="article-meta">
                                    <span class="icon-view hide-empty">272 lượt xem</span>
                                    <span class="article-publish-time"><?php echo get_the_date("d/m/Y H:i") ?></span>
                                 </div>
                                 <div class="article-desc"><?php the_content();?></div>
                              </div>
                           </article>
                           
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
                 
               </div>
            </div>
            <div class="cat-video-right no-desc w340 rt">
               <div class="cat-title-grey">
                  <h2 class="cat-name-white"><a href="https://netbiz.net.vn/">NetBiz’s TV</a></h2>
               </div>
               <div class="cat-content cat-listing ">
                  <div class="cat-content-inner scroll">
                     <!-- 7 --> 
                     
                     <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'video',
                        'posts_per_page' => 11,
                        'offset'         => 1
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                           <a class="article-thumb" href="<?php the_permalink() ?>" title="<?php the_title()?>">
                              <img class="article-image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                              <span class="icon-play"></span>
                           </a>
                           <div class="article-meta">
                              <span class="icon-view hide-empty">1 lượt xem</span>
                              <span class="article-publish-time"><?php echo get_the_date("d/m/Y H:i") ?></span>
                           </div>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                    <?php the_title()?>
                                 </a>
                              </h3>
                           </div>
                        </article>
                           
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="wrapper clearfix mb50">
      <div class="w760 lt">
         <div class="cat-listing title-2228 no-publish-time article-bdb-30 thumb-w240">
            <div class="cat-content">
               <!-- 8 -->              
               <article class="article">
                  <a href="https://netbiz.net.vn/ngoc-lan-tram-tro-truoc-can-biet-thu-tien-ty-cua-hhen-nie-1504.html" title="Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/ngoc-lan-tram-tro-truoc-can-biet-thu-tien-ty-cua-hhen-nie-1504.html" title="Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê">Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê                      <span class="ico-image"></span><span class="ico-video"></span>                    </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">09:00</span> | <span class="format_date">19/04/2022</span></span>
                        <a href="https://netbiz.net.vn/showbiz" class="article-catname">Showbiz</a>
                     </div>
                     <div class="article-desc">MC Quốc Thuận và diễn viên Ngọc Lan đã có chuyến về thăm quê hương của Hoa hậu H’Hen Niê và phải trầm trồ trước căn biệt thự khá khang trang của nàng hậu tại quê nhà.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/diem-tin-thanh-pho-1842022-xu-ly-nghiem-hanh-vi-ep-khach-du-lich-mua-hang-hoa-1503.html" title="“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/diem-tin-thanh-pho-1842022-xu-ly-nghiem-hanh-vi-ep-khach-du-lich-mua-hang-hoa-1503.html" title="“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa">“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa                      <span class="ico-video"></span>                    </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">20:30</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/live" class="article-catname">Live</a>
                     </div>
                     <div class="article-desc">Theo đó, giáo heo hơi sẽ còn tiếp tục tăng do giá thành chăn nuôi và giá xăng dầu còn cao, tuy nhiên mức tăng sẽ không quá cao. Giá trái cây đầu mùa thấp so với mọi năm vì khó xuất đi Trung Quốc.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/hau-covid-19-benh-nhan-co-nguy-co-hinh-thanh-mau-dong-trong-phoi-1496.html" title="Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/hau-covid-19-benh-nhan-co-nguy-co-hinh-thanh-mau-dong-trong-phoi-1496.html" title="Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi">Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">15:00</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Khi gặp tình trạng này, bệnh nhân có thể đau ở ngực hoặc phía trên của lưng, khó thở, ho ra máu. Nếu thấy nghẹt thở, tim đập quá nhanh, cần đi khám ngay.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/mot-ngay-cung-miss-grand-hongkong-sen-yang-tai-sai-gon-di-tim-mon-sinh-to-oai-oam-khong-ai-ban-1493.html" title="Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/mot-ngay-cung-miss-grand-hongkong-sen-yang-tai-sai-gon-di-tim-mon-sinh-to-oai-oam-khong-ai-ban-1493.html" title="Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán">Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán                      <span class="ico-image"></span><span class="ico-video"></span>                    </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">14:30</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/showbiz" class="article-catname">Showbiz</a>
                     </div>
                     <div class="article-desc">Sau 2 năm đăng quang và được khán giả yêu mến, Hoa hậu Sen Yang - người được biết là cây hài của cuộc thi Miss Grand 2021 đã có mặt tại tòa nhà MCV.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/chong-bat-ngo-mang-hoa-xin-loi-vo-tren-song-truyen-hinh-vi-tung-len-di-karaoke-om-khi-con-trai-dau-long-moi-3-thang-tuoi-1497.html" title="Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/chong-bat-ngo-mang-hoa-xin-loi-vo-tren-song-truyen-hinh-vi-tung-len-di-karaoke-om-khi-con-trai-dau-long-moi-3-thang-tuoi-1497.html" title="Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi">Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">13:36</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Cặp đôi vợ chồng Nguyễn Văn Lên và Nguyễn Thị Minh Nguyệt đã mang đến những câu chuyện hết sức thú vị trong chương trình “Vợ chồng son” tập 451.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/bi-di-tat-bat-san-am-dao-be-gai-phai-chiu-dau-bung-suot-5-thang-khong-co-kinh-1495.html" title="Bị dị tật bất sản âm đạo, bé gái phải chịu đau bụng suốt 5 tháng không có kinh" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Bị dị tật bất sản âm đạo, bé gái phải chịu đau bụng suốt 5 tháng không có kinh" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/bi-di-tat-bat-san-am-dao-be-gai-phai-chiu-dau-bung-suot-5-thang-khong-co-kinh-1495.html" title="Bị dị tật bất sản âm đạo, bé gái phải chịu đau bụng suốt 5 tháng không có kinh">Bị dị tật bất sản âm đạo, bé gái phải chịu đau bụng suốt 5 tháng không có kinh                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">13:00</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Đến tuổi dậy thì nhưng chậm kinh nguyệt, phải chịu đựng cơn đau bụng 7-10 ngày mỗi tháng trong suốt 5 tháng. Bé gái 11 tuổi được phát hiện bị dị tật bất sản âm đạo bẩm sinh, phải xử lý gấp.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/sau-8-thang-nghe-si-giang-coi-qua-doi-con-trai-chia-se-loat-hinh-anh-khien-cdm-xuc-dong-1499.html" title="Sau 8 tháng nghệ sĩ Giang Còi qua đời, con trai chia sẻ loạt hình ảnh khiến CĐM xúc động" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Sau 8 tháng nghệ sĩ Giang Còi qua đời, con trai chia sẻ loạt hình ảnh khiến CĐM xúc động" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/sau-8-thang-nghe-si-giang-coi-qua-doi-con-trai-chia-se-loat-hinh-anh-khien-cdm-xuc-dong-1499.html" title="Sau 8 tháng nghệ sĩ Giang Còi qua đời, con trai chia sẻ loạt hình ảnh khiến CĐM xúc động">Sau 8 tháng nghệ sĩ Giang Còi qua đời, con trai chia sẻ loạt hình ảnh khiến CĐM xúc động                      <span class="ico-image"></span>                    </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">11:55</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/showbiz" class="article-catname">Showbiz</a>
                     </div>
                     <div class="article-desc">Loạt hình ảnh được con trai cố nghệ sĩ Giang Còi chia sẻ thu hút được hàng nghìn lượt tương tác và khiến người hâm mộ không khỏi nghẹn ngào.</div>
                  </div>
               </article>
            </div>
         </div>
      </div>
      <div class="w340 rt">
         <div class="cat-trending no-publish-time title-1825 article-bdb-15 mb30">
            <div class="cat-title mb20">
               <h2 class="cat-name"><span>Top Trending</span></h2>
            </div>
            <div class="cat-content">
               <!-- 9 -->              
               <article class="article">
                  <a href="https://netbiz.net.vn/ngoc-lan-tram-tro-truoc-can-biet-thu-tien-ty-cua-hhen-nie-1504.html" title="Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê" class="article-thumb">
                  <img src="./assets/imgs/temp/5.jpeg" alt="Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê" class="article-image">
                  </a>
                  <div class="article-info">
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">09:00</span> | <span class="format_date">19/04/2022</span></span>
                        <a href="https://netbiz.net.vn/showbiz" class="article-catname">Showbiz</a>
                     </div>
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/ngoc-lan-tram-tro-truoc-can-biet-thu-tien-ty-cua-hhen-nie-1504.html" title="Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê">Ngọc Lan trầm trồ trước căn biệt thự tiền tỷ của H’Hen Niê                      <span class="ico-image"></span><span class="ico-video"></span>                    </a>
                     </h3>
                     <div class="article-desc">MC Quốc Thuận và diễn viên Ngọc Lan đã có chuyến về thăm quê hương của Hoa hậu H’Hen Niê và phải trầm trồ trước căn biệt thự khá khang trang của nàng hậu tại quê nhà.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/diem-tin-thanh-pho-1842022-xu-ly-nghiem-hanh-vi-ep-khach-du-lich-mua-hang-hoa-1503.html" title="“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa" class="article-thumb">
                  <img src="./assets/imgs/temp/5.jpeg" alt="“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa" class="article-image">
                  </a>
                  <div class="article-info">
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">20:30</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/live" class="article-catname">Live</a>
                     </div>
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/diem-tin-thanh-pho-1842022-xu-ly-nghiem-hanh-vi-ep-khach-du-lich-mua-hang-hoa-1503.html" title="“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa">“Điểm tin thành phố” 18/4/2022: Xử lý nghiêm hành vi ép khách du lịch mua hàng hóa                      <span class="ico-video"></span>                    </a>
                     </h3>
                     <div class="article-desc">Theo đó, giáo heo hơi sẽ còn tiếp tục tăng do giá thành chăn nuôi và giá xăng dầu còn cao, tuy nhiên mức tăng sẽ không quá cao. Giá trái cây đầu mùa thấp so với mọi năm vì khó xuất đi Trung Quốc.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/hau-covid-19-benh-nhan-co-nguy-co-hinh-thanh-mau-dong-trong-phoi-1496.html" title="Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi" class="article-thumb">
                  <img src="./assets/imgs/temp/5.jpeg" alt="Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi" class="article-image">
                  </a>
                  <div class="article-info">
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">15:00</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/hau-covid-19-benh-nhan-co-nguy-co-hinh-thanh-mau-dong-trong-phoi-1496.html" title="Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi">Hậu COVID-19 bệnh nhân có nguy cơ hình thành máu đông trong phổi                                          </a>
                     </h3>
                     <div class="article-desc">Khi gặp tình trạng này, bệnh nhân có thể đau ở ngực hoặc phía trên của lưng, khó thở, ho ra máu. Nếu thấy nghẹt thở, tim đập quá nhanh, cần đi khám ngay.</div>
                  </div>
               </article>
            </div>
         </div>
         <!-- 41 -->
         <div id="home-right1" class="banner">
            <div class="banner-item item-random" style="display: block;">
               <a href="#" class="__ads_click" target="_blank"><img  src="<?php echo get_template_directory_uri()."/assets/imgs/banner3.png"?>"  style="vertical-align:middle;" width="1251" height="2501"></a>            
            </div>
         </div> 
      </div>
   </div>
   <!-- 38 -->
   <div class="wrapper">
      <div id="home-center2" class="banner mb40">
         <div class="banner-item item-random" style="display: block;">
            <a href="#" class="__ads_click" target="_blank"><img  src="<?php echo get_template_directory_uri()?>/assets/imgs/banner2.png" style="vertical-align:middle;" width="4043" height="376"></a>          
         </div>
      </div>
   </div>
   <div class="cat-emagazine bg-grey-f8 no-meta mb30 clearfix">
      <div class="wrapper cat-emagazine-inner">
         <div class="cat-emagazine-background">
         </div>
         <h2 class="cat-emagazine-title">
            <a href="https://netbiz.net.vn/e-magazine"><span class="c-pink">E-mag</span><span class="c-white">azine</span></a>
         </h2>
         <div class="cat-content">
            <!-- 10 -->
                     <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'e-magazine',
                        'posts_per_page' => 2,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="Đáp án cho bài toán muôn thuở, NSND Hồng Vân gợi ý: &quot;Mùa xoài xanh, mua ổi&quot;?" class="article-image">
                           <span class="ico-emag"></span>              </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?>                   
                                    <span class="ico-image"></span>                  
                                 </a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>

                           
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
          
         </div>
      </div>
   </div>
   <div class="wrapper clearfix mb50">
      <div class="w760 lt">
         <div class="cat-listing title-2228 no-publish-time article-bdb-30 thumb-w240">
            <div class="cat-content">
               <!-- 25 -->              
               <article class="article">
                  <a href="https://netbiz.net.vn/xong-tinh-dau-co-huu-ich-trong-phong-va-chua-covid-19-khong-1492.html" title="Xông tinh dầu có hữu ích trong phòng và chữa Covid-19 không?" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Xông tinh dầu có hữu ích trong phòng và chữa Covid-19 không?" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/xong-tinh-dau-co-huu-ich-trong-phong-va-chua-covid-19-khong-1492.html" title="Xông tinh dầu có hữu ích trong phòng và chữa Covid-19 không?">Xông tinh dầu có hữu ích trong phòng và chữa Covid-19 không?                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">10:06</span> | <span class="format_date">18/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Tình hình Covid-19 trên thế giới còn khá phức tạp, ở một số nơi tại các hộ gia đình lo lắng về dịch bệnh lây lan. Nhiều người lan truyền việc xông tinh dầu giúp ích trong việc phòng và chữa SARS-CoV-2, không những không chữa khỏi mà bệnh còn diễn biến nặng hơn dẫn đến tổn thương da, thần kinh nghiêm trọng.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/vien-thuoc-con-nguyen-vo-nam-trong-khi-quan-benh-nhan-suot-3-nam-1491.html" title="Viên thuốc còn nguyên vỏ nằm trong khí quản bệnh nhân suốt 3 năm" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Viên thuốc còn nguyên vỏ nằm trong khí quản bệnh nhân suốt 3 năm" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/vien-thuoc-con-nguyen-vo-nam-trong-khi-quan-benh-nhan-suot-3-nam-1491.html" title="Viên thuốc còn nguyên vỏ nằm trong khí quản bệnh nhân suốt 3 năm">Viên thuốc còn nguyên vỏ nằm trong khí quản bệnh nhân suốt 3 năm                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">21:00</span> | <span class="format_date">17/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Mới đây, các bác sĩ Khoa Nội hô hấp - Miễn dịch dị ứng, Bệnh viện Đà Nẵng vừa gắp thành công viên thuốc còn nguyên vỏ nằm trong khí quản nam bệnh nhân 49 tuổi.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/co-gai-my-mac-23-trieu-chung-hau-covid-19-1490.html" title="Cô gái Mỹ mắc 23 triệu chứng hậu Covid-19" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Cô gái Mỹ mắc 23 triệu chứng hậu Covid-19" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/co-gai-my-mac-23-trieu-chung-hau-covid-19-1490.html" title="Cô gái Mỹ mắc 23 triệu chứng hậu Covid-19">Cô gái Mỹ mắc 23 triệu chứng hậu Covid-19                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">19:00</span> | <span class="format_date">17/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Hậu Covid-19 là vấn đề lo ngại của tất cả mọi người. Theo WHO có khoảng hơn 200 triệu chứng hậu Covid-19. Mọi người sau khi mắc covid -19 đều có khả năng bị hậu Covid, tuy nhiên xuất hiện cùng lúc hàng chục triệu chứng thì ít gặp. Vậy nhưng một cô gái tại Mỹ lại cùng lúc xuất hiện tới 23 triệu chứng hậu Covid-19.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/hau-covid-19-nhung-dau-hieu-can-luu-y-va-nhanh-chong-di-kham-1489.html" title="Hậu COVID-19: Những dấu hiệu cần lưu ý và nhanh chóng đi khám" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Hậu COVID-19: Những dấu hiệu cần lưu ý và nhanh chóng đi khám" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/hau-covid-19-nhung-dau-hieu-can-luu-y-va-nhanh-chong-di-kham-1489.html" title="Hậu COVID-19: Những dấu hiệu cần lưu ý và nhanh chóng đi khám">Hậu COVID-19: Những dấu hiệu cần lưu ý và nhanh chóng đi khám                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">16:00</span> | <span class="format_date">17/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Các bệnh lý hậu COVID-19 đang là vấn đề được nhiều người quan tâm bởi lẽ ở bệnh nhân sau nhiễm COVID-19 có rất nhiều các triệu chứng làm ảnh hưởng đến sức khỏe tinh thần và thể chất người bệnh. Thời điểm nào, dấu hiệu nào nên đi khám hậu COVID-19 được các bác sĩ bệnh viện Đa khoa Đông Anh khuyến cáo chi tiết.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/tram-cam-hau-covid-19-o-tre-em-va-nhung-hau-qua-dang-buon-neu-khong-duoc-quan-tam-1488.html" title="Trầm cảm hậu COVID-19 ở trẻ em và những hậu quả đáng buồn nếu không được quan tâm" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Trầm cảm hậu COVID-19 ở trẻ em và những hậu quả đáng buồn nếu không được quan tâm" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/tram-cam-hau-covid-19-o-tre-em-va-nhung-hau-qua-dang-buon-neu-khong-duoc-quan-tam-1488.html" title="Trầm cảm hậu COVID-19 ở trẻ em và những hậu quả đáng buồn nếu không được quan tâm">Trầm cảm hậu COVID-19 ở trẻ em và những hậu quả đáng buồn nếu không được quan tâm                                          </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">14:04</span> | <span class="format_date">17/04/2022</span></span>
                        <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                     </div>
                     <div class="article-desc">Bên cạnh những triệu chứng mệt mỏi, yếu cơ, rối loạn tâm thần, trẻ em còn dễ bị trầm cảm hậu COVID-19. Tình trạng này, khiến trẻ thường buồn chán, vận động chậm chạp, thay đổi thói quen sinh hoạt, dễ tức giận và hạn chế tiếp xúc xã hội.</div>
                  </div>
               </article>
               <article class="article">
                  <a href="https://netbiz.net.vn/nhan-sac-tre-mai-khong-gia-cua-nsnd-thu-ha-1487.html" title="Nhan sắc " trẻ="" mãi="" không="" già"="" của="" nsnd="" thu="" hà"="" class="article-thumb">
                  <img src="./assets/imgs/temp/4.jpeg" alt="Nhan sắc &quot;trẻ mãi không già&quot; của NSND Thu Hà" class="article-image">
                  </a>
                  <div class="article-info">
                     <h3 class="article-title">
                        <a href="https://netbiz.net.vn/nhan-sac-tre-mai-khong-gia-cua-nsnd-thu-ha-1487.html" title="Nhan sắc " trẻ="" mãi="" không="" già"="" của="" nsnd="" thu="" hà"="">Nhan sắc "trẻ mãi không già" của NSND Thu Hà                      <span class="ico-image"></span>                    </a>
                     </h3>
                     <div class="article-meta">
                        <span class="article-publish-time"><span class="format_time">11:46</span> | <span class="format_date">17/04/2022</span></span>
                        <a href="https://netbiz.net.vn/showbiz" class="article-catname">Showbiz</a>
                     </div>
                     <div class="article-desc">Tuổi 53, nhưng sắc vóc của NSND Thu Hà vẫn tươi trẻ, "bí kíp" chính là nhờ vào việc giữ lối sống lành mạnh, sinh hoạt điều độ và tập thể thao mỗi ngày.</div>
                  </div>
               </article>
            </div>
         </div>
      </div>
      <div class="w340 rt">
         <!-- 42 -->
         <div id="home-right2" class="banner">
         </div>
      </div>
   </div>
   <!-- 39 -->
   <div class="wrapper">
      <div id="home-center3" class="banner mb50">
      </div>
   </div>
   <div class="wrapper">
      <div class="cat-grid-3-first-big no-publish-time clearfix mb40">
         <div class="cat-content">
            <!-- 11 --> 
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'showbiz',
                        'posts_per_page' => 3,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?>
                                    <span class="ico-image"></span>                  
                                 </a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>

                           
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
            
         </div>
      </div>
   </div>
   <div class="wrapper clearfix mb40">
      <div class="w760 lt">
         <div class="cat-grid-3 no-desc no-meta mb35 clearfix">
            <div class="cat-title mb25">
               <h2 class="cat-name"><a href="https://netbiz.net.vn/gia-dinh">Gia đình</a></h2>
               <div class="cat-name-sub rt" style="letter-spacing: -0.3px;">
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/gia-dinh/vo-chong-son">Vợ chồng son</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/gia-dinh/me-chong-nang-dau">Mẹ chồng nàng dâu</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/gia-dinh/tham-tu-hon-nhan">Thám tử hôn nhân</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/gia-dinh/netlove">NetLove</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/gia-dinh/song-khoe">Sống khỏe</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/gia-dinh/lam-dep">Làm đẹp</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/gia-dinh/am-thuc">Ẩm thực</a>
               </div>
            </div>
            <div class="cat-content">
               <!-- 12 --> 
                     <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'gia-dinh',
                        'posts_per_page' => 3,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?></a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>

                           
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
            </div>
         </div>
         <div class="cat-grid-3 no-desc no-meta mb35 clearfix">
            <div class="cat-title mb25">
               <h2 class="cat-name"><a href="https://netbiz.net.vn/come-out">Come Out</a></h2>
               <div class="cat-name-sub rt">
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/come-out/buoc-ra-anh-sang">Bước ra ánh sáng</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/come-out/hot-couple">Hot Couple</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/come-out/lgbtq">LGBTQ+</a>
               </div>
            </div>
            <div class="cat-content">
               <!-- 13 -->
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'come-out',
                        'posts_per_page' => 3,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?></a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>

                           
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
               
            </div>
         </div>
         <div class="cat-entertainment no-publish-time">
            <div class="cat-title mb25">
               <h2 class="cat-name"><a href="https://netbiz.net.vn/giai-tri">Giải trí</a></h2>
               <div class="cat-name-sub rt">
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/giai-tri/phim">Phim</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/giai-tri/tv-series">TV Series</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/giai-tri/nhac">Nhạc</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/giai-tri/sach">Sách</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/giai-tri/choi">Chơi</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/giai-tri/netbizs-pick">Netbiz’s Pick</a>
               </div>
            </div>
            <div class="cat-content">
               <!-- 14 -->       
               
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'giai-tri',
                        'posts_per_page' => 1,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb" style="height: 588px;">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                    <?php the_title()?>                      
                                    <span class="ico-image"></span>                    
                                 </a>
                              </h3>
                              <div class="article-meta">
                                 <a href="https://netbiz.net.vn/giai-tri" class="article-catname">Giải trí</a>
                              </div>
                              <div class="article-desc"><?php the_excerpt()?></div>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>

                           
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>


                     <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'giai-tri',
                        'posts_per_page' => 2,
                        'offset'         => 1
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                    <?php the_title()?>                      
                                    <span class="ico-image"></span><span class="ico-video"></span>                    
                                 </a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article> 
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
            </div>
         </div>
      </div>
      <div class="w340 rt">
         <!-- 43 -->
         <div id="home-right3" class="banner">
         </div>
      </div>
   </div>
   <!-- 40 -->
   <div class="wrapper">
      <div id="home-center4" class="banner mb40">
      </div>
   </div>
   <div class="wrapper">
      <div class="cat-grid-3-first-big no-publish-time clearfix mb35">
         <div class="cat-title mb25">
            <h2 class="cat-name"><a href="https://netbiz.net.vn/xe">Xe</a></h2>
            <div class="cat-name-sub rt">
               <a class="cat-name-sub-item" href="https://netbiz.net.vn/xe/o-to">Ô tô</a>
               <a class="cat-name-sub-item" href="https://netbiz.net.vn/xe/xe-may">Xe máy</a>
               <a class="cat-name-sub-item" href="https://netbiz.net.vn/xe/review">Review</a>
            </div>
         </div>
         <div class="cat-content">
            <!-- 15 -->  
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'xe',
                        'posts_per_page' => 3,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>" title="<?php the_title()?>"><?php the_title()?>                    
                                    <span class="ico-image"></span>                  
                                 </a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
         </div>
      </div>
   </div>
   <div class="wrapper clearfix mb40">
      <div class="w760 lt">
         <div class="cat-grid-3 no-desc no-meta mb35 clearfix">
            <div class="cat-title mb25">
               <h2 class="cat-name"><a href="https://netbiz.net.vn/cong-nghe">Công nghệ</a></h2>
               <div class="cat-name-sub rt">
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/cong-nghe/san-pham-moi">Sản phẩm mới</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/cong-nghe/xu-huong-cong-nghe">Xu hướng công nghệ</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/cong-nghe/review">Review</a>
               </div>
            </div>
            <div class="cat-content">
               <!-- 16 -->
                   <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'cong-nghe',
                        'posts_per_page' => 3,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?>                                         
                              </a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
            </div>
         </div>
         <div class="cat-grid-3 no-desc no-meta mb35 clearfix">
            <div class="cat-title mb25">
               <h2 class="cat-name"><a href="https://netbiz.net.vn/tai-chinh">Tài chính</a></h2>
               <div class="cat-name-sub rt">
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/tai-chinh/blockchain">Blockchain</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/tai-chinh/kinh-doanh">Kinh doanh</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/tai-chinh/tu-do-tai-chinh">Tự do tài chính</a>
               </div>
            </div>
            <div class="cat-content">
               <!-- 17 -->
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'tai-chinh',
                        'posts_per_page' => 3,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?>                                         
                              </a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
            </div>
         </div>
         <div class="cat-grid-3 no-desc no-meta mb35 clearfix">
            <div class="cat-title mb25">
               <h2 class="cat-name"><a href="https://netbiz.net.vn/the-thao">Thể thao</a></h2>
               <div class="cat-name-sub rt">
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/the-thao/bong-da">Bóng đá</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/the-thao/vo-thuat">Võ thuật</a>
                  <a class="cat-name-sub-item" href="https://netbiz.net.vn/the-thao/ngoi-sao">Ngôi sao</a>
               </div>
            </div>
            <div class="cat-content">
               <!-- 18 -->
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category_name' => 'the-thao',
                        'posts_per_page' => 3,
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                           <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                           </a>
                           <div class="article-info">
                              <h3 class="article-title">
                                 <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?>                                         
                              </a>
                              </h3>
                              <div class="article-desc"><?php the_content()?></div>
                           </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                     <?php else : ?>
                        <article class="article">
                           Chưa có dữ liệu
                        </article>
                     <?php endif; ?>
              
            </div>
         </div>
      </div>
   </div>
</main>
<?php
get_footer();
?>      