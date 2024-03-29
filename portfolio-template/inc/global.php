<?php
function blog_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);
	add_theme_support(
		'custom-logo',
		array(
			// 'width'       => 340,
			// 			'height'=> 88,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
	add_theme_support( 'customize-selective-refresh-widgets' );
}
add_action( 'after_setup_theme', 'blog_setup' );


add_filter( 'upload_dir', 'my_custom_upload_directory' );
function my_custom_upload_directory( $directory ) {

	$subdirectory = '';

	$originaldir = $directory;

	$directory['subdir'] = $subdirectory;
	$directory['path'] = $originaldir['basedir'] . $subdirectory;
	$directory['url'] = $originaldir['baseurl'] . $subdirectory;

	return $directory;
}