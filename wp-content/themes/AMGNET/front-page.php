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
                  'posts_per_page' => 1,
                  'meta_key'			=> 'priority',
                  'orderby'			=> 'meta_value_num',
                  'order'				=> 'ASC',
                  'meta_query' => array(
                     array(
                         'key'   => 'top_stories',
                         'value' => '1',
                     )
                 )
              );
               $the_query = new WP_Query( $args ); ?>
               
               <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                     <article class="article">
                        <a href="<?php the_permalink() ?>" title="<?php the_title();?>" class="article-thumb">
                           <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title();?>" class="article-image">
                        </a>
                        <div class="article-info">
                           <h2 class="article-title">
                              <a href="<?php the_permalink() ?>" title="<?php the_title();?>">
                                 <?php the_title();?>                    
                                 <!-- <span class="ico-image"></span><span class="ico-video"></span>                   -->
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
                    $args = array(
                     'post_type'       => 'post',
                     'post_status'     => 'publish',
                     'posts_per_page'  => 10,
                     'offset'          => 1,
                     'meta_key'			=> 'priority',
                     'orderby'			=> 'meta_value_num',
                     'order'				=> 'ASC',
                     'meta_query'      => array(
                        array(
                            'key'   => 'top_stories',
                            'value' => '1',
                        )
                    )
                 );
                  $the_query = new WP_Query( $args ); ?>
                  
                  <?php if ( $the_query->have_posts() ) : ?>
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
            <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/video">Videos</a></h2>
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
                                    <span class="icon-view hide-empty">
                                       <?php
                                          echo get_field('views');
                                       ?>
                                       lượt xem
                                    </span>
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
                  <h2 class="cat-name-white"><a href="<?php echo get_home_url()?>">NetBiz’s TV</a></h2>
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
                              <span class="icon-view hide-empty"><?php echo get_field("views")?> lượt xem</span>
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
               
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'meta_query' => array(
                           array(
                               'key'   => 'show_home',
                               'value' => '1',
                           )
                       )
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
                                 </a>
                              </h3>
                              <div class="article-meta">
                                 <?php
                                       $categories=get_the_category(get_the_ID());
                                       foreach($categories as $category) {
                                          if($category->category_parent == 0)
                                          {
                                             ?>
                                                <a href="<?php echo get_category_link($category->term_id)?>" class="article-catname"><?php echo $category->name ?></a>
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
      </div>
      <div class="w340 rt">
         <div class="cat-trending no-publish-time title-1825 article-bdb-15 mb30">
            <div class="cat-title mb20">
               <h2 class="cat-name"><span>Top Trending</span></h2>
            </div>
            <div class="cat-content">
               <!-- 9 -->
                  <?php 
                     $args = array(
                        'post_type'       => 'post',
                        'post_status'     => 'publish',
                        'posts_per_page'  => 1,
                        'meta_key'			=> 'views',
                        'orderby'			=> 'meta_value_num',
                        'order'				=> 'DESC',
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                           <article class="article">
                              <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                              <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                              </a>
                              <div class="article-info">
                                 <div class="article-meta">
                                    <a href="<?php echo get_home_url()?>/topics/showbiz" class="article-catname">Showbiz</a>
                                 </div>
                                 <h3 class="article-title">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?>                      
                                       <!-- <span class="ico-image"></span><span class="ico-video"></span>                     -->
                                    </a>
                                 </h3>
                                 <div class="article-desc"><?php the_excerpt()?></div>
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
                        'post_type'       => 'post',
                        'post_status'     => 'publish',
                        'posts_per_page'  => 2,
                        'offset'         => 1,
                        'meta_key'			=> 'views',
                        'orderby'			=> 'meta_value_num',
                        'order'				=> 'DESC',
                     );
                     $the_query = new WP_Query( $args ); ?>
                     
                     <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                           <article class="article">
                              <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class="article-thumb">
                              <img src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>" class="article-image">
                              </a>
                              <div class="article-info">
                                 <div class="article-meta">
                                    <a href="<?php echo get_home_url()?>/topics/showbiz" class="article-catname">Showbiz</a>
                                 </div>
                                 <h3 class="article-title">
                                    <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?>                      
                                       <!-- <span class="ico-image"></span><span class="ico-video"></span>                     -->
                                    </a>
                                 </h3>
                                 <div class="article-desc"><?php the_excerpt()?></div>
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
            <a href="<?php echo get_home_url()?>/topics/e-magazine"><span class="c-pink">E-mag</span><span class="c-white">azine</span></a>
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
                                    <!-- <span class="ico-image"></span>                   -->
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
               
                  <?php 
                     $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'offset'         => 2,
                        'meta_query' => array(
                           array(
                               'key'   => 'show_home',
                               'value' => '1',
                           )
                       )
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
                                    <!-- <span class="ico-image"></span><span class="ico-video"></span>                     -->
                                 </a>
                              </h3>
                              <div class="article-meta">
                                 <?php
                                       $categories=get_the_category(get_the_ID());
                                       foreach($categories as $category) {
                                          if($category->category_parent == 0)
                                          {
                                             ?>
                                                <a href="<?php echo get_category_link($category->term_id)?>" class="article-catname"><?php echo $category->name ?></a>
                                             <?php
                                          }
                                       }
                                 ?>
                                 <div class="article-desc"><?php the_excerpt()?></div>
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
         <div class="cat-title mb25">
            <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/showbiz">Showbiz</a></h2>
         </div>
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
                                    <!-- <span class="ico-image"></span>                   -->
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
               <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/gia-dinh">Gia đình</a></h2>
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
               <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/come-out">Come Out</a></h2>
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
               <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/giai-tri">Giải trí</a></h2>
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
                                    <!-- <span class="ico-image"></span>                     -->
                                 </a>
                              </h3>
                              <div class="article-meta">
                                 <a href="<?php echo get_home_url()?>/topics/giai-tri" class="article-catname">Giải trí</a>
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
                                    <!-- <span class="ico-image"></span><span class="ico-video"></span>                     -->
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
            <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/xe">Xe</a></h2>
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
                                    <!-- <span class="ico-image"></span>                   -->
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
               <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/cong-nghe">Công nghệ</a></h2>
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
               <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/tai-chinh">Tài chính</a></h2>
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
               <h2 class="cat-name"><a href="<?php echo get_home_url()?>/topics/the-thao">Thể thao</a></h2>
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