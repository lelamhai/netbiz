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
   <div class="wrapper clearfix">
      <div class="w720 lt">
         <div class="post">
            <div class="post-subtitle hide-empty"></div>
            <h1 class="post-title"><?php the_title()?></h1>
        
            <div class="post-meta mb20">
               <span class="post-publish-time"><span class="format_time"><?php echo get_the_date("d/m/Y H:i") ?></span></span>
               <a id="postCategory" href="<?php echo get_category_link($cateID)?>" class="article-catname mr10"><?php echo $cateName?></a>
            </div>
            <div class="post-desc"><?php the_excerpt()?></div>
            <div class="post-content __MASTERCMS_CONTENT ">
               <?php the_content()?>
            </div>
            <div id="lightGallery" class="light-gallery" style="display: none;"><a data-fancybox="images" class="fancybox-images" href="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/c40e09981247a05d56319cd54101e69b.jpg" target="_blank" data-sub-html="Nữ ca sĩ Hiền Hồ"><img src="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/c40e09981247a05d56319cd54101e69b.jpg" class="__img_mastercms" alt="Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai" style="max-width:100%; padding:0px; margin:0px;" title="Hiền Hồ viết thư tay kín 2 mặt giấy xin lỗi nhưng netizen vẫn đồng lòng mỉa mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/82b488b96f1621e6258f4f675a36e663.jpg" target="_blank" data-sub-html="Bức thư tay dài kín 2 mặt giấy xin lỗi fan của Hiền Hồ"><img src="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/82b488b96f1621e6258f4f675a36e663.jpg" class="__img_mastercms" alt="Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai" style="max-width:100%; padding:0px; margin:0px;" title="Hiền Hồ viết thư tay kín 2 mặt giấy xin lỗi nhưng netizen vẫn đồng lòng mỉa mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/8e58bc0e4cd3b256ef95b9a2a7cfc613.jpg" target="_blank" data-sub-html=" "><img src="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/8e58bc0e4cd3b256ef95b9a2a7cfc613.jpg" class="__img_mastercms" alt="Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai" style="max-width:100%; padding:0px; margin:0px;" title="Hiền Hồ viết thư tay kín 2 mặt giấy xin lỗi nhưng netizen vẫn đồng lòng mỉa mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/f8f0ca924569e3194fb443ffd828b08e.jpg" target="_blank" data-sub-html="Hiền Hồ mong muốn nhận được sự tha thứ từ người hâm mộ"><img src="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/f8f0ca924569e3194fb443ffd828b08e.jpg" class="__img_mastercms" alt="Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai" style="max-width:100%; padding:0px; margin:0px;" title="Hiền Hồ viết thư tay kín 2 mặt giấy xin lỗi nhưng netizen vẫn đồng lòng mỉa mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/e5e0e4a2f933d302190fb53bd3d63cb5.png" target="_blank" data-sub-html="Nhiều netizen vẫn đồng lòng mỉa mai lời xin lỗi của Hiền Hồ"><img src="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/e5e0e4a2f933d302190fb53bd3d63cb5.png" class="__img_mastercms" alt="Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai" style="max-width:100%; padding:0px; margin:0px;" title="Hiền Hồ viết thư tay kín 2 mặt giấy xin lỗi nhưng netizen vẫn đồng lòng mỉa mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/7233789da898ed33f9a642fdf4087629.jpg" target="_blank" data-sub-html=" "><img src="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/7233789da898ed33f9a642fdf4087629.jpg" class="__img_mastercms" alt="Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai" style="max-width:100%; padding:0px; margin:0px;" title="Hiền Hồ viết thư tay kín 2 mặt giấy xin lỗi nhưng netizen vẫn đồng lòng mỉa mai"></a></div>
            <!-- tin liên quan cài đặt tay -->
            <div>
               <table class="__mb_article_in_image">
               </table>
            </div>
            <div class="hidden">
               <iframe rel="nofollow" src="./Hiền Hồ viết thư tay xin lỗi kín 2 mặt giấy nhưng dân mạng vẫn đồng lòng mỉa mai - Netbiz_files/article_statistic&amp;aid=MTUyNw==&amp;sid=n1f65qav31hkbjr6o1f10t2gh7.html" width="0" height="0"></iframe>            <input type="hidden" name="__printURL" value="https://netbiz.net.vn/hien-ho-viet-thu-tay-xin-loi-kin-2-mat-giay-nhung-dan-mang-van-dong-long-mia-mai-1527.html">
               <input type="hidden" name="__PARAMS_ID_WIDGET" class="__PARAMS_ID_WIDGET" data-type="user_comments" value="MTUyNw==">
            </div>
            <div class="post-tag mt15 mb30">
               <div class="tag-title">Tags:</div>
               <div class="clearfix">
                   <?php
                       $tags = get_the_tags(get_the_ID());
                       $listTags = array();
                       foreach ( $tags as $tag ) {
                        array_push($listTags, $tag ->term_id);
                           ?>
                                <a class="tag-item" href="<?php get_tag_link($tag ->term_id)?>" title="<?php echo $tag ->name?>"><?php echo $tag ->name?></a>
                           <?php
                       }
                   ?>
               </div>
            </div>
         </div>
         <!-- tin liên quan theo tag -->
         <div class="cat-grid-3  no-desc no-meta clearfix mb40">
            <div class="cat-content">
            <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status'  => 'publish',
                    'posts_per_page' => 3,
                    'tag__in' => $listTags,

                );  
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                            <a href="<?php the_permalink() ?>" title="<?php the_title();?>" class="article-thumb">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="article-image">
                            </a>
                            <div class="article-info">
                                <h3 class="article-title">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                                        <?php the_title();?>                                  
                                    </a>
                                </h3>
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
         
         <div class="cat-listing title-2228 no-desc no-publish-time article-bdb-30 thumb-w240 mb40">
            <div class="cat-title mb25">
               <h2 class="cat-name fs-25">Tin bài khác</h2>
            </div>
            <div class="cat-content __MB_LIST_ITEM">
               <!-- 21 -->
               
               <?php 
                $args = array(
                    'post_type' => 'post',
                    'post_status'  => 'publish',
                    'category__in' => $cateID,  
                    'posts_per_page' => 10,

                );  
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                            <a href="<?php the_permalink() ?>" title="<?php the_title();?>" class="article-thumb">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="article-image">
                            </a>
                            <div class="article-info">
                                <h3 class="article-title">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                                        <?php the_title();?>
                                    </a>
                                </h3>
                                <div class="article-meta">
                                    <?php
                                        $categories=get_the_category(get_the_ID());
                                        foreach($categories as $category) {
                                            if($category->category_parent != 0)
                                            {
                                                ?>
                                                    <a href="<?php echo get_category_link($category->term_id)?>" class="article-catname">
                                                        <?php echo $category->name?>
                                                    </a>

                                                <?php
                                            }
                                        }
                                    ?>
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
         <span id="btnViewmore" class="btn-viewmore">XEM THÊM</span>
      </div>
      <div class="w380 rt">
         <!-- 22 -->
         <div class="cat-listing article-bdb-25 thumb-w175 no-desc no-meta mb40">
            <div class="cat-title mb30">
               <h2 class="cat-name fs-25"><span>Đọc nhiều</span></h2>
            </div>
            <div class="cat-content">
                
            <?php 
                $args = array(
                    'post_type'         => 'post',
                    'post_status'       => 'publish',
                    'meta_key'			=> 'views',
                    'orderby'			=> 'meta_value_num',
                    'order'				=> 'DESC',
                    'posts_per_page'    => 4,

                );  
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <article class="article">
                            <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title()?>" class="article-image">
                            </a>
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
         <!-- 50 -->
         <div class="cat-listing article-bdb-25 thumb-w175 no-desc no-meta mb40">
            <div class="cat-title mb30">
               <h2 class="cat-name fs-25"><span>Mới nhất</span></h2>
            </div>
            <div class="cat-content">
                <?php $args = array(
                    'post_type' => 'post',
                    'post_status'  => 'publish',
                    'posts_per_page' => 5,

                );  
                $the_query = new WP_Query( $args );
                if ( $the_query->have_posts() ) : ?>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <article class="article">
                            <a href="<?php the_permalink() ?>" title="<?php the_title();?>" class="article-thumb">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="article-image">
                            </a>
                            <div class="article-info">
                                <h3 class="article-title">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                                        <?php the_title();?>                                      
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
         <!-- 53 -->
         <div id="detail-right2" class="banner banner-random mb40">
         </div>
      </div>
   </div>
</main>