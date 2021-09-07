<section id="how-it-works">
    <div class="container-max">
        <div class="title-wrap text-center">
            <h3><?= get_sub_field('title'); ?></h3>
            <p><?= get_sub_field('description'); ?></p>
        </div>
        <div class="owl-carousel">
            <?php 
            $num = 1;
            if( have_rows('add_image_w_content') ):
                while( have_rows('add_image_w_content') ) : the_row();
                    ?>
                    <div class="slider-item">
                        <div class="slider-image" <?= get_sub_field('image') ? 'style="background-image: url(' . get_sub_field('image')['url'] . ');"' : '' ?>>
                            <span class="slider-num"><?= '0' . $num ?></span>
                        </div>
                        <div class="slider-content">
                            <?= get_sub_field('content'); ?>
                        </div>
                    </div>
                    <?php
                    $num++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>