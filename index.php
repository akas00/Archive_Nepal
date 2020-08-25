<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Archive Nepal</title>

  <!-- CSS  -->
  <?php wp_head(); ?>

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/64f47c72fc.js" crossorigin="anonymous"></script>

  <!--Friconix  -->
  <script defer src="https://friconix.com/cdn/friconix.js"> </script>

  <!-- JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- OWL Carousel -->
  <link rel="stylesheet" href="style/css/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="style/css/owlcarousel/owl.theme.default.min.css">


</head>

<section class="index-page">
  <div class="index-logo">
  <a href="index.php"><span style="color:#1F5F8B;">Archive</span> Nepal</div></a>


  
  <div class="index-menu"><i class="fas fa-th"></i> </div>
  <div class="menu-contents">
    <div>
      <a href="#"><i class="fi-cnsuxl-user-circle"></i>
        About
      </a>
    </div>
    <div>
      <a href="#"><i class="fi-cnsuxl-user-circle"></i>
        About
      </a>
    </div>
    <div>
      <a href="#"><i class="fi-cnsuxl-user-circle"></i>
        About
      </a>
    </div>
  </div>

  <div class="index-content">
    <h2> <?php echo get_theme_mod('heading'); ?></h2>
    <h4><?php echo get_theme_mod('paragraph'); ?></h4>

    <!-- Search box -->
    <div class="index-search" >
    <?php get_search_form(); ?>
    <i class="fi-xnluxl-magnifying-glass"></i>   
   
      
    </div>
   

    <!-- Bookmarks -->
    <div class="index-bookmarks">
      <div>
      <a href="<?php echo get_post_type_archive_link( 'tu' ); ?>">
          <img src="<?php echo get_theme_mod('University1_Logo'); ?>" alt="">
          <?php echo get_theme_mod('UniversityName1'); ?>
        </a>
      </div>

      <div>
        <a href="<?php echo get_post_type_archive_link( 'pokhara' ); ?>">
          <img src="<?php echo get_theme_mod('University2_Logo'); ?>" alt="">
          <?php echo get_theme_mod('UniversityName2'); ?>
        
        </a>
      </div>
      <div>
      <a href="<?php echo get_post_type_archive_link( 'ku' ); ?>">
          <img src="<?php echo get_theme_mod('University3_Logo'); ?>" alt="">
          <?php echo get_theme_mod('UniversityName3'); ?>
        </a>
      </div>
      <div>
      <a href="<?php echo get_post_type_archive_link( 'pu' ); ?>">
          <img src="<?php echo get_theme_mod('University4_Logo'); ?>" alt="">
          <?php echo get_theme_mod('UniversityName4'); ?>
        </a>
      </div>

    </div>

    <!-- END OF BOOKMARKS  -->
  </div>
</section>




<section class="banner">
  <div class="banner-txt">
    <h1><?php echo get_theme_mod('banner1_title'); ?></h1>
    <h3><?php echo get_theme_mod('banner1_text'); ?></h3>
  </div>
  <div class="banner-img">
    <img src="<?php echo get_theme_mod('Banner1_image'); ?>" alt="">
  </div>
</section>

<section class="banner banner-2">
  <div class="banner-txt banner-txt-2">
  <h1><?php echo get_theme_mod('banner2_title'); ?></h1>
    <h3><?php echo get_theme_mod('banner2_text'); ?></h3>
  </div>
  <div class="banner-img">
    <img src="<?php echo get_theme_mod('Banner2_image'); ?>" alt="">
  </div>
</section>



<?php
include_once(get_template_directory() .'/section/featured.php');

?> 

<?php
include_once(get_template_directory() .'/section/fromweb.php');

?> 







<!-- Footer -->
<?php get_footer(); ?>
<!-- 
<?php
include_once(get_template_directory() .'/assets/site_parts/common_blocks/site-footer.php');
get_footer();
?> -->