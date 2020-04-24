<?php
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          get_template_part( 'template-parts/content' );

          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        }
      }
      ?>
      <div class="row">
        <div class="col">
          <?php previous_post_link( '&larr; %link', '%title' ); ?>
        </div>
        <div class="col text-right">
          <?php next_post_link( '%link &rarr;', '%title' ); ?>
        </div>
      </div>
      <hr class="my-5">
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php
get_footer();