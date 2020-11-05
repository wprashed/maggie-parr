<div class="post format-image">
                                
    <div class="post-content">
        
        <figure class="icon-overlay icn-link post-media">
            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('maggie-blog') ?>" alt=""></a>
        </figure><!-- /.post-media -->
        
        <h2 class="post-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        
        <ul class="meta">
            <?php 
                $archive_year  = get_the_time('y'); 
                $archive_month = get_the_time('m'); 
                $archive_day   = get_the_time('d'); 
            ?>
            <li class="date"><?php echo esc_html( get_the_date() ); ?></li>
            <li class="categories"><?php the_category( " " ); ?></li>
        </ul><!-- /.meta -->
        
        <?php the_excerpt(); ?>
        
        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
        
    </div><!-- /.post-content --> 
    
</div><!-- /.post -->