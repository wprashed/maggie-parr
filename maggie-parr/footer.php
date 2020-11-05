<?php
/** 
 * Footer
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maggie
 */
global $maggie;
?>

<footer class="dark-bg">
    <div class="container inner">
        <div class="row">
            
            <div class="col-lg-3 col-md-6 inner">
                <h4><?php echo esc_html($maggie['about-title']); ?></h4>
                <p><?php echo esc_html($maggie['footer_about']); ?></p>
                <a href="<?php echo esc_html($maggie['button']); ?>" class="txt-btn">
                <?php echo esc_html($maggie['button_text']); ?>
            </a>
            </div><!-- /.col -->
            
            <div class="col-lg-3 col-md-6 inner">
                <h4>On the Easel</h4>
                
                <div class="row thumbs gap-xs">
                    <?php 
                        $args = array(  
                            'post_type' => 'portfolio',
                            'post_status' => 'publish',
                            'posts_per_page' => 4, 
                            'orderby' => 'title', 
                            'order' => 'ASC', 
                        );
                    
                        $loop = new WP_Query( $args ); 
                    ?> 
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>                  
                    <div class="col-6 thumb">
                        <figure class="icon-overlay icn-link">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </figure>
                    </div><!-- /.thumb -->
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div><!-- /.row -->
            </div><!-- /.col -->
            
            
            <div class="col-lg-3 col-md-6 inner">
                <h4><?php echo esc_html($maggie['contact-title']); ?></h4>
                <p><?php echo esc_html($maggie['contact_about']); ?></p>
                <ul class="contacts">
                    <li><i class="icon-mobile contact"></i> <?php echo esc_html($maggie['email']); ?> </li>
                    <li><a href="#"><i class="icon-mail-1 contact"></i> <?php echo esc_html($maggie['phone']); ?></a></li>
                </ul><!-- /.contacts -->
            </div><!-- /.col -->
            
            <div class="col-lg-3 col-md-6 inner">
                <h4><?php echo esc_html($maggie['subscribe-title']); ?></h4>
                <p><?php echo esc_html($maggie['subscribe_about']); ?></p>
                <?php echo $maggie['form-shortcode']; ?>
            </div><!-- /.col -->
            
        </div><!-- /.row --> 
    </div><!-- .container -->
    
    <div class="footer-bottom">
        <div class="container inner clearfix">
            <p class="float-left">
                <?php echo esc_html($maggie['copyright']); ?>
            </p>
            <?php get_template_part("template-parts/footer-nav") ?>
        </div><!-- .container -->
    </div><!-- .footer-bottom -->
</footer>
<?php wp_footer(); ?>
</body>

</html>