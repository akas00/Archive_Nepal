

<section class="from-web">
  <div class="title">
    From Web
  </div>

  <?php
    $args = array(
    'post_type'     => 'from_web',
    'post_status'   => 'publish',
    //  'category_name' => 'Health',
    'posts_per_page'=> 8,
    );
    $from_web = new WP_Query( $args );
?> 


  <div class="from-web-content">
     

    <div class="content-links-container">
    <?php if( $from_web->have_posts() ) :
                while( $from_web->have_posts() ) :
                $from_web->the_post();
                ?> 
 

      <div class="content-links">
        <div class="content-links-img">
          <img src="<?php echo get_the_post_thumbnail_url();?>" alt="">
        </div>
        <div class="content-links-title">
          <a href="#"><?php the_title()?></a>
        </div>
        <div class="content-links-description">
        <?php the_excerpt()?>
        </div>
        <div class="content-links-src">
          <a href="#">contentsource.com</a>
        </div>
        <div class="content-links-more"> <a href="#">Read more..</a></div>
      </div>
      <?php endwhile; endif; ?>
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