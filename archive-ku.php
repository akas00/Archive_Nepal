<!-- HEADER -->
<?php 


get_header(); ?>




<!-- CONTENTS -->

<section class="content">

  <div class="left-promote">
  
  <?php echo get_theme_mod('promotional_detail'); ?>
</div>

  <!-- UNIVERSITIES FACULTIES -->
  <div class="university-faculty">
    <div class="university-name">
      <div>
        <h1>Kathmandu University</h1>
      </div>
      <div class="advertise-1">
        <img src="<?php echo get_theme_mod('promotional_image'); ?>" ></div>
    </div>


    <?php
    $args = array(
    'post_type'     => 'ku',
    'post_status'   => 'publish',
     'category_name' => 'level_1',
     
    'posts_per_page'=> 8,
    );
    $ku = new WP_Query( $args );
?> 
    <div class="faculty">
    <?php if( $ku->have_posts() ) :
                while( $ku->have_posts() ) :
                $ku->the_post();
                ?> 



      <div class="faculty-individual">
      
     
        <div class="faculty-title">
          <h3><?php the_title();?></h3>
        </div>


        
        <div class="faculty-list">

<?php
$ku_faculty = get_field('ku_faculty');
if( $ku_faculty ): ?>

    <ul>
    <?php foreach( $ku_faculty as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
    
<?php endif; ?>

</div> 
       
      </div>
      <?php endwhile; endif; ?> 
     
    

      
    </div>
    


  </div>
</section>  






<?php
include_once(get_template_directory() .'/section/featured.php');

?> 



     

<?php
include_once(get_template_directory() .'/section/fromweb.php');

?> 


    
<!-- FOOTER-->
<?php get_footer(); ?>

