<?php
get_header();
$key = "";
if($_GET['s'] && !empty($_GET['s']))
{
    $key = $_GET['s'];
}
?>

<input type="hidden" value="<?php echo $key?>" id="input-search">
<div class="webpage pc-list">
   <div class="wrapper breadcrumb mt40 pb20">
      <div class="cat-title text-center">
         <div class="cat-name mb20">
            <a class="cat-name-lv1" href="#">TÌM KIẾM</a>
         </div>
         <div class="subcat-name active" style="font-weight: bold; color: #f20078;">
            <?php
                echo $key ;
             ?>
         </div>
      </div>
   </div>
   <main class="main">
      <!-- 37 -->
      <div class="wrapper clearfix">
            <div class="w720 lt">
          
                  <!-- 21 -->
                     <?php
                        $count_post = 10;
                        $args = array(
                            'post_type' => 'post',
                            'post_status'  => 'publish',
                            'posts_per_page' => 10,
                            'paged' => 1,
                            's' => $key,
                        );  
                        $the_query = new WP_Query( $args );
                        $total = $the_query->found_posts;

                        if ( $the_query->have_posts() ) : ?>
                            <div class="cat-listing title-2228 no-desc no-publish-time article-bdb-30 thumb-w240">
                                <div class="cat-content __MB_LIST_ITEM" style="padding-bottom: 30px" id="h-loadmore">
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
                                Không tìm thấy dữ liệu liên quan <?php echo $key?>
                            </article>
                    <?php endif; ?>
            
            </div>
         
      </div>
   </main>
</div>

<?php
get_footer();
?>  
<script type="text/javascript" src="<?php echo get_template_directory_uri()."/assets/js/search.js"?>"></script>