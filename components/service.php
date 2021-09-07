<section id="service">
    <div class="container-max">
        <div class="title-wrap text-center">
            <h3><?= get_sub_field('title'); ?></h3>
            <p><?= get_sub_field('description'); ?></p>
        </div>
        <div class="owl-carousel">
            <?php 
            if( have_rows('add_image_w_content') ):
                while( have_rows('add_image_w_content') ) : the_row();
                    ?>
                    <div class="slider-item">
                        <img width="92" src="<?= get_sub_field('image')['url'] ?>" alt="">    
                        <div class="slider-content">
                            <?= get_sub_field('content'); ?>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>