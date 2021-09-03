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
					elseif( get_row_layout() == 'social_links' ): 
						
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