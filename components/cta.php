<section id="cta" <?= get_sub_field('background_color') ? 'style="background: ' . get_sub_field('background_color'). '";' : '' ?>>
    <div class="container-max text-center flex flex-col justify-center">
        <img class="show-dktp" src="<?= get_sub_field('logo')['url'] ?>" alt="">
        <h3><?= get_sub_field('title') ?></h3>
        <?php 
        $link = get_sub_field('button');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        endif; ?>
        <div class="cta-btn">
            <a class="btn btn-outline" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </div>
    </div>    
</section>