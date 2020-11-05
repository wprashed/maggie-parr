<?php 
/** 
 * Main Index
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maggie
 */

get_header(); ?>
<!-- ============================================================= MAIN ============================================================= -->
		
<main>
			
    <!-- ============================================================= SECTION – BLOG ============================================================= -->
    
    <section id="blog" class="light-bg">
        <div class="container inner-top-sm inner-bottom">
            
            <div class="row inner-bottom-xs">
                <div class="col-md-12">	
            
            <div class="row">
                
                <div class="col-lg-9 col-md-8 inner-right-sm">
                    
                    <div class="grid-blog col-2-custom">
                        <div class="posts">
                            
                            <?php
                                while ( have_posts() ) :
                                the_post();
                            ?>
                            <?php get_template_part("/template-parts/blog"); ?>
                            <?php
                                endwhile;
                            ?>
                            
                            
                        </div><!-- /.posts -->
                    </div><!-- /.grid-blog -->
                    
                    <ul class="pagination">
                        <?php
                            the_posts_pagination(array(
                                "screen_reader_text"=>' ',
                                "prev_text" => "Prev",
                                "next_text" => "Next"
                            ));
                        ?>
                    </ul><!-- /.pagination --> 
                    
                </div><!-- /.col -->
                
                <?php get_sidebar(); ?>
                
            </div><!-- /.row -->
            
        </div><!-- /.container -->
    </section>
    
    <!-- ============================================================= SECTION – BLOG : END ============================================================= -->
    
</main>
<?php get_footer(); ?>