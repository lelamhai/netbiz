<input type="hidden" value="14" id="offset">
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
                    'posts_per_page' => 3,
                    'offset'         => 1
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
                                    <!-- <span class="ico-image"></span>                   -->
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
                        $count_post = 10;
                        $args = array(
                            'post_type' => 'post',
                            'post_status'  => 'publish',
                            'category__in' => $category->term_id,                                         
                            'posts_per_page' => 10,
                            'offset'         => 4
                        );  
                        $the_query = new WP_Query( $args );
                        $total = $the_query->post_count;

                        if ( $the_query->have_posts() ) : ?>
                            <div class="cat-listing title-2228 no-desc no-publish-time article-bdb-30 thumb-w240">
                                <div class="cat-content __MB_LIST_ITEM" id="h-loadmore" style="padding-bottom: 30px;">
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
                                                        <?php 
                                                            $categories = get_the_category(get_the_ID());
                                                            foreach( $categories as $category ) {
                                                                if($category ->category_parent != 0)
                                                                {
                                                                    ?>
                                                                        <a href="<?php echo get_category_link($category->term_id)?>" class="article-catname">
                                                                            <?php echo $category->name?>
                                                                        </a>
                                                                    <?php
                                                                }
                                                            }
                                                        ?>
                                                    <span class="post-publish-time"><?php echo get_the_date("d/m/Y") ?></span>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <?php
                                if($total > $count_post)
                                {
                                    ?>
                                        <span id="btnViewmore" class="btn-viewmore">XEM THÊM</span>
                                    <?php
                                }
                            ?>
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
                     <?php 
                        $args = array(
                              'post_type'       => 'post',
                              'post_status'     => 'publish',
                              'meta_key'		=> 'views',
                              'orderby'			=> 'meta_value_num',
                              'order'		    => 'DESC',                                        
                              'posts_per_page'  => 1,
                              // 'offset'         => 1
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
                                       <a href="<?php the_permalink() ?>" title="<?php the_title()?>"><?php the_title()?></a>
                                    </h3>
                                    <div class="article-meta">
                                       <span class="post-publish-time">23/04/2022</span>
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

                    <?php 
                        $args = array(
                              'post_type' => 'post',
                              'post_status'  => 'publish',
                              'meta_key'			=> 'views',
                              'orderby'			=> 'meta_value_num',
                              'order'				=> 'DESC',                                        
                              'posts_per_page' => 4,
                              'offset'         => 1
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
                                        </a>
                                    </h3>
                                    <div class="article-meta">
                                       <span class="post-publish-time"><?php echo get_the_date("d/m/Y") ?></span>
                                       <a href="https://netbiz.net.vn/gia-dinh" class="article-catname">Gia đình</a>
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