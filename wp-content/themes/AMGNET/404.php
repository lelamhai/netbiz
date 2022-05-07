<?php
get_header();
?>
<main class="main mt15">
    <div class="wrapper">
      <div style="margin: 30px auto; text-align: center; color: #8892a0;">
        <img src="<?php echo get_template_directory_uri()."/assets/imgs/404.png"?>">
        <h2 style="margin: 15px auto; color: #f00;">Xảy ra lỗi, không tìm thấy trang này</h2>
        <a href="<?php echo get_home_url()?>" style="display: inline-block; border: 2px solid; padding: 0.5rem 1rem; border-radius: 30px; text-transform: uppercase;">Quay về trang chủ</a>
      </div> 	
    </div>
</main>
<?php
get_footer();
?>      