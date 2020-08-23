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
    //  'category_name' => 'pokhara',
    'posts_per_page'=> 8,
    );
    $pokhara = new WP_Query( $args );
?> 
    <div class="faculty">
    <?php if( $pokhara->have_posts() ) :
                while( $pokhara->have_posts() ) :
                $pokhara->the_post();
                ?> 

<?php if( $faculty ) : ?> 

                <?php endif; ?>

      <div class="faculty-individual">
      
     
        <div class="faculty-title">
          <h3><?php the_title();?></h3>
        </div>
        
        <div class="faculty-list">

        </div> 
       
      </div>
      <?php endwhile; endif; ?> 
     
    

      
    </div>
    


  </div>
</section>  







<section class="from-web featured">
  <div class="title">Featured</div>

  <div class="owl-carousel featured-carousel">
    <div class="featured-carousel-individual">
      <a href="#">
        <img src="img/tu.png" alt="">
        Tribhuvan university
      </a>
    </div>
    <div class="featured-carousel-individual">
      <a href="#">
        <img src="img/tu.png" alt="">
        Tribhuvan university
      </a>
    </div>
    <div class="featured-carousel-individual">
      <a href="#">
        <img src="img/tu.png" alt="">
        Tribhuvan university
      </a>
    </div>
    <div class="featured-carousel-individual">
      <a href="#">
        <img src="img/tu.png" alt="">
        Tribhuvan university
      </a>
    </div>

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