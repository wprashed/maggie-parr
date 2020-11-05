<?php

function cptui_register_my_cpts_service() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => __( "Services", "maggie" ),
		"singular_name" => __( "Service", "maggie" ),
	];

	$args = [
		"label" => __( "Services", "maggie" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "service", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "service", $args );
}

add_action( 'init', 'cptui_register_my_cpts_service' );

