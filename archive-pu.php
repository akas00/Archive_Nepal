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
        <h1>Purbanchal University</h1>
      </div>
      <div class="advertise-1">add here</div>
    </div>


    <?php
    $args = array(
    'post_type'     => 'pu',
    'post_status'   => 'publish',
     'category_name' => 'level_1',
     
    'posts_per_page'=> 8,
    );
    $pu = new WP_Query( $args );
?> 
    <div class="faculty">
    <?php if( $pu->have_posts() ) :
                while( $pu->have_posts() ) :
                $pu->the_post();
                ?> 



      <div class="faculty-individual">
      
     
        <div class="faculty-title">
          <h3><?php the_title();?></h3>
        </div>


        
        <div class="faculty-list">
            <?php
            $pu_faculty = get_field('pu_faculty');
            if( $pu_faculty ): ?>
          <ul>
          <?php foreach( $pu_faculty as $post ): 

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
        <img src="img/tu.png" alt="">
        <?php the_title();?>
      </a>

     
    </div>
    <?php endwhile; endif; ?> 
    

  </div>
</section>

     

<!-- FROM WEB -->
<section class="from-web">
  <div class="title">
    From Web
  </div>

  <div class="from-web-content">
    <div class="content-links-container">

      <div class="content-links">
        <div class="content-links-img">
          <img src="./img/sample.png" alt="">
        </div>
        <div class="content-links-title">
          <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit</a>
        </div>
        <div class="content-links-description">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet magni iusto dolorem, nam sapiente mollitia
          deserunt, eum inventore reiciendis nulla voluptatum facilis dicta similique suscipit facere fugiat. Animi,
          iure aliquid?
        </div>
        <div class="content-links-src">
          <a href="#">contentsource.com</a>
        </div>
        <div class="content-links-more"> <a href="#">Read more..</a></div>
      </div>

      <div class="content-links">
        <div class="content-links-img">
          <img src="./img/sample.png" alt="">
        </div>
        <div class="content-links-title">
          <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit</a>
        </div>
        <div class="content-links-description">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet magni iusto dolorem, nam sapiente mollitia
          deserunt, eum inventore reiciendis nulla voluptatum facilis dicta similique suscipit facere fugiat. Animi,
          iure aliquid?
        </div>
        <div class="content-links-src">
          <a href="#">contentsource.com</a>
        </div>
        <div class="content-links-more"> <a href="#">Read more..</a></div>
      </div>

      <div class="content-links">
        <div class="content-links-img">
          <img src="./img/sample.png" alt="">
        </div>
        <div class="content-links-title">
          <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit</a>
        </div>
        <div class="content-links-description">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet magni iusto dolorem, nam sapiente mollitia
          deserunt, eum inventore reiciendis nulla voluptatum facilis dicta similique suscipit facere fugiat. Animi,
          iure aliquid?
        </div>
        <div class="content-links-src">
          <a href="#">contentsource.com</a>
        </div>
        <div class="content-links-more"> <a href="#">Read more..</a></div>
      </div>


    </div>


    <div class="content-sources">
      Sources
      <div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>

        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
        <div>
          <div><img src="./img/tu.png" alt=""></div>
          <div><a href="#">Tribhuvan University</a></div>
        </div>
      </div>

    </div>

</section>

<!-- FOOTER-->
<?php get_footer(); ?>