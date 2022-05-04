
 
  
   
  
   
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