<section 
    id="banner" 
    <?= get_sub_field('background_image') ? 'style="background-image: url(' . get_sub_field('background_image')['url'] . ');"' : '' ?>
    class="<?= get_sub_field('add_box_shadow') ? 'box-shadow ' : '' ?> <?= get_sub_field('enable_overlay_component') ? 'overlay-component ' : '' ?>"
>
    <div class="banner-wrap">
        <div class="overlay-bg"></div>
        <div class="banner-content">
            <?= get_sub_field('banner_content'); ?>
        </div>
    </div>
</section>