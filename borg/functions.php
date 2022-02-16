<?php

function redwave_setup() {
  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
    ) );

  register_nav_menus( array(
    'footermenu' => __( 'Footer Menu', 'redwave' )
  ) );

  register_nav_menus( array(
    'primarymenu' => __( 'Primary Navigation Menu', 'redwave' )
  ) );

  register_nav_menus( array(
    'primaryrightmenu' => __( 'Primary Navigation Right Menu', 'redwave' )
  ) );

  register_nav_menus( array(
    'secondarymenu' => __( 'Secondary Navigation Menu', 'redwave' )
  ) );
}

add_action("after_setup_theme", "redwave_setup");

function redwave_load_style() {
  wp_enqueue_style("signika-font", "https://fonts.googleapis.com/css?family=Signika:300,400,700");
  wp_enqueue_style("slider-css", get_template_directory_uri() . '/css/coda-slider.css');
  wp_enqueue_style("template-css", get_template_directory_uri() . '/css/_style.css');

  // redwave_load_scripts();
}

function redwave_load_scripts() {
  wp_enqueue_script("coda-slider-js", get_template_directory_uri() . '/js/coda-slider.js');
  wp_enqueue_script("jquery", get_template_directory_uri() . '/js/jquery.1.2.6.js',array(),'1.2.6');
  wp_enqueue_script("jquery-easing", get_template_directory_uri() . '/js/jquery.easing.1.3.js',array('jquery'));
  wp_enqueue_script("jquery-localscroll", get_template_directory_uri() . '/js/jquery.localscroll-1.2.5.js',array('jquery'));
  wp_enqueue_script("jquery-scrollTo", get_template_directory_uri() . '/js/jquery.scrollTo-1.3.3.js',array('jquery'));
  wp_enqueue_script("jquery-serialScroll", get_template_directory_uri() . '/js/jquery.serialScroll-1.2.1.js',array('jquery'));
}

add_action("wp_enqueue_scripts","redwave_load_style");
add_action("wp_enqueue_scripts","redwave_load_scripts");

function redwave_print_wp_title() {
  if( is_front_page() || is_home() ) {
    global $post;
    return the_title("", " - ") . bloginfo('title');
  } else {
    return wp_title(" - ", true, 'right') . bloginfo('title');
  }
}

function redwave_print_description_meta() {
  global $post;
  return htmlspecialchars( get_post_field('post_content', $post->ID) );
}

function redwave_widgets_init() {

	register_sidebar( array(
		'name'          => 'NX right sidebar',
		'id'            => 'nx_right_sidebar_1',
		'before_widget' => '<div class="card">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="card-header">',
		'after_title'   => '</div><div class="card-body">',
  ) );

  register_sidebar( array(
		'name'          => 'NX right sidebar 2 for image',
		'id'            => 'nx_right_sidebar_2',
		'before_widget' => '<div>',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div>',
		'after_title'   => '</div><div>',
	) );

}
add_action( 'widgets_init', 'redwave_widgets_init' );