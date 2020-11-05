<?php

/**
 * maggie Blog & Magazine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package maggie_Blog_&_Magazine
 */

// Require Files

require_once( get_theme_file_path( "/options/opt-config.php" ) );
require_once( get_theme_file_path( "/inc/mb/metabox.php" ) );
require_once( get_theme_file_path( "/inc/tgm.php" ) );


// Content Wide

if ( ! isset( $content_width ) ) $content_width = 1140;

// Theme Support

function maggie_theme_setup() {
    load_theme_textdomain( "maggie", get_theme_file_path("/languages") );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( "automatic-feed-links");
    add_theme_support( "custom-header");
    $maggie_custom_header_details = array(
        'header-text'           => true,
        'default-text-color'    => 'white',
    );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support("custom-background");
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu( "mainmenu", __( "Main Menu", "maggie" ) );
    register_nav_menu( "footermenu", __( "Footer Menu", "maggie" ) );
    add_image_size( "maggie-blog", 376, 257, true );
    add_image_size( "maggie-blog-related", 308, 211, true );
    add_image_size( "maggie-project-slider", 263, 180, true );
}

add_action( "after_setup_theme", "maggie_theme_setup" );

// Assets Enqueue

function maggie_assets() {
    wp_enqueue_style( "bootstrap-all-css", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, "5.9.0" );
    wp_enqueue_style( "main-css", get_theme_file_uri( "/assets/css/main.css" ), null, "4.7.0" );
    wp_enqueue_style( "bootstrap-css", get_theme_file_uri( "/assets/css/green.css" ), null, "4.3.1" );
    wp_enqueue_style( "green-css", get_theme_file_uri( "/assets/css/owl.carousel.css" ), null, "3.7.2" );
    wp_enqueue_style( "transitions-css", get_theme_file_uri( "/assets/css/owl.transitions.css" ), null, "2.2.1" );
    wp_enqueue_style( "animate-css", get_theme_file_uri( "/assets/css/animate.min.css" ), null, "1.0.0" );
    wp_enqueue_style( "aos-css", get_theme_file_uri( "/assets/css/aos.css" ), null, "1.0.8" );
    wp_enqueue_style( "custom-css", get_theme_file_uri( "/assets/css/custom.css" ), null, "2.0.7" );
    wp_enqueue_style( "fontello-css", get_theme_file_uri( "/assets/fonts/fontello.css" ), null, "2.0.7" );
    wp_enqueue_style( "font-Lato", "//fonts.googleapis.com/css?family=Lato:400,900,300,700", null, "1.0" );
    wp_enqueue_style( "font-Source", "//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,400italic,700italic;display=swap", null, "1.0" );
    wp_enqueue_style( "maggie-css", get_stylesheet_uri(), null, "1.0.0" );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }


    wp_enqueue_script( "bootstrap-js", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), "4.3.1", true  );
    wp_enqueue_script( "popper-js", get_theme_file_uri( "/assets/js/popper.min.js" ), array( "jquery" ), "1.0.0", true  );
    wp_enqueue_script( "carousel-js", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "2.2.1", true  );
    wp_enqueue_script( "form-js", get_theme_file_uri( "/assets/js/jquery.form.js" ), array( "jquery" ), "4.2.2", true  );
    wp_enqueue_script( "validate-js", get_theme_file_uri( "/assets/js/jquery.validate.min.js" ), array( "jquery" ), "1.0.0", true  );
    wp_enqueue_script( "affix-js", get_theme_file_uri( "/assets/js/affix.js" ), array( "jquery" ), "1.0.8", true  );
    wp_enqueue_script( "aos-js", get_theme_file_uri( "/assets/js/aos.js" ), array( "jquery" ), "1.0.0", true  );
    wp_enqueue_script( "isotope-js", get_theme_file_uri( "/assets/js/jquery.isotope.min.js" ), array( "jquery" ), "1.0.0", true  );
    wp_enqueue_script( "imagesloaded-js", get_theme_file_uri( "/assets/js/imagesloaded.pkgd.min.js" ), array( "jquery" ), "1.0.0", true  );
    wp_enqueue_script( "easytabs-js", get_theme_file_uri( "/assets/js/jquery.easytabs.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "buggyfill-js", get_theme_file_uri( "/assets/js/viewport-units-buggyfill.js" ), array( "jquery" ), "1.0.0", true );
    wp_enqueue_script( "scroll-js", get_theme_file_uri( "/assets/js/selected-scroll.js" ), array( "jquery" ), "1.0.0", true );
    wp_enqueue_script( "scripts-js", get_theme_file_uri( "/assets/js/scripts.js" ), array( "jquery" ), "1.0.0", true );
    wp_enqueue_script( "maggie-js", get_theme_file_uri( "/assets/js/custom.js" ), array( "jquery" ), "1.0.0", true );
}

add_action( "wp_enqueue_scripts", "maggie_assets" );

/**
* Custom except length
*/
function deneb_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'deneb_custom_excerpt_length', 700 );

/**
* Except Filter
*/
function new_excerpt_more( $more ) {
    return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Pagination

function maggie_pagination() {
    global $wp_query;
    $links = paginate_links( array(
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => apply_filters( "maggie_pagination_mid_size", 3 )
    ) );
    $links = str_replace( "page-link", "pgn__num", $links );
    $links = str_replace( "<span class='page-item'>", "</span>", $links );
    $links = str_replace( "next pgn__num", "page-item", $links );
    $links = str_replace( "prev pgn__num", "page-item", $links );
    echo wp_kses_post($links);
}

// Widget

function maggie_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Widget', 'maggie' ),
        'id'            => 'sidebar',
        'description'   => __( 'Widgets in this area will be shown right sidebar.', 'maggie' ),
        'before_widget' => '<div id="%1$s" class="sidebox widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}

add_action( "widgets_init", "maggie_widgets" );

function my_search_form( $form ) {
    $form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __( 'Search for:' ) . '</label>
    <input type="text" value="' . get_search_query() . '" name="s" id="s" />
    <input type="submit" id="searchsubmit" value="'. esc_attr__( '>' ) .'" />
    </div>
    </form>';

    return $form;
}

add_filter( 'get_search_form', 'my_search_form', 100 );

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}
