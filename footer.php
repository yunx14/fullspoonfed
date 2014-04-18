<?php
/**
 * The template for displaying the footer.
 *
 * @since Leaf 1.0
 */
?>
	</div><!-- #main .row -->

	<?php leaf_footer_before(); // Before footer hook ?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row footer-row">
			<?php
				/* Display the footer sidebars if active and not the 404 page.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

			<?php if (has_nav_menu('footer')) { ?>
				<div class="row footer-nav">
					<div class="twelve columns">
					
						<nav role="navigation" class="site-navigation footer-navigation">
							<h1 class="assistive-text"><?php _e( 'Footer Menu', 'leaf' ); ?></h1>
							<?php wp_nav_menu( array( 'theme_location' => 'footer', 'fallback_cb' => false, 'depth' => 1, 'menu_class' => 'footer-menu' ) ); ?>
						</nav><!-- .site-navigation .footer-navigation -->
						
					</div><!-- .twelve .columns -->
				</div><!-- .row .footer-nav -->
			<?php } ?>
		</div><!-- .row .footer-row -->
		
		
		<div class="footer-info">
			<div class="row info-wrap">
				<div class="four columns aboutfooter">
					<h1>About Full Spoon Fed</h1>
					<p>Full Spoon Fed is a Blog dedicated to pomoting healthy food choice lifestyles. We are a branch of Whole Foods Market’s Full Spoon wellness initiative dedicated to promoting healthy eating in the workplace.</p>
					<a href="/about">Learn more about us.</a>
				</div><!-- .copyright .six .columns -->

				<div class="four columns followfooter">
					<h1>About Full Spoon Fed</h1>
					<ul>
						<li><a href="https://www.facebook.com/WfmFullSpoon" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/1.png" /></a></li>
						<li><a href="https://twitter.com/wfmfullspoon" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/2.png" /></a></li>
						<li><a href="https://plus.google.com/u/0/b/108489226437134085314/108489226437134085314/posts/p/pub" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/3.png" /></a></li>
						<li><a href="http://instagram.com/wfmfullspoon" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/4.png" /></a></li>
						<li><a href="http://www.linkedin.com/groups/Full-Spoon-Whole-Foods-Market-5188030?home=&gid=5188030&trk=anet_ug_hm&goback=%2Egmp_5188030" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/5.png" /></a></li>
						<li><a href="http://www.pinterest.com/fullspoon/boards/" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/6.png"></a></li>
					</ul>
					<a class="contactus" href="http://fullspoon.com/get-involved/?t=contact" target="_blank">Contact us.</a>
				</div><!-- .site-info .six .columns -->
				<div class="four columns">
					
				</div>
				
			</div><!-- .row info-wrap-->
		</div><!-- .footer-info -->
		
		<div class="scroll-to-top"></div><!-- .scroll-to-top -->
		
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<!-- Begin wp_footer() -->
<?php wp_footer(); ?>
<!-- End wp_footer() -->

</body>
</html>