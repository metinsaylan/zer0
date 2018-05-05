<div class="container">
  <?php if( function_exists( 'wp_pagenavi' ) ){
  	wp_pagenavi();
  } else { ?>

  <nav id="nav-main">
    <span class="nav-link nav-previous"><?php next_posts_link( '&laquo; Older' ); ?></span>
    <span class="nav-link nav-next"><?php previous_posts_link( 'Newer &raquo;' ); ?></span>
  </nav>
  <?php } ?>
</div>
