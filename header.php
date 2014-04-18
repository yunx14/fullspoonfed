<?php
/**
 * The Header for our theme.
 *
 * @since Leaf 1.0
 */
?><!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42322486-2', 'fullspoonfed.com');
  ga('send', 'pageview');

</script>
<!--[if gt IE 8]>
	<style type="text/css" media="screen">
		.leaf-more-articles .home-articles{
			max-width:275px !important;
		}
	</style>
<![endif]-->
<!-- Begin wp_head() -->
<?php wp_head(); ?>
<!-- End wp_head() -->
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">

	<div id="head-container">
	
		<?php leaf_header_before(); // Before Header hook. ?>
		
		<?php if (has_nav_menu('header')) { ?>
				
			<div class="top-nav row">
				
				<nav role="navigation" class="site-navigation header-navigation twelve columns">
					<h1 class="assistive-text"><?php _e( 'Header Menu', 'leaf' ); ?></h1>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'leaf' ); ?>"><?php _e( 'Skip to content', 'leaf' ); ?></a></div>
					<div class="sf-menu">
						<ul class="sf-menu sf-js-enabled">
							<li class="current_page_item"><a href="/fullspoonfed">Home</a></li>
							<li class="current_page_item"><a href="/fullspoonfed">About Us</a></li>
							<li class="page_item page-item-2"><a href="http://fullspoon.com" target="_blank">Go to Full Spoon</a></li>
							<!-- <li class="page_item page-item-2"><a href="/">Recipes</a></li> -->
						</ul>
					</div>
					
				</nav><!-- .site-navigation .header-navigation -->
					
			</div><!-- .top-nav .row -->
					
		<?php } ?>

		<div class="row">
			<header id="masthead" class="site-header row twelve columns" role="banner">
				<div class="row">
					<div class="header-group six columns">
						<a href="/fullspoonfed"><img src="<?= bloginfo('template_url') ?>/images/logo.png"/></a>
					</div><!-- .header-group .six .columns -->
					
						<?php leaf_header_inside(); // Inside Header hook. ?>
						<div class="header-group three columns">
							<a target="_blank" href="http://fullspoon.com"><img src="<?= bloginfo('template_url') ?>/images/logo2.png"/></a>
						</div>
						
				</div><!-- .row -->
				
				<nav role="navigation" class="site-navigation main-navigation">
					<h1 class="assistive-text"><?php _e( 'Menu', 'leaf' ); ?></h1>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'leaf' ); ?>"><?php _e( 'Skip to content', 'leaf' ); ?></a></div>
					<div class="sf-menu">
						<ul class="sf-menu sf-js-enabled">
							<!-- current_page_item -->
							<li class="page_item"><a href="/fullspoonfed">Home</a></li>
							<li class="page_item"><a href="/fullspoonfed/?page_id=39">About Us</a></li>
							<li class="page_item"><a href="http://fullspoon.com" target="_blank">Go to Full Spoon</a></li>
							<!-- <li class="page_item page-item-2"><a href="/">Recipes</a></li> -->
						</ul>
					</div>
				</nav><!-- .site-navigation .main-navigation -->
				
			</header><!-- #masthead .site-header .twelve .columns -->
		</div><!-- .row -->
	</div><!-- #head-container -->
	
	<?php leaf_header_after(); // After Header hook. ?>
	
	<div id="main" class="row">