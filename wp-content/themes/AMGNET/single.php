<?php
get_header();
$categories=get_the_category();
$cateID = 0;
$cateSlug = "";
$cateName = "";

$children = "";
foreach($categories as $category) {
    if($category->category_parent == 0)
    {
        $cateID = $category->term_id;
        $cateSlug = $category->slug;
        $cateName = $category->name;
        $children = get_terms( $category->taxonomy, array(
            'parent'    => $cateID,
            'hide_empty' => false
        ) );
        switch ($category->slug) {
            case 'video':
                include("video_detail.php");
                break;  	
        
            default:
                include("news_detail.php");
             break;
        }
    } 
}

?>
    <input type="hidden" value="<?php echo $category->slug?>" id="parent">
<?php

get_footer();
$count = (int) get_field('views');
$count++;
update_field('views', $count);
?>
<script type="text/javascript" src="<?php echo get_template_directory_uri()."/assets/js/detail.js?v=3"?>"></script>