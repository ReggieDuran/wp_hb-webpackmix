<section id="form">
    <div class="container-max">
        <div class="top-content flex items-start">
            <div class="form-wrap">
                <?= get_sub_field('select_form') ? do_shortcode('[contact-form-7 id="' . get_sub_field('select_form')[0]->ID . '"]') : '' ?>
            </div>
            <div class="content-wrap">
                <?= get_sub_field('content'); ?>
            </div>
        </div>
        <div class="bottom-content flex ">
            <div class="address-details">
                <?= get_sub_field('address_details'); ?>
            </div>
            <div class="email-us">
                <?= get_sub_field('email_us'); ?>
            </div>
            <div class="phone-num">
                <?= get_sub_field('phone_number'); ?>    
            </div>
            <div class="follow-us">
                <?= get_sub_field('follow_us'); ?>    
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