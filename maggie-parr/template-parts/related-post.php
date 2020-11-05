<?php

$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
<div class="item">
    <figure>
    
        <div class="icon-overlay icn-link">
            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('maggie-blog-related') ?>" alt=""></a>
        </div><!-- /.icon-overlay -->
        
        <figcaption class="bordered no-top-border">
            <div class="info">
                <h4><a href=<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p><?php the_category( " " ); ?></p>
            </div><!-- /.info -->
        </figcaption>
        
    </figure>
</div><!-- /.item -->
<?php }
wp_reset_postdata(); ?>