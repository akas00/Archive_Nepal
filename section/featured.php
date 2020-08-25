<?php
    $args = array(
    'post_type'     => 'featured',
    'post_status'   => 'publish',
    'posts_per_page'=> 4,
    );
    $featured = new WP_Query( $args );
?> 

<section class="from-web featured">
  <div class="title">Featured</div>



  <div class="owl-carousel featured-carousel">
   
<?php if( $featured->have_posts() ) :
                while( $featured->have_posts() ) :
                $featured->the_post();
                ?> 

    <div class="featured-carousel-individual">

    
      <a href="<?php the_permalink(); ?>">
        <img src="<?php echo get_the_post_thumbnail_url();?>" alt="image">
        <?php the_title();?>
      </a>

     
    </div>
    <?php endwhile; endif; ?> 
    

  </div>
</section>