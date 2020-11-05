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
<!-- ============================================================= MAIN ============================================================= -->
		
<main>
			
    <!-- ============================================================= SECTION – PORTFOLIO POST ============================================================= -->
    
    <section id="portfolio-post">
        <div class="container inner-top-md">
            
            <div class="row">
                <div class="col-md-12">
                    <div id="owl-work" class="owl-carousel owl-inner-pagination owl-outer-nav owl-ui-lg">
                    <?php 
                        $safans = carbon_get_the_post_meta( 'crb_slides' );
                        foreach ( $safans as $safan ) :
                    ?>
                        <div class="item">
                            <figure>
                               <?php echo wp_get_attachment_image( $safan['image'], 'full' ); ?>
                            </figure>
                        </div><!-- /.item -->
                        <?php endforeach ?>
                    </div><!-- /.owl-carousel -->
                </div><!-- /.col -->
            </div><!-- /.row -->
            
            <div class="row">
                
                <div class="col-md-7 inner-top-xs inner-right-xs">
                    <header>
                        <h2><?php the_title(); ?></h2>
                        <p class="text-normal"><?php the_content(); ?></p>
                    </header>
                </div><!-- /.col -->
                
                <div class="col-md-4 offset-md-1 outer-top-xs inner-left-xs border-left">
                    <ul class="item-details">
                        <li class="date"><?php echo carbon_get_the_post_meta('ct_portfolio_date'); ?></li>
                        <li class="categories"><?php echo carbon_get_the_post_meta('ct_portfolio_tag'); ?></li>
                        <li class="client"><?php echo carbon_get_the_post_meta('ct_portfolio_client'); ?></li>
                    </ul><!-- /.item-details -->
                </div><!-- /.col -->
                
            </div><!-- /.row -->
            
        </div><!-- /.container -->
        
    </section>
    
    <!-- ============================================================= SECTION – PORTFOLIO POST : END ============================================================= -->
    
    
    <!-- ============================================================= SECTION – MORE WORKS ============================================================= -->
    
    <section id="more-works">
        <div class="container inner-top-sm inner-bottom">
            <div class="row">
                <div class="col-md-12">
                    <div id="accordion" class="panel-group blank">
                        <div class="panel panel-default">			  
                            
                            <div class="panel-heading text-center">
                                <h4 class="panel-title">
                                    <a class="panel-toggle collapsed" href="#content" data-toggle="collapse">
                                        <span>More works</span>
                                    </a>
                                </h4>
                            </div><!-- /.panel-heading -->
                            
                            <div id="content" class="panel-collapse collapse show" data-parent="#accordion">
                                <div class="panel-body">
                                    <div class="portfolio">
                                        
                                    <ul class="filter text-center">
                                    <?php
		                            $categories = get_categories('taxonomy=portfolio_category&post_type=portfolio'); ?>
                                    <li><a href="#" data-filter="*" class="active">All</a></li>
                                    <?php foreach ($categories as $category) : ?>
                                    <li><a href="#" data-filter=".<?php echo esc_attr($category->slug); ?>"><?php echo esc_html($category->name); ?></a></li>
                                    <?php endforeach; ?>
                                </ul><!-- /.filter -->
                    
                                <ul class="isotope items col-3-custom">
                                <?php query_posts( array(
                                    'post_type' => 'portfolio',
                                    'post_per_page' => 6,
                                    )); 
                                ?>
                                <?php 
                                    while (have_posts()) : the_post();
                                    $terms = get_the_terms ($the_query->ID, 'portfolio_category');
                                    if ( !is_wp_error($terms) && !empty($terms)) : 
                                    $slugs = wp_list_pluck($terms, 'slug');

                                    $slug = implode(" ", $slugs); 
                                ?>
                                <?php else: ?>
                                    <?php
                                        endif;
                                    ?>
                                    <li class="item thumb <?php echo esc_attr($slug);?>">
                                    
                                        <a href="<?php the_permalink(); ?>">
                                            <figure>
                                                <figcaption class="text-overlay">
                                                    <div class="info">
                                                        <h4><?php the_title(); ?></h4>
                                                        <p><?php echo esc_html($slug); ?></p>
                                                    </div><!-- /.info -->
                                                </figcaption>
                                                
                                                <?php the_post_thumbnail("maggie-blog"); ?>
                                            </figure>
                                        </a>
                                    </li><!-- /.item -->
                                    <?php endwhile; ?>
                                    <?php wp_reset_query(); ?>
                                    
                        

                                </ul><!-- /.items -->
                                        
                                    </div><!-- /.portfolio -->
                                </div><!-- /.panel-body -->
                            </div><!-- /.content -->
                            
                        </div><!-- /.panel -->
                    </div><!-- /.accordion -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    
    <!-- ============================================================= SECTION – MORE WORKS : END ============================================================= -->
    
</main>
<?php
get_footer();