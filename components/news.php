<section id="news">
    <div class="container-max">
        <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $loop = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'order'    => 'DESC',
                'posts_per_page' => get_sub_field('number_of_news') ? get_sub_field('number_of_news') : '9',
                'paged' => $paged
            );
            $the_query = new WP_Query($loop);
        ?>
        <div class="news-wrap flex justify-start">
            <?php 
            if ($the_query->have_posts()) :
                while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                    <?php $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full", true); ?>
                    <div class="item">
                        <span class="date flex items-center justify-center flex-col"><?php the_time( 'M j <br> Y' ); ?></span>
                        <div class="featured-image" style="background-image: url(<?php echo $feat_image[0]; ?>);"></div>
                        <div class="content">
                            <h6><?php the_title(); ?></h6>
                            <span>By: <?php echo get_the_author(); ?> </span>
                            <div class="excerpt"><?= get_the_excerpt(); ?></div>
                            <a href="<?php echo get_the_permalink(); ?>">View Details</a>
                        </div>
                    </div>	
                <?php endwhile; ?>
                
            <?php endif; wp_reset_postdata(); ?>
        </div>
        <div class="pagination">
            <?php if (function_exists("pagination")) {
                pagination($the_query->max_num_pages);
            } ?>
        </div>
    </div>
</section>