<?php 
	/*
	Template Name: Home Page
	*/

	get_header();
?>

	<div id="main-wrapper" class="homepage">
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
					// Case: Social links layout.
					elseif( get_row_layout() == 'banner_slider_section' ): 
						get_template_part('components/banner-slider');
					// Case: FAQ layout.
					elseif( get_row_layout() == 'faq_section' ): 
						get_template_part('components/faq');
					// Case: How it works layout.
					elseif( get_row_layout() == 'how_it_works_section' ):
						get_template_part('components/how-it-works');
					// Case: Testimonial layout.
					elseif( get_row_layout() == 'testimonials_section' ):
						get_template_part('components/testimonials');
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