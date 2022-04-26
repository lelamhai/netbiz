<input type="hidden" value="11" id="offset">
<div class="webpage pc-video">
    <div class="wrapper breadcrumb mt40 pb20">
        <div class="cat-title text-center">
            <div class="cat-name mb20">
                <a class="cat-name-lv1" href="<?php echo get_category_link($cateID)?>"><?php echo $cateName?></a>
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
        <div class="video-detail mb30 clearfix">
            <!-- 24 -->
            <div class="wrapper clearfix">
                <?php 
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'category__in' => $category->term_id,  
                        'posts_per_page' => 1,
                    );
                    $the_query = new WP_Query( $args ); ?>
                        
                    <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="video-thumb">
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
                            </div>
                            <h1 class="video-title"><?php the_title()?></h1>
                            <div class="video-meta mb20">
                                <span class="view-count"><span class="c-pink"><?php echo get_field("views")?></span> lượt xem</span>
                                <span class="video-publish-time">| <?php echo get_the_date("d/m/Y H:i") ?></span>
                            </div>
                            <div class="video-desc"><?php the_content()?></div>
                            <?php
                                $author = get_field("author");
                                if($author)
                                {
                                    ?>
                                        <div class="video-author mt10">Thực hiện <?php echo get_field("author")?></div>
                                    <?php
                                }
                            ?>

                            <?php
                                $source = get_field("source");
                                if($source)
                                {
                                    ?>
                                        <div class="video-source mt10">Nguồn <?php echo get_field("source")?></div>

                                    <?php
                                }
                            ?>
                        <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <div class="video-thumb">
                            Chưa có dữ liệu
                        </div>
                    <?php endif; ?>
            </div>
        </div>
        <div class="wrapper clearfix">
            <div class="w310 lt">
                <div class="play-list mb20">
                    <h2 class="play-list-title">Danh sách phát</h2>
                    <ul class="cat-list scroll-grey">
                        <?php
                            do_shortcode('[show_video_menu]');
                        ?>
                    </ul>
                </div>
            </div>
            <div class="w795 rt">
                <!-- 23 -->

                        <?php 
                        $count_post = 10;
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'category__in' => $category->term_id,  
                            'posts_per_page' => 10,
                            'offset'         => 1
                        );
                        $the_query = new WP_Query( $args ); 
                        $total = $the_query->post_count;
                        ?>

                        <?php if ( $the_query->have_posts() ) : ?>
                            <div class="cat-listing video-listing title-2228 no-desc thumb-w240 mb40">
                                <div class="cat-content __MB_LIST_ITEM clearfix" id="h-loadmore">
                                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <article class="article">
                                        <a class="article-thumb" href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                            <img class="article-image" src="<?php  the_post_thumbnail_url() ?>" alt="<?php the_title()?>" />
                                            <!-- <span class="icon-duration">6:30</span> -->
                                        </a>
                                        <div class="article-info">
                                            <h3 class="article-title">
                                                <a href="<?php the_permalink() ?>" title="<?php the_title()?>">
                                                    <?php the_title()?>
                                                </a>
                                            </h3>
                                            <div class="article-meta">
                                                <span class="article-author">
                                                <?php
                                                    $author = get_field("author");
                                                    if($author)
                                                    {
                                                        ?>
                                                            <span class="js-video-author-name"><?php echo get_field("author")?></span>
                                                        <?php
                                                    }
                                                ?>
                                                </span>
                                                <span class="article-publish-time no-before"><?php echo get_the_date("d/m/Y H:i") ?></span>
                                                    <?php 
                                                        $categories = get_the_category(get_the_ID());
                                                        foreach( $categories as $category ) {
                                                            if($category ->category_parent != 0)
                                                            {
                                                                ?>
                                                                    <a href="<?php echo get_category_link($category->term_id)?>" class="article-catname mr5">
                                                                        <?php echo $category->name?>
                                                                    </a>
                                                                <?php
                                                            }
                                                        }
                                                    ?>
                                                <span class="icon-view hide-empty"><?php echo get_field("views")?> lượt xem</span>
                                            </div>
                                        </div>
                                    </article>
                                    <?php endwhile; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <?php
                                if($total >= $count_post)
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
        </div>
    </main>
</div>
