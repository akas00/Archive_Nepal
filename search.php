



<?php
get_header(); 
/**
 * Search results page
 */
?>






<!-- SEARCH RESULTS -->
<section class="content">
  <div class="left-promote">
    Promotional
  </div>
  <div class="search-results">
    <div class="title"> <h2>  Search Results for '<?php echo get_search_query();?>' </h2></div>
    <div class="search-results-link">

  
<?php if ( have_posts() ): ?>
<h2>Search Results for '<?php echo get_search_query(); ?>'</h2> 
<ol>
<?php while ( have_posts() ) : the_post(); ?>
    <li>
            <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
            <?php the_content(); ?>
    </li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
<?php endif; ?>



     

    </div>
    <div class="search-page-index">
      <i class="fi-xwllxl-chevron-wide"></i>
      Page : 1 - <a href="#">2</a> -- <a href="#">10</a>
      <i class="fi-xwlrxl-chevron-wide"></i>
    </div>
  </div>
  <div class="right-content"></div>
</section>


<!-- FEATURED -->
<!-- <?php include("section/featured.php"); ?> -->

<!-- FROM WEB -->
<!-- <?php include("section/fromweb.php"); ?> -->

<!-- FOOTER-->
<?php get_footer(); ?> 



