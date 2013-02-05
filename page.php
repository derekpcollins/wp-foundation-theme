<?php
  /*
   * The template for displaying all pages (the WordPress construct of pages).
   */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'post', 'single' ); ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>