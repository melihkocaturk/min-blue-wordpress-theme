<?php
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>
  <h4>Comments</h4>
  <ul class="list-unstyled comment-list">
    <?php
    wp_list_comments(
      array(
        'style'       => 'ul',
        'short_ping'  => false,
        'avatar_size' => 50,
        'type'        => 'all',
      )
    );
    ?>
  </ul>
<?php endif; ?>

<?php	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
  <p class="text-info">Comments are closed.</p>
<?php endif; ?>

<?php
comment_form(
  array(
    'title_reply_before' => '<h4>',
    'title_reply_after'  => '</h4>',
    'class_submit'       => 'btn btn-primary'
  )
);
?>
<hr class="my-5">