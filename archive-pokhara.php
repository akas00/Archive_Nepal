<!-- HEADER -->
<?php 


get_header(); ?>




<!-- CONTENTS -->

<section class="content">

  <div class="left-promote">
    PROMOTIONAL</div>

  <!-- UNIVERSITIES FACULTIES -->
  <div class="university-faculty">
    <div class="university-name">
      <div>
        <h1>Pokhara University</h1>
      </div>
      <div class="advertise-1">add here</div>
    </div>


    <?php
    $args = array(
    'post_type'     => 'pokhara',
    'post_status'   => 'publish',
     'category_name' => 'level_1',
    'posts_per_page'=> 8,
    );
    $pokhara = new WP_Query( $args );
?> 
    <div class="faculty">
    <?php if( $pokhara->have_posts() ) :
                while( $pokhara->have_posts() ) :
                $pokhara->the_post();
                ?> 



      <div class="faculty-individual">
      
     
        <div class="faculty-title">
          <h3><?php the_title();?></h3>
        </div>
        
        <div class="faculty-list">



<?php
$faculty = get_field('faculty');
if( $faculty ): ?>
    <ul>
    <?php foreach( $faculty as $post ): 

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