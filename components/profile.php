<section id="profile">
    <div class="container-max">
        <div class="top-content">
            <?= get_sub_field('top_content'); ?>
        </div>
          
        <div class="profile-content flex items-center">
            <img src="<?= get_sub_field('profile_image')['url'] ?>" alt="">    
            <div class="content">
                <?= get_sub_field('profile_content'); ?>
                <ul class="social-links flex">
                    <?php 
                    if( have_rows('add_social_link') ):
                        while( have_rows('add_social_link') ) : the_row();
                            $link = get_sub_field('link');
                            $icon = get_sub_field('icon');
                            ?>
                            <li class="flex items-center">
                                <img src="<?= $icon['url'] ?>" alt="">
                                <a class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"></a>
                            </li>
                            <?php
                        endwhile;
                    endif;
                    ?>
			    </ul>
            </div>
        </div>
    </div>
</section>