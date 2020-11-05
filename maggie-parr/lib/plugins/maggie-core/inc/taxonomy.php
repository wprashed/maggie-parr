<?php

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Categories.
	 */

	$labels = [
		"name" => __( "Categories", "maggie" ),
		"singular_name" => __( "Category", "maggie" ),
	];

	$args = [
		"label" => __( "Categories", "maggie" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'portfolio_category', 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "portfolio_category",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "portfolio_category", [ "portfolio" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

