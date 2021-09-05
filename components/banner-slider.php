<section id="slider-banner">
    <div class="owl-carousel">
        <?php 
        if( have_rows('slider') ):
            while( have_rows('slider') ) : the_row();
                ?>
                <div class="slider-item">
                    <div class="slider-image" <?= get_sub_field('image') ? 'style="background: url(' . get_sub_field('image')['url'] . ');"' : '' ?>></div>
                    <div class="slider-content">
                        <?= get_sub_field('slider_content'); ?>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>