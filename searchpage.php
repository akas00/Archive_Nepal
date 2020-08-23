<?php
/*
Template Name: Search Page
*/
?>

<div id="content">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="blogpost">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        <?php $this->posts = $wpdb->get_results($this->request); ?>
    </div> <!-- end class blogpost -->
<?php endwhile; ?>

</div>

<?php get_footer(); ?>