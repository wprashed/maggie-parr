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

			
<!-- ============================================================= SECTION – BLOG POST ============================================================= -->

<section id="blog-post" class="light-bg">
    <div class="container inner-top-sm inner-bottom classic-blog">
        <div class="row">
            
            <div class="col-lg-9 inner-right-sm">
                <div class="sidemeta">
                    
                    <div class="post format-gallery">
                        
                        <div class="date-wrapper">
                            <div class="date">
                            <?php 
                                $archive_month = get_the_time('m'); 
                                $archive_day   = get_the_time('d'); 
                            ?>
                                <span class="day"><?php echo esc_html( get_the_time('d') ); ?></span>
                                <span class="month"><?php echo esc_html( get_the_time('M') ); ?></span>
                            </div><!-- /.date -->
                        </div><!-- /.date-wrapper -->
                        
                        <div class="post-content">
                            
                            <p class="author">
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>" title="Post author" data-rel="tooltip" data-placement="left">
                                    <?php the_author(); ?>
                                </a>
                            </p>
                            
                            <h1 class="post-title"><?php the_title(); ?></h1>
                            
                            <ul class="meta">
                              <li class="categories"><?php the_category( " " ); ?></li>
                            </ul><!-- /.meta -->
                            
                            <figure>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            </figure>
                            
                            <?php 
                                the_content();
                                wp_link_pages(); 
                            ?>
                            
                        </div><!-- /.post-content -->
                        
                    </div><!-- /.post -->
                    
                    <div class="post-author">
                        <figure>
                            
                            <div class="author-image icon-overlay icn-link">
                                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">
                                    <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>
                                </a>
                            </div>
                            
                            <figcaption class="author-details">
                                <h3>About the author</h3>
                                <p><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>"><?php the_author(); ?></a> 
                                <?php the_author_meta( "description" ); ?></p>
                                <ul class="meta">
                                    <li class="author-posts"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">All posts by Maggie</a></li>
                                    <li class="url"><a href="#">maggieparr.com</a></li>
                                </ul><!-- /.meta -->
                                <ul class="social">
                                    <li><a href="https://www.facebook.com/MaggieParrArt/"><i class="icon-s-facebook"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/maggieparr/"><i class="icon-s-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com/darkparr/"><i class="icon-s-instagram"></i></a></li>
                                    <li><a href="https://www.pinterest.com/maggieparr/boards/"><i class="icon-s-pinterest"></i></a></li>
                                </ul><!-- /.social -->
                            </figcaption>
                            
                        </figure>
                    </div><!-- /.post-author -->
                    
                    <div id="share" class="row">
                        
                        <div class="col-md-4 reset-padding">
                            <a href="#" class="btn-share-md">
                                <p class="name">Facebook</p>
                                <i class="icon-s-facebook"></i>
                            </a>
                        </div><!-- /.col -->
                        
                        <div class="col-md-4 reset-padding">
                            <a href="#" class="btn-share-md">
                                <p class="name">Twitter</p>
                                <i class="icon-s-twitter"></i>
                            </a>
                        </div><!-- /.col -->
                        
                        <div class="col-md-4 reset-padding">
                            <a href="#" class="btn-share-md">
                                <p class="name">Instagram</p>
                                <i class="icon-s-instagram"></i>
                            </a>
                        </div><!-- /.col -->
                        
                    </div><!-- /.share -->
                    
                    <div id="accordion-related-posts" class="panel-group">
                    <div class="panel panel-default">			  
                        
                        <div class="panel-heading">
                            <h2 class="panel-title">
                                <a class="panel-toggle" href="#content-related-posts" data-toggle="collapse">
                                    <span>Related posts</span>
                                </a>
                            </h2>
                        </div><!-- /.panel-heading -->
                        
                        <div id="content-related-posts" class="panel-collapse collapse show" data-parent="#accordion-related-posts">
                            <div class="panel-body">
                                <div id="owl-related-posts" class="owl-carousel owl-item-gap">
                                <?php get_template_part("/template-parts/related-post"); ?>
                                    
                                </div><!-- /.owl-carousel -->
                            </div><!-- /.panel-body -->
                        </div><!-- /.content -->
                        
                    </div><!-- /.panel -->
                </div><!-- /.panel-group -->
                    
                    
                    
                        <?php
						    if(!post_password_required()){
						        comments_template();
						    }
					    ?>
                
                </div><!-- /.sidemeta -->
            </div><!-- /.col -->
            
            <?php get_sidebar(); ?>
            
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<!-- ============================================================= SECTION – BLOG POST : END ============================================================= -->

</main>

<!-- ============================================================= MAIN : END ============================================================= -->
<?php
get_footer();