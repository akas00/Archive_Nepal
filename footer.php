<section class="footer">

  <span class="footer-questions">
    <a href="#"><?php echo get_theme_mod('Footer_title'); ?></a>
  </span>

  <div class="footer-links">
  <?php
// Primary navigation menu.
wp_nav_menu( array(
    [
        'menu_class' => 'main-nav navbar-nav ml-auto',
        'container' => false,
        'theme_location' => 'Footer_menu',
        //'items_wrap'      => '<ul>%3$s</ul>',
        'depth' => 4,
        //
    ]
)  );
?>
     <?php
// Primary navigation menu.
wp_nav_menu( array(
    [
        'menu_class' => 'main-nav navbar-nav ml-auto',
        'container' => false,
        'theme_location' => 'Footer_menu',
        //'items_wrap'      => '<ul>%3$s</ul>',
        'depth' => 4,
        //
    ]
)  );
?>
     <?php
// Primary navigation menu.
wp_nav_menu( array(
    [
        'menu_class' => 'main-nav navbar-nav ml-auto',
        'container' => false,
        'theme_location' => 'Footer_menu',
        //'items_wrap'      => '<ul>%3$s</ul>',
        'depth' => 4,
        //
    ]
)  );
?>
    
    <?php
// Primary navigation menu.
wp_nav_menu( array(
    [
        'menu_class' => 'main-nav navbar-nav ml-auto',
        'container' => false,
        'theme_location' => 'Footer_menu',
        //'items_wrap'      => '<ul>%3$s</ul>',
        'depth' => 4,
        //
    ]
)  );
?>
</div>

  <div class="footer-bottom">
    <div class="name">
      Archive Nepal
    </div>
    <br>
    <div class="social">
      <a href="<?php echo get_theme_mod('facebook'); ?>">
        <i class="fi-cnsuxl-facebook-circle"></i>
      </a>
      <a href="<?php echo get_theme_mod('instagram'); ?>">
        <i class="fi-xnsuxl-instagram"></i>
      </a>
      <a href="<?php echo get_theme_mod('twitter'); ?>">
        <i class="fi-xnsuxl-twitter"></i>
      </a>
      <a href="<?php echo get_theme_mod('LinkIn'); ?>">
        <i class="fi-cnsuxl-linkedin"></i>
      </a>
    </div>
    <br>
    <div class="developer">
      <div class="developer-before"><i class="fi-xtpuxl-code-thin"></i></div>
      <div class="developer-after"><a href="#">by Kaal Vairab & Team</a></div>
    </div>
  </div>

</section>





<!-- CUSTOM JS -->
<?php wp_footer(); ?>
</body>

</html>