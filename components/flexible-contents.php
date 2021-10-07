<div class="flexible-wrap">
    <?php
    // Check value exists.
    if( have_rows('add_content') ):
        // Loop through rows.
        while ( have_rows('add_content') ) : the_row();

            // Case: CTA layout.
            if( get_row_layout() == 'cta_section' ):
                include __DIR__ . '/cta.php';
            // Case: Two Col with Icon layout.
            elseif( get_row_layout() == 'two_col_section' ): 
                include __DIR__ . '/two-col-icon.php';
            // Case: Two Col layout.
            elseif( get_row_layout() == 'two_column_sec' ): 
                include __DIR__ . '/two-col.php';
            // Case: Pricing table layout.
            elseif( get_row_layout() == 'pricing_table_section' ): 
                include __DIR__ . '/pricing.php';
            // Case: Banner layout.
            elseif( get_row_layout() == 'banner_section' ): 
                include __DIR__ . '/banner.php';
            // Case: Social links layout.
            elseif( get_row_layout() == 'banner_slider_section' ): 
                include __DIR__ . '/banner-slider.php';
            // Case: FAQ layout.
            elseif( get_row_layout() == 'faq_section' ): 
                include __DIR__ . '/faq.php';
            // Case: How it works layout.
            elseif( get_row_layout() == 'how_it_works_section' ):
                include __DIR__ . '/how-it-works.php';
            // Case: Service layout.
            elseif( get_row_layout() == 'service_section' ):
                include __DIR__ . '/service.php';
            // Case: Testimonial layout.
            elseif( get_row_layout() == 'testimonials_section' ):
                include __DIR__ . '/testimonials.php';
            // Case: Search layout.
            elseif( get_row_layout() == 'search_section' ):
                include __DIR__ . '/search.php';
            // Case: About Us layout.
            elseif( get_row_layout() == 'about_us_three_column' ):
                include __DIR__ . '/about-us.php';
            // Case: Profile layout.
            elseif( get_row_layout() == 'profile_section' ):
                include __DIR__ . '/profile.php';
            // Case: News Section layout.
            elseif( get_row_layout() == 'news_section' ):
                include __DIR__ . '/news.php';
            // Case: Form Section layout.
            elseif( get_row_layout() == 'form_section' ):
                include __DIR__ . '/form.php';
            // Case: Content layout.
            elseif( get_row_layout() == 'content_editor' ):
                include __DIR__ . '/content.php';
                // Case: Form Section layout.
            elseif( get_row_layout() == 'related_blog' ):
                include __DIR__ . '/related-blogs.php';
            endif;
        // End loop.
        endwhile;
    // No value.
    else :
        // Do something...
    endif;
    ?>
</div>