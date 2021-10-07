<section id="content">
    <div class="container-max">
        <h3><?php the_title(); ?></h3>
        <div class="date-author">
            <span class="date"><?php printf( __( '%s', 'textdomain' ), get_the_modified_date('j\<\s\u\p\>S\<\/\s\u\p\> M Y') ); ?></span>
            | <span>Author : <p class="author"><?php echo get_the_author(); ?> </p></span>
        </div>

        <?= get_sub_field('content'); ?>
    </div>
</section>