<?php
get_header();
// $posts_per_page = 14;
$category = get_queried_object();
// var_dump($category);exit;

$cateID = 0;
$cateSlug = "";
$cateName = "";
if($category -> category_parent == 0)
{
    $cateID = $category -> term_id;
    $cateSlug = $category -> slug;
    $cateName = $category -> name;
} else {
    $cateID = $category->category_parent;
    $cateSlug = get_term( $category->category_parent, 'category' ) -> slug;
    $cateName = get_term( $category->category_parent, 'category' ) -> name;
    
}

$children = get_terms( $category->taxonomy, array(
    'parent'    => $cateID,
    'hide_empty' => false
) );



?>
<input id="category" type="hidden" value="<?php echo $category->slug ?>">
<?php 
switch ($cateSlug) {
    case 'video':
        include("video.php");
        break;  	

    default:
        include("news.php");
     break;

}
?>

<?php
get_footer();
?>  