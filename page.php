<?php get_header(); ?>

<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('page'); ?>>
			<article>
				<h1><?php the_title(); ?></h1>
				<div class="post-content page-content">
					<?php the_content(); ?>
				</div><!--.post-content .page-content -->
			</article>

		</div><!--#post-# .post-->


	<?php endwhile; ?>
</div><!--#content-->
<?php get_footer(); ?>
