<?php
/**
 * Search template file
 * Template Name: Contact
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package magala
 */

the_post();
get_header();
global $maggie;
?>
<main class="bg-white">
        <section id="contact-form">
            <div class="container inner">
                
                <div class="row">
                    <div class="col-lg-8 col-md-9 mx-auto text-center">
                        <header>
                            <h1>Get in touch</h1>
                            <p>Leave a message to schedule a free consultation with Maggie Parr. </p>
                        </header>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            
                            <div class="col-md-6 outer-top-md inner-right-sm">
                                
                                <h2>Leave a Message</h2>
                                
                                <?php the_content( ); ?>
                                
                                <div id="response"></div>
                                
                            </div><!-- ./col -->
                            
                            <div class="col-md-6 outer-top-md inner-left-sm border-left">
                                
                                <h2>Contact</h2>
                                <p>If you have a question or request for Maggie Parr, either fill out your information, or contact us directly. We look forward to hearing from you!</p>
                                
                                <h3>MAGGIE PARR</h3>
                                <ul class="contacts">
                                    <li><i class="icon-location contact"></i> <?php echo esc_html($maggie['address']); ?></li>
                                    <li><i class="icon-mobile contact"></i> <?php echo esc_html($maggie['phone']); ?></li>
                                    <li><a href="mailto:<?php echo esc_html($maggie['email']); ?>"><i class="icon-mail-1 contact"></i> <?php echo esc_html($maggie['email']); ?></a></li>
                                </ul><!-- /.contacts -->
                                
                                <div class="social-network">
                                    <h3>Social</h3>
                                    <ul class="social">
                                        <li><a href="<?php echo esc_html($maggie['facebook']); ?>"><i class="icon-s-facebook"></i></a></li>
                                        <li><a href="<?php echo esc_html($maggie['instagram']); ?>"><i class="icon-s-instagram"></i></a></li>
                                        <li><a href="<?php echo esc_html($maggie['linkedin']); ?>"><i class="icon-s-linkedin"></i></a></li>
                                        <li><a href="<?php echo esc_html($maggie['pinterest']); ?>"><i class="icon-s-pinterest"></i></a></li>
                                    </ul><!-- /.social -->
                                </div><!-- /.social-network -->
                                
                            </div><!-- /.col -->
                            
                        </div><!-- /.row -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
                
            </div><!-- /.container -->
        </section>
        </main>
<?php
get_footer();