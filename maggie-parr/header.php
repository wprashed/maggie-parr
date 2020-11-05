<?php
/** 
 * Header
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maggie
 */
global $maggie;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
    <!-- HEADER -->
		
    <header>
        <div class="navbar">
            
            <div class="navbar-header">
                <div class="container">
                    
                    <ul class="info">
                        <li><a href="#"><i class="icon-mail-1 contact"></i> <?php echo esc_html($maggie['email']); ?></a></li>
                        <li><i class="icon-mobile contact"></i> <?php echo esc_html($maggie['phone']); ?></li>
                    </ul><!-- /.info -->
                    
                    <ul class="social">
                        <li><a href="<?php echo esc_html($maggie['facebook']); ?>"><i class="icon-s-facebook"></i></a></li>
                        <li><a href="<?php echo esc_html($maggie['instagram']); ?>"><i class="icon-s-instagram"></i></a></li>
                        <li><a href="<?php echo esc_html($maggie['linkedin']); ?>"><i class="icon-s-linkedin"></i></a></li>
                        <li><a href="<?php echo esc_html($maggie['pinterest']); ?>"><i class="icon-s-pinterest"></i></a></li>
                    </ul><!-- /.social -->
                    
                    <!--  LOGO MOBILE  -->
                    
                    <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                        <img src="<?php echo esc_url($maggie['maggie_header_logo']['url']); ?>" class="logo" alt="">
                    </a>
                    
                    <!--  LOGO MOBILE : END  -->
                    
                    <a class="navbar-toggler btn responsive-menu float-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>
                    
                </div><!-- /.container -->
            </div><!-- /.navbar-header -->
            
            <div class="yamm ml-auto">
                <div class="navbar-collapse collapse">
                    <div class="container">
                        
                        <!--  LOGO  -->
                        
                        <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                            <img src="<?php echo esc_url($maggie['maggie_header_logo']['url']); ?>" class="logo" alt="">
                        </a>
                        
                        <!--  LOGO : END  -->
                        
                        
                        <!--  MAIN NAVIGATION  -->
                        
                        <?php get_template_part("template-parts/nav") ?>

                        <ul class="nav navbar-nav">
                            <li class="dropdown searchbox">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search"></i></a>
                                            
                                <div class="sub-menu dropdown-menu dropdown-menu-right">
                                <?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
                                    <form id="search" class="navbar-form search" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search" method="get">
                                        <input type="search" class="form-control" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'magala' ) ?>" value="<?php echo get_search_query() ?>" name="s">
                                        <button type="submit" class="btn btn-submit icon-right-open"></button>
                                    </form>
                                </div><!-- /.dropdown-menu -->
                            </li><!-- /.searchbox -->
                        </ul>
                        
                        <!--  MAIN NAVIGATION : END  -->
                        
                    </div><!-- /.container -->
                </div><!-- /.navbar-collapse -->
            </div><!-- /.yamm -->
        </div><!-- /.navbar -->
    </header>
    
    <!--  HEADER : END  -->
