<?php 
	get_header();
?>

	<div id="main-wrapper" class="page">
		<div class="flexible-wrap">
			<?php
			// Check value exists.
			if( have_rows('add_content') ):
				// Loop through rows.
				while ( have_rows('add_content') ) : the_row();

					// Case: CTA layout.
					if( get_row_layout() == 'cta_section' ):
						get_template_part('components/cta');
					// Case: Two Col layout.
					elseif( get_row_layout() == 'two_col_section' ): 
						get_template_part('components/two-col');
					// Case: Banner layout.
					elseif( get_row_layout() == 'banner_section' ): 
						get_template_part('components/banner');
					// Case: Social links layout.
					elseif( get_row_layout() == 'banner_slider_section' ): 
						get_template_part('components/banner-slider');
					// Case: FAQ layout.
					elseif( get_row_layout() == 'faq_section' ): 
						get_template_part('components/faq');
					// Case: How it works layout.
					elseif( get_row_layout() == 'how_it_works_section' ):
						get_template_part('components/how-it-works');
					// Case: Service layout.
					elseif( get_row_layout() == 'service_section' ):
						get_template_part('components/service');
					// Case: Testimonial layout.
					elseif( get_row_layout() == 'testimonials_section' ):
						get_template_part('components/testimonials');
					// Case: Search layout.
					elseif( get_row_layout() == 'search_section' ):
						get_template_part('components/search');
					// Case: About Us layout.
					elseif( get_row_layout() == 'about_us_three_column' ):
						get_template_part('components/about-us');
					// Case: Profile layout.
					elseif( get_row_layout() == 'profile_section' ):
						get_template_part('components/profile');
					endif;
				// End loop.
				endwhile;
			// No value.
			else :
				// Do something...
			endif;
			?>
		</div>
	</div>
<?php 
	get_footer(); 
?>

<?php

