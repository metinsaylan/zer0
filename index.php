<?php get_header(); ?>
<?php if( have_posts() ): ?>
<?php get_template_part( 'loop', 'list' ); ?>
<?php get_template_part( 'nav', 'blog' ); ?>
<?php else: ?>
  No posts.
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
