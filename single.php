<?php get_header(); ?>
<?php if( have_posts() ): the_post(); ?>
<div class="entry">
<h1 class="e-title"><?php the_title(); ?></h1>
<div class="e-content">
<?php the_content(); ?>
</div>
</div>
<?php else: ?>
No posts.
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
