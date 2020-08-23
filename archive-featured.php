<?php get_header(); ?>


<section class="from-web featured">
  <div class="title">Featured</div>


  <?php
    $args = array(
    'post_type'     => 'featured',
    'post_status'   => 'publish',
    'posts_per_page'=> 4,
    );
    $featured = new WP_Query( $args );
?> 

  <div class="owl-carousel featured-carousel">
    <div class="featured-carousel-individual">

    <?php if( $featured->have_posts() ) :
                while( $featured->have_posts() ) :
                $featured->the_post();
                ?> 
      <a href="#">
        <img src="img/tu.png" alt="">
        Tribhuvan university
      </a>

      <?php endwhile; endif; ?> 
    </div>
    

  </div>
</section>

<?php get_footer(); ?>