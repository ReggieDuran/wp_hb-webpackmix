<section id="faq">
    <div class="container-max">
        <div class="content-accordion">
            <?php
            if( have_rows('investment_listings') ):
                while( have_rows('investment_listings') ) : the_row(); ?>
                    <div class="acc-item" data-sal="slide-up" data-sal-easing="ease">
                        <div class="acc-item__left">
                            <div class="logo">
                                <?php 
                                    $image = get_sub_field('investment_listings_logo'); 
                                    $link = get_sub_field('investment_listings_link');
                                ?>
                                <?php if ($link): ?>
                                    <a href="<?php echo $link; ?>" class="elink">	
                                <?php endif ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="">
                                <?php if ($link): ?>
                                    </a>	
                                <?php endif ?>
                            </div>
                        </div>
                        <div class="acc-item__right">
                            <div class="acc-title">
                                <?php the_sub_field('investment_listings_content_intro'); ?>
                            </div>
                            <div class="acc-body">
                                <?php the_sub_field('investment_listings_content'); ?>
                            </div>
                        </div>
                        <a href="" class="open-close-btn" aria-label="Click for details about <?php the_sub_field('investment_company_name'); ?>">
                            <span></span>
                        </a>
                    </div>
                <?php
                endwhile;
            endif; ?>										
        </div>
    </div>
</section>