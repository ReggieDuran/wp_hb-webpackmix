<section id="faq">
    <div class="container-max">
        <div class="content-acc flex justify-space-bet">
            <div class="content-acc_left">
                <div class="content-wrap">
                    <?= get_sub_field('left_content'); ?>
                </div>
            </div>
            <div class="content-acc_right">
                <?php
                if( have_rows('add_faq') ):
                    while( have_rows('add_faq') ) : the_row(); ?>
                        <div class="acc-item">
                            <div class="acc-title">
                                <?= get_sub_field('question'); ?>
                            </div>
                            <div class="acc-body">
                                <?= get_sub_field('answer'); ?>
                            </div>
                            <span id="open-close-btn"></span>
                        </div>
                    <?php
                    endwhile;
                endif; ?>	
            </div>
        </div>
    </div>
</section>