<section id="related-blogs">
    <div class="container-max">
        <?php 
            $tags = wp_get_post_tags($post->ID);
            $first_tag = $tags[0]->term_id;
            $loop = array(
                'tag__in' => array($first_tag),
                'post__not_in' => array($post->ID),
                'posts_per_page'=> get_sub_field('number_of_blogs') ? get_sub_field('number_of_blogs') : '3',
                'caller_get_posts'=> 1
            );
            $the_query = new WP_Query($loop);
        ?>
        <div class="title text-center"><h3>Related Blogs</h3></div>
        <div class="news-wrap flex justify-start">
            <?php 
            if ($the_query->have_posts()) :
                while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
    </div>
</section>