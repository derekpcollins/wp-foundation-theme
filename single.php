<?php
  /*
   * The template for displaying an individual post.
   *
   * This template also displays comments if they exist.
   * To read more about displaying comments:
   * http://codex.wordpress.org/Function_Reference/comments_template
   *
   */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'post' ); ?>

    <?php
      // If comments are open or we have at least one comment, load up the comments template
      if ( comments_open() || '0' != get_comments_number() ) {
        comments_template();
      }
    ?>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>