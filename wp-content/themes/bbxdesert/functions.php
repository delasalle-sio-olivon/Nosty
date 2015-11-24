<?php


function bbx_theme_setup() {
	if ( ! isset( $content_width ) ) $content_width = 1200;
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );
	add_filter( 'show_admin_bar', '__return_false' );
}
add_action( 'after_setup_theme', 'bbx_theme_setup' );


function bbx_enqueue_scripts() {
	$js_directory = get_template_directory_uri() . '/javascript/';
	wp_register_script( 'global', $js_directory . 'global.js', 'jquery', '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'global' );
}
add_action( 'wp_enqueue_scripts', 'bbx_enqueue_scripts' );

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


function jc_post_by_category($atts, $content = null) {
	extract(shortcode_atts(array(
			"nb" => '5',
			"orderby" => 'post_date',
			"order" => 'DESC',
			"category" => '1'
	), $atts));
	global $post;
	$tmp_post = $post;
	$myposts = get_posts('showposts='.$nb.'&orderby='.$orderby.'&category='.$category);
	$out = '<ul>';
	foreach($myposts as $post){
		setup_postdata( $post );
		$out .= '<li><a href="'.get_permalink().'">'.the_title("","",false).'</a></li>';
	}
	$out .= '</ul>';
	wp_reset_postdata();
	$post = $tmp_post;
	return $out;
}
add_shortcode("post-by-category", "jc_post_by_category");