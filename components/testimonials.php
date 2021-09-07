<section class="flex items-center" id="testimonials" <?= get_sub_field('background_image') ? 'style="background-image: url(' . get_sub_field('background_image')['url'] . ');"' : '' ?>>
    <div class="testimonial-wrap">
        <div class="top-content">
            <?= get_sub_field('top_content'); ?>
        </div>
        <div class="owl-carousel">
            <?php 
            if( have_rows('add_testimonial') ):
                while( have_rows('add_testimonial') ) : the_row();
                    ?>
                    <div class="slider-item" style="width:25rem">
                        <div class="slider-content">
                            <?= get_sub_field('content'); ?>
                        </div>
                        <div class="slider-profile flex items-center">
                            <img width="50" height="50" src="<?= get_sub_field('profile_image')['url']; ?>" alt="">
                            <p>
                                <?= get_sub_field('name'); ?>
                            </p>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>