<?php 
	/*
	Template Name: Home Page
	*/

	get_header();
?>

	<div id="main-wrapper" class="homepage">
		<?php
			// Flexible contents
			get_template_part('components/flexible-contents');
		?>
	</div>
<?php 
	get_footer(); 
?>