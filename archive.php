<?php
  /*
   * The template for displaying Archive pages.
   *
   * If this file doesn't exist, archive pages will be displayed
   * using index.php.
   * 
   * In addition to archive.php, you can create a file for category.php,
   * tag.php, etc.
   */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'post' ); ?>
  <?php endwhile; ?>
<?php else : ?>
  <!-- Put a message here if no posts are returned -->
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>