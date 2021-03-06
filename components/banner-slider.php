<section id="slider-banner">
    <div class="owl-carousel">
        <?php 
        if( have_rows('slider') ):
            while( have_rows('slider') ) : the_row();
                ?>
                <div class="slider-item" <?= get_sub_field('background_image') ? 'style="background-image: url(' . get_sub_field('background_image')['url'] . ');"' : '' ?>>
                    <div class="overlay-bg"></div>
                    
                    <div class="slider-content" data-sal="slide-up" data-sal-easing="ease" data-sal-delay="100">
                        <?= get_sub_field('slider_content'); ?>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>