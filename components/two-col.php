<section id="two-col">
    <div class="container-max flex justify-space-bet">
        <div class="left-col text-center">
            <div class="col-wrap flex flex-col justify-center items-center">
                <img src="<?= get_sub_field('icon_left')['url'] ?>" alt="">
                <h6><?= get_sub_field('title_left') ?></h6>
                <p><?= get_sub_field('description_left') ?></p>
            </div>
        </div>
        <div class="right-col text-center">
            <div class="col-wrap flex flex-col justify-center items-center">
                <img src="<?= get_sub_field('icon_right')['url'] ?>" alt="">
                <h6><?= get_sub_field('title_right') ?></h6>
                <p><?= get_sub_field('description_right') ?></p>
            </div>
        </div>
    </div>    
</section>