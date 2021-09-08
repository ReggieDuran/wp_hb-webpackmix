<section id="about-us">
    <div class="container-max">
        <div class="top-content">
            <?= get_sub_field('top_content'); ?>
        </div>
        <div class="three-col flex justify-space-bet">
            <?php 
                if(have_rows('add_content_column')) :
                    while(have_rows('add_content_column')) : the_row()
                        ?>
                        <div class="content">
                            <?= get_sub_field('content'); ?>
                        </div>
                        <?php
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</section>