<?php
/**
 * Leaf add functions and definitions.
 *
 * @since Leaf 1.0
 */

/* load theme functions. */
require( get_template_directory() . '/includes/theme-functions.php' );

/* Add theme options. */
require( get_template_directory() . '/includes/admin/theme-options.php' );
 
/* Custom template tags for this theme. */
require( get_template_directory() . '/includes/template-tags.php' );

/* Add support for a custom header image. */
require( get_template_directory() . '/includes/custom-header.php' );

/* Add theme plugins. */
require( get_template_directory() . '/includes/theme-plugins.php' );

/* Custom action hooks for this theme. */
require( get_template_directory() . '/includes/hooks.php' );

/* Add contextual help. */
require( get_template_directory() . '/includes/admin/help.php' );








// register Foo_Widget widget
function register_foo_widget() {
    register_widget( 'Foo_Widget' );
}
add_action( 'widgets_init', 'register_foo_widget' );

/**
 * Adds Foo_Widget widget.
 */
class Foo_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			__('Widget Title', 'text_domain'), // Name
			array( 'description' => __( 'A Foo Widget', 'text_domain' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'keep_up_with_us', $instance['title'] );
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		
		?>
		<aside id="search-2" class="widget widget_keepuswithus">
			<h3 class="widget-title"><span>Keep up with us:</span></h3>
			<a href="https://www.facebook.com/WfmFullSpoon" target="_blank" class="first"><img src="<?= bloginfo('template_url') ?>/images/social2/1.png"></a>
			<a href="https://twitter.com/wfmfullspoon" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/2.png"></a>
			<a href="https://plus.google.com/u/0/b/108489226437134085314/108489226437134085314/posts/p/pub" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/3.png"></a>
			<a href="http://instagram.com/wfmfullspoon" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/4.png"></a>
			<a href="http://www.linkedin.com/groups/Full-Spoon-Whole-Foods-Market-5188030?home=&gid=5188030&trk=anet_ug_hm&goback=%2Egmp_5188030" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/5.png"></a>
			<a href="http://www.pinterest.com/fullspoon/boards/" target="_blank"><img src="<?= bloginfo('template_url') ?>/images/social2/6.png"></a>
		</aside>
		<?php

	}



}






// register Foo_Widget widget
function register_instagram_widget() {
    register_widget( 'Instagram_Widget' );
}
add_action( 'widgets_init', 'register_instagram_widget' );

/**
 * Adds Foo_Widget widget.
 */
class Instagram_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'instagram_widget', // Base ID
			__('Instagram Widget', 'text_domain'), // Name
			array( 'description' => __( 'Instagram Feed', 'text_domain' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'keep_up_with_us', $instance['title'] );
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		
		?>
		<aside id="search-2" class="widget widget_instagram">
			<h3 class="widget-title"><span>Instagram Feed:</span></h3>
		</aside>
		<?php

	}



}







// register Foo_Widget widget
function register_twitter_widget() {
    register_widget( 'Twitter_Widget' );
}
add_action( 'widgets_init', 'register_twitter_widget' );
/**
 * Adds Foo_Widget widget.
 */
class Twitter_Widget extends WP_Widget {
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'twitter_widget', // Base ID
			__('Twitter Widget', 'text_domain'), // Name
			array( 'description' => __( 'Twitter Feed', 'text_domain' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'keep_up_with_us', $instance['title'] );
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		
		?>
		<aside id="search-2" class="widget twitter_instagram">
			<div id="twitter">
				<img id="twitter-header" src="<?php bloginfo('template_url') ?>/images/twitterfeed_header.gif"  />	
				<br/>		
				<a class="twitter-timeline" href="https://twitter.com/wfmfullspoon" data-widget-id="375758765271699456">Tweets by @wfmfullspoon</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				

			</div>
		</aside>
		<?php

	}



}