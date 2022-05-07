<?php
/**
* Template Name: Print
*/
?>
<?php
$id = 0;
if($_GET['id'] && !empty($_GET['id']))
{
    $id = $_GET['id'];
}
?>
<style>
    
    .__MASTERCMS_CONTENT {
        line-height: 1.55;
        font-size: 18px
    }
    
    .aligncenter {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .wp-block-image {
        page-break-before: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
        page-break-after: auto; /* 'always,' 'avoid,' 'left,' 'inherit,' or 'right' */
        page-break-inside: avoid; /* or 'auto' */
    }

    .wp-block-image img {
        max-width: 100%;
        height: auto;
    }

    figcaption {
        color: #999;
        padding: 5px;
    }

    .btn-print {
        z-index: 999;
    }
</style>


<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'p' => $id,
    );
    $my_posts = new WP_Query($args);  

   if($my_posts->have_posts()) : 

        while ( $my_posts->have_posts() ) : $my_posts->the_post(); 
        ?>
        <div id="webpage">
            <div id="site-page" class="site-detail">
                <div id="site-body" class="clearfix">
                    <div class="site-container clearfix" style="margin:10px auto;width: 860px">
                        <div style="text-align:center; margin: 20px auto 25px;">
                            <a href="<?php echo get_home_url()?>">
                            <img src="<?php echo get_template_directory_uri()."/assets/imgs/logo.png"?>" width="230">
                            </a>
                        </div>
                        <div class="center_page clearfix">
                            <div class="box_list bx-detail infinite-container">
                                <div class="content_print content_detail clearfix">
                                    <div class="clearfix" style="float:left; width:100%;">
                                        <div class="article-detail clearfix" style="padding:10px;">
                                        <h1 style="margin-bottom: 10px;color: #000;" class="bx-title"><?php the_title() ?></h1>
                                        <div class="bx-share-detail fw lt clearfix" style="margin-bottom: 10px;">
                                            <span> <span class="format_time"><?php echo get_the_date("d/m/Y H:i") ?></span></span>
                                            <a class="btn-print" href="javascript:void(0);" title="In bài viết." style=" color:#33F; float: right;margin-right: 10px;">Print</a>
                                        </div>
                                        <div class="article-desc fw lt f1 clearfix" style="font-weight: 700;color: #000;font-size: 16px;margin-bottom: 10px;"><?php the_excerpt()?></div>
                                        <div class="__MASTERCMS_CONTENT __MB_CONTENT_FOR_PRINTER fw lt clearfix">
                                            <?php the_content()?>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="link_print">
                            <p style="padding:10px;">URL: <?php the_permalink()?></p>
                            <a class="btn-print" href="javascript:void(0);" title="In bài viết." style=" color:#33F; float: right;margin-right: 10px;">Print</a>
                        </div>
                        <p style="width:100%; text-align:center; padding:10px 0px; font-weight:bold; font-size:14px;">© Báo Tin tức - NetBiz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        endwhile; //end the while loop

    endif; // end of the loop.  

?>
<script src="<?php echo get_bloginfo("template_directory"); ?>/assets/js/jquery1.12.4.min.js"></script>
<script>
     $(".btn-print").click(function () {
        $(".btn-print").css("display", "none");
        window.print();
     });
</script>