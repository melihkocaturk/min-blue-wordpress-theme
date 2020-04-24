<h2><a href="<?php esc_url( the_permalink() ); ?>" class="text-dark"><?php the_title(); ?></a></h2>
<ul class="list-inline entry-footer text-muted">
  <li class="list-inline-item"><i class="fa fa-user"></i> <?php the_author(); ?></li>
  <li class="list-inline-item"><i class="fa fa-calendar"></i> <?php the_time( 'F j, Y' ); ?></li>
  <li class="list-inline-item"><i class="fa fa-comment"></i> <?php comments_number(); ?></li>
  <li class="list-inline-item"><i class="fa fa-folder"></i> <?php the_category( $separator = ', ' ); ?></li>
  <li class="list-inline-item"><i class="fa fa-tag"></i> <?php the_tags(); ?></li>
</ul>
<?php
if ( is_single() ) {
  the_content();
} else {
  the_excerpt();
}  
?>
<hr class="my-5">
