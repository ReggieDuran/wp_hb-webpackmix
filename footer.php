</section>
<footer>
	<section id="footer-menu">
		<div class="container-max">
			<div class="menu-flex-columns">
				<div class="menu-links">
					<?php 
						wp_nav_menu( array(
					        'menu' => 'Footer Menu',
					    ) );
					?>
				</div>
			</div>
		</div>
	</section>
	<section id="copyright">
		<div class="container-max">
			<div class="content-wrapper">
				<p>© Copyright Marramarra 2021</p>
			</div>
		</div>
	</section>
	
</footer>
<script src="<?= get_template_directory_uri(); ?>/dist/js/main.min.js"></script>

<?php wp_footer(); ?>
</body>	
</html>

 