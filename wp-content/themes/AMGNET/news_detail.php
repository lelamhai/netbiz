<?php
     $term = "";
     foreach($categories as $category) {
         if($category->category_parent != 0)
         {
             $term = $category;
         }
     }
?>
<input id="input-slug" type="hidden" value="<?php echo $term->slug ?>">
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
        
            <div class="post-share mb15">
                <div class="wrap-share">
                    <div class="fb-like" data-share="true" data-layout="button" data-width="450" data-show-faces="true"></div>
                    <div class="zalo-share-button" data-href="" data-oaid="3982617747360131920" data-layout="1" data-color="blue" data-customize="false"  style="margin-right: 5px"></div>
                    <div class="zalo-follow-only-button" data-oaid="3982617747360131920"></div>
                </div>
                <div class="rt">
                    <a href="https://mail.google.com/mail/u/0/?view=cm&amp;su=<?php the_title()?>&amp;to&amp;body=<?php the_permalink()?>&amp;fs=1&amp;tf=1" target="_blank" rel="nofollow" title="<?php the_title()?>"><i class="fas fa-envelope"></i></a>
                    <a id="printButton" href="<?php echo get_home_url()."/print"."?id=".get_the_ID()?> " target="_blank" rel="nofollow"><span> | </span><i class="fas fa-print"></i></a>
                </div>
                
            </div>

            <div class="post-meta mb20">
               <span class="post-publish-time"><span class="format_time"><?php echo get_the_date("d/m/Y H:i") ?></span></span>
               <a id="postCategory" href="<?php echo get_category_link($cateID)?>" class="article-catname mr10"><?php echo $cateName?></a>
            </div>
            <div class="post-desc"><?php    ?></div>
            <div class="post-content __MASTERCMS_CONTENT ">
               <?php the_content()?>
            </div>
            <div id="lightGallery" class="light-gallery" style="display: none;"><a data-fancybox="images" class="fancybox-images" href="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/c40e09981247a05d56319cd54101e69b.jpg" target="_blank" data-sub-html="N??? ca s?? Hi???n H???"><img src="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/c40e09981247a05d56319cd54101e69b.jpg" class="__img_mastercms" alt="Hi???n H??? vi???t th?? tay xin l???i k??n 2 m???t gi???y nh??ng d??n m???ng v???n ?????ng l??ng m???a mai" style="max-width:100%; padding:0px; margin:0px;" title="Hi???n H??? vi???t th?? tay k??n 2 m???t gi???y xin l???i nh??ng netizen v???n ?????ng l??ng m???a mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/82b488b96f1621e6258f4f675a36e663.jpg" target="_blank" data-sub-html="B???c th?? tay d??i k??n 2 m???t gi???y xin l???i fan c???a Hi???n H???"><img src="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/82b488b96f1621e6258f4f675a36e663.jpg" class="__img_mastercms" alt="Hi???n H??? vi???t th?? tay xin l???i k??n 2 m???t gi???y nh??ng d??n m???ng v???n ?????ng l??ng m???a mai" style="max-width:100%; padding:0px; margin:0px;" title="Hi???n H??? vi???t th?? tay k??n 2 m???t gi???y xin l???i nh??ng netizen v???n ?????ng l??ng m???a mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/8e58bc0e4cd3b256ef95b9a2a7cfc613.jpg" target="_blank" data-sub-html=" "><img src="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/8e58bc0e4cd3b256ef95b9a2a7cfc613.jpg" class="__img_mastercms" alt="Hi???n H??? vi???t th?? tay xin l???i k??n 2 m???t gi???y nh??ng d??n m???ng v???n ?????ng l??ng m???a mai" style="max-width:100%; padding:0px; margin:0px;" title="Hi???n H??? vi???t th?? tay k??n 2 m???t gi???y xin l???i nh??ng netizen v???n ?????ng l??ng m???a mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/f8f0ca924569e3194fb443ffd828b08e.jpg" target="_blank" data-sub-html="Hi???n H??? mong mu???n nh???n ???????c s??? tha th??? t??? ng?????i h??m m???"><img src="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/f8f0ca924569e3194fb443ffd828b08e.jpg" class="__img_mastercms" alt="Hi???n H??? vi???t th?? tay xin l???i k??n 2 m???t gi???y nh??ng d??n m???ng v???n ?????ng l??ng m???a mai" style="max-width:100%; padding:0px; margin:0px;" title="Hi???n H??? vi???t th?? tay k??n 2 m???t gi???y xin l???i nh??ng netizen v???n ?????ng l??ng m???a mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/e5e0e4a2f933d302190fb53bd3d63cb5.png" target="_blank" data-sub-html="Nhi???u netizen v???n ?????ng l??ng m???a mai l???i xin l???i c???a Hi???n H???"><img src="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/e5e0e4a2f933d302190fb53bd3d63cb5.png" class="__img_mastercms" alt="Hi???n H??? vi???t th?? tay xin l???i k??n 2 m???t gi???y nh??ng d??n m???ng v???n ?????ng l??ng m???a mai" style="max-width:100%; padding:0px; margin:0px;" title="Hi???n H??? vi???t th?? tay k??n 2 m???t gi???y xin l???i nh??ng netizen v???n ?????ng l??ng m???a mai"></a><a data-fancybox="images" class="fancybox-images" href="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/7233789da898ed33f9a642fdf4087629.jpg" target="_blank" data-sub-html=" "><img src="./Hie????n Ho???? vie????t thu?? tay xin lo????i ki??n 2 ma????t gia????y nhu??ng da??n ma??ng va????n ??o????ng lo??ng mi??a mai - Netbiz_files/7233789da898ed33f9a642fdf4087629.jpg" class="__img_mastercms" alt="Hi???n H??? vi???t th?? tay xin l???i k??n 2 m???t gi???y nh??ng d??n m???ng v???n ?????ng l??ng m???a mai" style="max-width:100%; padding:0px; margin:0px;" title="Hi???n H??? vi???t th?? tay k??n 2 m???t gi???y xin l???i nh??ng netizen v???n ?????ng l??ng m???a mai"></a></div>
            <!-- tin li??n quan c??i ?????t tay -->
            <div>
               <table class="__mb_article_in_image">
               </table>
            </div>
            
            <div class="post-tag mt15 mb30">
               <div class="tag-title">Tags:</div>
               <div class="clearfix">
                   <?php
                       $tags = get_the_tags(get_the_ID());
                       if($tags)
                       {
                            $listTags = array();
                            foreach ( $tags as $tag ) {
                                array_push($listTags, $tag ->term_id);
                                ?>
                                        <a class="tag-item" href="<?php get_tag_link($tag ->term_id)?>" title="<?php echo $tag ->name?>"><?php echo $tag ->name?></a>
                                <?php
                            }
                       }
                       
                   ?>
               </div>
            </div>
         </div>
         <!-- tin li??n quan theo tag -->
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
                        Ch??a c?? d??? li???u
                    </article>
                <?php endif; ?>
            </div>
         </div>

        <div id="user-comment" class="clearfix mb40">
            <div class="cat-title mb15">
                <h2 class="cat-name fs-20 text-uppercase"><span>B??nh lu???n</span></h2>
            </div>

            <div class="article-comment clearfix">
                <div class="box-comment clearfix">
                    <p class="content">
                        <textarea name="__comment" class="__comment" placeholder="Vi???t ti???ng Vi???t c?? d???u"></textarea>
                    </p>
                </div>
                <div class="wrap-button">
                    <button class="button-comment">G???i b??nh lu???n</button>
                    <div class="errors">N???i dung kh??ng ???????c ????? tr???ng!</div>
                </div>
               
            </div>
        </div>

        <div class="list-comment">
            <?php
                $comments = get_comments(
                    array(
                        'status' => 'approve',
                        'post_id' => $post->ID,
                    )
                );

                foreach($comments as $comment) {
                    ?>
                        <div class="wrap-comment">
                            <div class="comment-author">
                                <?php echo $comment->comment_author ?>
                            </div>
                            <div class="comment-content">
                                <?php echo $comment->comment_content ?>
                            </div>
                        </div>
                        
                    <?php
                }
            ?>
        </div>
        

         <div class="cat-listing title-2228 no-desc no-publish-time article-bdb-30 thumb-w240 mb40">
            <div class="cat-title cat-title-common mb25">
               <h2 class="cat-name fs-25">Tin b??i kh??c</h2>
            </div>
            <div class="cat-content __MB_LIST_ITEM" id="h-loadmore">
               <!-- 21 -->
               
               <?php 
                $count_post = 10;
                $args = array(
                    'post_type' => 'post',
                    'post_status'  => 'publish',
                    'category_name' =>  $term->slug, 
                    'posts_per_page' => 10,

                );  
                $the_query = new WP_Query( $args );
                $total = $the_query->post_count;
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
                    <?php
                        if($total >= $count_post)
                        {
                            ?>
                                <span id="btnViewmore" class="btn-viewmore">XEM TH??M</span>
                            <?php
                        }
                    ?>
                <?php else : ?>
                    <article class="article">
                        Ch??a c?? d??? li???u
                    </article>
                <?php endif; ?>
            </div>
         </div>
      </div>
      <div class="w380 rt">
         <!-- 22 -->
         <div class="cat-listing article-bdb-25 thumb-w175 no-desc no-meta mb40">
            <div class="cat-title cat-title-common mb30">
               <h2 class="cat-name fs-25"><span>?????c nhi???u</span></h2>
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
                        Ch??a c?? d??? li???u
                    </article>
                <?php endif; ?>
               
            </div>
         </div>
         <!-- 50 -->
         <div class="cat-listing article-bdb-25 thumb-w175 no-desc no-meta mb40">
            <div class="cat-title cat-title-common mb30">
               <h2 class="cat-name fs-25"><span>M???i nh???t</span></h2>
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
                        Ch??a c?? d??? li???u
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


<div class="fancybox-overlay fancybox-overlay-fixed" style="">
    <div class="fancybox-wrap fancybox-desktop fancybox-type-ajax fancybox-opened" tabindex="-1" style="">
        <div class="fancybox-skin">
            <div class="fancybox-outer">
                <div class="fancybox-inner" style="overflow: auto; height: auto;">
                    <table cellspacing="0" cellpadding="0" class="ui-widget ui-widget-content ui-corner-all" style="margin: 0px; padding: 0px">
                        <tbody>
                            <tr class="ui-widget-header">
                                <td style="padding: 8px;" id="TITLE_HOLDER">Comment</td>
                                <td><button class="__MB_USER_ACTION_CLOSED_COMMENT cancel-popup" name="__MB_USER_ACTION_CLOSED_COMMENT" type="button" style="margin-right: 5px;">X</button></td>
                            </tr>
                            <tr>
                                <td style="padding: 8px;" valign="top">
                                    <table cellspacing="0" cellpadding="0" class="__MB_DONE_CM" style="display: none;">
                                        <tbody>
                                            <tr>
                                                <td style="padding: 8px;">
                                                    <div style="padding: 5px; font-size: 16px; font-weight: bold; color: #093;" align="center">B??nh lu???n c???a b???n ???? ???????c g???i th??nh c??ng!</div>
                                                    <div style="padding: 5px; font-size: 14px;" align="center">C???m ??n!</div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px;" align="center">
                                                    <button class="__MB_USER_ACTION_CLOSED_COMMENT" name="__MB_USER_ACTION_CLOSED_COMMENT" type="button">????ng</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <?php comments_template(); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>  