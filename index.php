<?php
  /*
   * The main template file.
   * 
   * This is the most generic template files in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * E.g., it puts together the home page when no home.php file exists.
   */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'post' ); ?>
  <?php endwhile; ?>
<?php else : ?>
  <!-- Put stuff in here if no posts are returned -->
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>