<?php
function custom_gutenberg_block()
{
	if ( !function_exists( 'acf_register_block' ) ) {
		return;
	}
	
	acf_register_block( array (
		'name'            => 'Slider Reviews',
		'title'           => __( 'Slider Reviews', 'corppix_site' ),
		'render_callback' => 'wpahead_acf_block_render_callback',
		'category'        => 'layout',
		'icon'            => 'lightbulb',
		'post_types'      => array( 'page', 'post', 'service'),
		'keywords'        => array( 'slider', 'reviews')
	) );
}

add_action( 'init', 'custom_gutenberg_block' );

function wpahead_acf_block_render_callback( $block )
{
	$name = str_replace( 'acf/', '', $block['name'] );

	if ( file_exists( get_theme_file_path( "/template-parts/block-{$name}.php" ) ) ) {
		include( get_theme_file_path( "/template-parts/block-{$name}.php" ) );
	}
}


