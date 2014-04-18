<?php
/**
 * The Template for displaying all single posts.
 *
 * @since Leaf 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content <?php echo leaf_grid_width( 'content' ); ?> columns">
		<div id="content" role="main">
		
			<?php leaf_post_before(); // Before post hook. ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'leaf' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span>', 'leaf' ) . ' %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title ' . __( '<span class="meta-nav">&rarr;</span>', 'leaf' ) ); ?></span>
				</nav><!-- .nav-single -->

				<?php
					// If comments are open or we have at least one comment, load the comment template.
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

			<?php endwhile; // end of the loop. ?>
			
			<?php leaf_post_after(); // After post hook. ?>

		</div><!-- #content -->
	</div><!-- #primary .site-content .<?php echo leaf_grid_width( 'content' ); ?> .columns -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>