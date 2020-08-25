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

<section class="navbar">
  <div class="navbar-1">
    <div class="index-logo"><a href="<?php the_permalink('18') ?>"><span style="color:#1F5F8B;">Archive</span> Nepal</a></div>
    <div>One stop for University Students !</div>
  </div>
  <div class="navbar-2 promote">
    <div>Promotional</div>
  </div>

  

  <div class="index-menu dropdown"><i class="fas fa-th"></i> </div>
  <div class="menu-contents dropbtn">
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

  

  



  <div class="index-search navbar-4" >
  <?php get_search_form(); ?>
  

      <i class="fi-xnluxl-magnifying-glass"></i>      
    </div>

    
  <nav class="navbar-5">
  <a href="<?php echo get_post_type_archive_link( 'tu' ); ?>"> Tribhuvan</a>
    <a href="<?php echo get_post_type_archive_link( 'pokhara' ); ?>"> Pokhara</a>
    <a href="<?php echo get_post_type_archive_link( 'ku' ); ?>"> Kathmandu</a>
    <a href="<?php echo get_post_type_archive_link( 'pu' ); ?>"> Purbanchal</a>
  </nav>
</section>

<body>