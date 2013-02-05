<?php
  /*
   * The template for displaying a truncated post.
   * 
   * E.g. on index, archive, etc.
   *
   * If the quicktag <!--more--> is used in a post to designate
   * the "cut-off" point for the post to be excerpted, the_content() tag
   * will only show the excerpt up to the <!--more--> quicktag point on
   * non-single/non-permalink post pages.
   * 
   * To learn more:
   * http://codex.wordpress.org/Template_Tags/the_content
   */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="post-header">
    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  </header><!-- .post-header -->

  <div class="post-content">
    <?php the_content(); ?>
  </div><!-- .post-content -->

  <footer class="post-footer">
    <?php if ( comments_open() ) : ?>
      <span class="comments-link"><?php comments_popup_link( 'No comments yet', '1 comment', '% comments'); ?></span>
    <?php endif; ?>

    <?php edit_post_link('Edit', '| <span class="edit-link">', '</span>'); ?>
  </footer><!-- .post-footer -->
</article><!-- #post-<?php the_ID(); ?> -->