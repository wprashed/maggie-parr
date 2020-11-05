<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Magala_Blog_&_Magazine
 */
global $maggie;
the_post();
get_header();
?>
<main>
			
			<!-- ============================================================= SECTION – PORTFOLIO ============================================================= -->
		
			<section id="portfolio">
				
				<div class="container inner">
					<div class="row">
						<div class="col-lg-8 col-md-9 mx-auto text-center">
							<header>
								<h1><?php the_title(); ?></h1>
                                <p><?php echo carbon_get_the_post_meta('ct_service_details'); ?></p>
								
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
				
				<div class="container inner-bottom">
					<div class="row">
						<div class="col-md-12 portfolio">
                            <?php the_content(); ?>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – PORTFOLIO : END ============================================================= -->
			
			
		</main>
<?php
get_footer();