<?php
  /*
   * The template for displaying Comments.
   */
?>
<div class="comments">
  <?php if ( post_password_required() ) : ?>
    <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'toolbox' ); ?></p>
  </div><!-- #comments -->
  <?php
      /* Stop the rest of comments.php from being processed,
       * but don't kill the script entirely -- we still have
       * to fully load the template.
       */
      return;
    endif;
  ?>
  <?php if ( have_comments() ) : ?>

    <?php comment_form(); ?>

    <ol class="comments-list">
      <?php wp_list_comments(); ?>
    </ol>

  <?php else : ?>

    <?php comment_form(); ?>

  <?php endif; // have_comments() ?>

  <?php
    // If comments are closed and there are no comments, you might want to display a message saying so
    if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
  ?>
    <!-- Put a message here about comments being closed -->
  <?php endif; ?>
</div><!-- .comments -->