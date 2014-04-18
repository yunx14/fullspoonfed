<?php
/**
 * Template Name: Recipes Template
 *
 * @since Leaf 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content twelve columns">
		<div id="content" role="main">
			<?php $loop = new WP_Query( array( 'posts_per_page' => '-1', 'paged' => $paged, 'category' =>'6') ); ?>
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
				<div class="post-divider"></div>
			<?php endwhile; // end of the loop. ?>

			<?php leaf_pagination(); ?>

		</div><!-- #content -->
	</div><!-- #primary .site-content .twelve .columns -->

<?php get_footer(); ?>