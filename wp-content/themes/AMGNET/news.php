<div class="webpage pc-list">
   <div class="wrapper breadcrumb mt40 pb20">
      <div class="cat-title text-center">
         <div class="cat-name mb20">
            <a class="cat-name-lv1" href="<?php echo get_category_link($cateID)?>"><?php echo $cateName ?></a>
         </div>
         <div class="subcat-name active">
            <?php
                if ( $children ) { 
                    foreach( $children as $subcat )
                    {
                        if($subcat ->slug == $category->slug)
                        {
                            echo '<a class="subcat-name-item mb30 d-inline-block active" href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '">' . $subcat->name . '</a>';
                        } else {
                            echo '<a class="subcat-name-item mb30 d-inline-block" href="' . esc_url(get_term_link($subcat, $subcat->taxonomy)) . '">' . $subcat->name . '</a>';
                        }
                    }
                }
            ?>
         </div>
      </div>
   </div>
   <main class="main">
      <div class="wrapper clearfix mb35">
         <div class="w720 lt">
            <div class="cat-cover title-26x12">
               <div class="cat-content">
                  <!-- 19 -->
                
                <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status'  => 'publish',
                    'category__in' => $category->term_id,                                         
                    'posts_per_page' => 1,
                );  
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                            <a href="<?php the_permalink() ?>" title="<?php the_title();?> " class="article-thumb">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="article-image">
                            </a>
                            <div class="article-info">
                                <h2 class="article-title">
                                <a href="<?php the_permalink() ?>" title="<?php the_title();?> ">
                                    <?php the_title();?>
                                </a>
                                </h2>
                                <div class="article-meta">
                                <span class="post-publish-time"><?php echo get_the_date("d/m/Y") ?></span>
                                <a href="<?php echo get_category_link($cateID)?>" class="article-catname">
                                    <?php echo get_cat_name( $cateID )?>    
                                </a>
                                </div>
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
         <div class="w380 rt">
            <div class="cat-listing article-bdb-25 thumb-w175 no-desc no-meta">
               <div class="cat-content">
                  <!-- 20 -->
                <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status'  => 'publish',
                    'category__in' => $category->term_id,                                         
                    'posts_per_page' => 14,
                    'offset'         => 4
                );  
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                            <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                                <img src="<?php  the_post_thumbnail_url() ?>" alt="<?php the_title()?>" class="article-image">
                            </a>
                            <div class="article-info">
                                <h3 class="article-title">
                                <a href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                    <?php the_title()?>                    
                                    <span class="ico-image"></span>                  
                                </a>
                                </h3>
                                <div class="article-meta">
                                <span class="post-publish-time"><?php echo get_the_date("d/m/Y") ?></span>
                                <a href="<?php echo get_category_link($cateID)?>" class="article-catname">
                                    <?php echo get_cat_name( $cateID )?>    
                                </a>
                                </div>
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
      <!-- 37 -->
      <div class="wrapper mb35">
         <div id="home-center1" class="banner banner-random mb35">
            <div class="banner-item item-random" style="display: block;">
               <a href="#" class="__ads_click" target="_blank"><img src="<?php echo get_template_directory_uri()."/assets/imgs/banner1.png"?>" alt="speed-couple-banner-03-21-970x250" style="vertical-align:middle;" width="4043" height="1043"></a>        
            </div>
         </div>
      </div>
      <div class="wrapper clearfix">
            <div class="w720 lt">
          
                  <!-- 21 -->
                    <?php 
                        $args = array(
                            'post_type' => 'post',
                            'post_status'  => 'publish',
                            'category__in' => $category->term_id,                                         
                            'posts_per_page' => 4,
                            'offset'         => 1
                        );  
                        $the_query = new WP_Query( $args );
           

                        if ( $the_query->have_posts() ) : ?>
                            <div class="cat-listing title-2228 no-desc no-publish-time article-bdb-30 thumb-w240">
                                <div class="cat-content __MB_LIST_ITEM">
                                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                            <article class="article">
                                                <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                                                <img src="<?php  the_post_thumbnail_url() ?>" alt="<?php the_title()?>" class="article-image">
                                                </a>
                                                <div class="article-info">
                                                    <h3 class="article-title">
                                                    <a href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                                        <?php the_title()?>                                      
                                                    </a>
                                                    </h3>
                                                    <div class="article-meta">
                                                    <a href="<?php echo get_category_link($cateID)?>" class="article-catname">
                                                        <?php echo get_cat_name( $cateID )?>    
                                                    </a>
                                                    <span class="post-publish-time"><?php echo get_the_date("d/m/Y") ?></span>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <span id="btnViewmore" class="btn-viewmore">XEM THÊM</span>
                        <?php else : ?>
                            <article class="article">
                                Chưa có dữ liệu
                            </article>
                    <?php endif; ?>
                  
             
            
         </div>
         <div class="w380 rt">
            <!-- 22 -->
            <div class="cat-listing cat-most-read-detail article-bdb-25 thumb-w175 no-desc no-meta mb40">
               <div class="cat-title mb30">
                  <h2 class="cat-name fs-25"><span>Đọc nhiều</span></h2>
               </div>
               <div class="cat-content">
                  <article class="article">
                     <a href="https://netbiz.net.vn/chong-bat-ngo-mang-hoa-xin-loi-vo-tren-song-truyen-hinh-vi-tung-len-di-karaoke-om-khi-con-trai-dau-long-moi-3-thang-tuoi-1497.html" title="Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi" class="article-thumb">
                     <img src="./Showbiz - Netbiz_files/chong-bat-ngo-chuan-bi-hoa-va-xin-loi-vo-ve-chuyen-da-tung-len-di-karaoke-om-khi-con-trai-dau-long-moi-3-thang-tuoi_7.jpg" alt="Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi" class="article-image">
                     </a>
                     <div class="article-info">
                        <h3 class="article-title">
                           <a href="https://netbiz.net.vn/chong-bat-ngo-mang-hoa-xin-loi-vo-tren-song-truyen-hinh-vi-tung-len-di-karaoke-om-khi-con-trai-dau-long-moi-3-thang-tuoi-1497.html" title="Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi">Chồng bất ngờ mang hoa xin lỗi vợ trên sóng truyền hình vì từng lén đi “karaoke ôm” khi con trai đầu lòng mới 3 tháng tuổi                      </a>
                        </h3>
                        <div class="article-meta">
                           <span class="post-publish-time">18/04/2022</span>
                           <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                        </div>
                        <div class="article-desc">Cặp đôi vợ chồng Nguyễn Văn Lên và Nguyễn Thị Minh Nguyệt đã mang đến những câu chuyện hết sức thú vị trong chương trình “Vợ chồng son” tập 451.</div>
                     </div>
                  </article>
                  <article class="article">
                     <a href="https://netbiz.net.vn/nguoi-cha-duong-kho-tin-den-cuc-pham-chap-nhan-lam-nhieu-dieu-cho-con-rieng-cua-vo-de-doi-lay-mai-am-gia-dinh-1502.html" title="Người cha dượng khó tin đến " cực="" phẩm",="" chấp="" nhận="" làm="" nhiều="" điều="" cho="" con="" riêng="" của="" vợ="" để="" đổi="" lấy="" mái="" ấm="" gia="" đình"="" class="article-thumb">
                     <img src="./Showbiz - Netbiz_files/b998a0d471e461e977ffa5b941ce7b88.jpg" alt="Người cha dượng khó tin đến &quot;cực phẩm&quot;, chấp nhận làm nhiều điều cho con riêng của vợ để đổi lấy mái ấm gia đình" class="article-image">
                     </a>
                     <div class="article-info">
                        <h3 class="article-title">
                           <a href="https://netbiz.net.vn/nguoi-cha-duong-kho-tin-den-cuc-pham-chap-nhan-lam-nhieu-dieu-cho-con-rieng-cua-vo-de-doi-lay-mai-am-gia-dinh-1502.html" title="Người cha dượng khó tin đến " cực="" phẩm",="" chấp="" nhận="" làm="" nhiều="" điều="" cho="" con="" riêng="" của="" vợ="" để="" đổi="" lấy="" mái="" ấm="" gia="" đình"="">Người cha dượng khó tin đến "cực phẩm", chấp nhận làm nhiều điều cho con riêng của vợ để đổi lấy mái ấm gia đình            <span class="ico-image"></span>          </a>
                        </h3>
                        <div class="article-meta">
                           <span class="post-publish-time">19/04/2022</span>
                           <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
                        </div>
                        <div class="article-desc">Đó là câu chuyện của cặp đôi vợ chồng đến từ Sóc Trăng là anh Trương Hoàng Khương (30 tuổi) và chị Đỗ Thị Mỹ Ngọc (26 tuổi).</div>
                     </div>
                  </article>
                  <article class="article">
                     <a href="https://netbiz.net.vn/mot-ngay-cung-miss-grand-hongkong-sen-yang-tai-sai-gon-di-tim-mon-sinh-to-oai-oam-khong-ai-ban-1493.html" title="Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán" class="article-thumb">
                     <img src="./Showbiz - Netbiz_files/mot-ngay-cung-miss-grand-hongkong-sen-yang-tai-sai-gon-di-tim-mon-sinh-to-oai-oam-khong-ai-ban.jpg" alt="Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán" class="article-image">
                     </a>
                     <div class="article-info">
                        <h3 class="article-title">
                           <a href="https://netbiz.net.vn/mot-ngay-cung-miss-grand-hongkong-sen-yang-tai-sai-gon-di-tim-mon-sinh-to-oai-oam-khong-ai-ban-1493.html" title="Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán">Một ngày cùng Miss Grand Hongkong - Sen Yang tại Sài Gòn, đi tìm món sinh tố oái oăm không ai bán            <span class="ico-image"></span><span class="ico-video"></span>          </a>
                        </h3>
                        <div class="article-meta">
                           <span class="post-publish-time">18/04/2022</span>
                           <a href="https://netbiz.net.vn/showbiz" class="article-catname">Showbiz</a>
                        </div>
                        <div class="article-desc">Sau 2 năm đăng quang và được khán giả yêu mến, Hoa hậu Sen Yang - người được biết là cây hài của cuộc thi Miss Grand 2021 đã có mặt tại tòa nhà MCV.</div>
                     </div>
                  </article>
                  <article class="article">
                     <a href="https://netbiz.net.vn/miss-grand-hong-kong-2021-sen-yang-cap-2-toan-tron-hoc-di-choi-net-am-anh-voi-ve-dep-mat-to-mat-nho-1524.html" title="Miss Grand Hong Kong 2021 - Sen Yang: Cấp 2 toàn trốn học đi chơi net, ám ảnh với vẻ đẹp " mắt="" to,="" mặt="" nhỏ""="" class="article-thumb">
                     <img src="./Showbiz - Netbiz_files/miss-grand-hong-kong-2021-sen-yang-cap-2-toan-tron-hoc-di-net-am-anh-voi-ve-dep-mat-to-mat-nho.png" alt="Miss Grand Hong Kong 2021 - Sen Yang: Cấp 2 toàn trốn học đi chơi net, ám ảnh với vẻ đẹp &quot;mắt to, mặt nhỏ&quot;" class="article-image">
                     <span class="ico-emag"></span>      </a>
                     <div class="article-info">
                        <h3 class="article-title">
                           <a href="https://netbiz.net.vn/miss-grand-hong-kong-2021-sen-yang-cap-2-toan-tron-hoc-di-choi-net-am-anh-voi-ve-dep-mat-to-mat-nho-1524.html" title="Miss Grand Hong Kong 2021 - Sen Yang: Cấp 2 toàn trốn học đi chơi net, ám ảnh với vẻ đẹp " mắt="" to,="" mặt="" nhỏ""="">Miss Grand Hong Kong 2021 - Sen Yang: Cấp 2 toàn trốn học đi chơi net, ám ảnh với vẻ đẹp "mắt to, mặt nhỏ"            <span class="ico-image"></span><span class="ico-video"></span>          </a>
                        </h3>
                        <div class="article-meta">
                           <span class="post-publish-time">19/04/2022</span>
                           <a href="https://netbiz.net.vn/showbiz/sao-quoc-te" class="article-catname">Sao Quốc tế</a>
                        </div>
                        <div class="article-desc">Câu chuyện ít ai biết về Miss Grand Hong Kong 2021 - Sen Yang.</div>
                     </div>
                  </article>
               </div>
            </div>
            <!-- 41 -->
            <div id="home-right1" class="banner banner-random mb35">
               <div class="banner-item item-random" style="display: block;">
                  <a href="#" class="__ads_click" target="_blank"><img  src="<?php echo get_template_directory_uri()."/assets/imgs/banner3.png"?>" alt="speed-couple-banner-03-21-300x600" style="vertical-align:middle;" width="1251" height="2501"></a>  
               </div>
            </div>
         </div>
      </div>
   </main>
</div>