</section>
<footer>
	<section id="footer-menu" class="flex items-center">
		<div class="container-max">
			<div class="flexible-wrap flex">
				<?php
				// Check value exists.
				if( have_rows('add_section', 'option') ):
					// Loop through rows.
					while ( have_rows('add_section', 'option') ) : the_row();

						// Case: Contact link layout.
						if( get_row_layout() == 'contact_links' ):
							$title = get_sub_field('title');
							$desc = get_sub_field('description');
							// Do something... 
							?>
							<div class="contact-link">
								<h6 class="show-dktp"><?= $title ?></h6>
								<p><?= $desc ?></p>
								<ul>
								<?php 
								if( have_rows('add_icons_&_links', 'option') ):
									while( have_rows('add_icons_&_links', 'option') ) : the_row();
										$link = get_sub_field('link');
										$icon = get_sub_field('icon');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										endif; ?>
										<li class="flex">
											<img src="<?= $icon['url'] ?>" alt="">
											<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										</li>
										<?php
									endwhile;
								endif;
								?>
								</ul>
							</div>
							<?php
						// Case: Menu links layout.
						elseif( get_row_layout() == 'menu_links' ): 
							$title = get_sub_field('title');
							// Do something...
							?>
							<div class="menu-link">
								<h6 class="show-dktp"><?= $title ?></h6>
								<ul>
								<?php 
								if( have_rows('add_link', 'option') ):
									while( have_rows('add_link', 'option') ) : the_row();
										$link = get_sub_field('link');
										if( $link ): 
											$link_url = $link['url'];
											$link_title = $link['title'];
											$link_target = $link['target'] ? $link['target'] : '_self';
										endif; ?>
										<li class="flex items-center">
											<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										</li>
										<?php
									endwhile;
								endif;
								?>
								</ul>
							</div>
							<?php

						// Case: Social links layout.
						elseif( get_row_layout() == 'social_links' ): 
							$title = get_sub_field('title');
							// Do something...
							?>
							<div class="social-link">
								<h6 class="show-dktp"><?= $title ?></h6>
								<ul class="flex">
								<?php 
								if( have_rows('add_social_links', 'option') ):
									while( have_rows('add_social_links', 'option') ) : the_row();
										$link = get_sub_field('link');
										$icon = get_sub_field('icon');
										?>
										<li class="flex items-center">
											<img src="<?= $icon['url'] ?>" alt="">
											<a class="button" href="<?php echo esc_url( $link ); ?>" target="_blank"></a>
										</li>
										<?php
									endwhile;
								endif;
								?>
								</ul>
								<p class="show-dktp"><?= $desc ?></p>
							</div>
							<?php
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
	</section>
	<section id="footer-copyright" class="flex items-center">
		<div class="container-max flex justify-space-bet">
			<ul class="flex">
				 <?php
				if( have_rows('add_link_bs', 'option') ):
					while( have_rows('add_link_bs', 'option') ) : the_row();
						$link = get_sub_field('link_bs');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						endif; ?>
						<li class="flex items-center">
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</li>
						<?php
					endwhile;
				endif;
				?>
			</ul>
			<div class="copyright">
				<?= get_field('copyright_bs', 'option') ? '<p>' . get_field('copyright_bs', 'option') . '</p>': '<p>© 2021 HelperBees . All Rights Reserved.</p>'?>
			</div>
		</div>
	</section>
	
</footer>
<script src="<?= get_template_directory_uri(); ?>/dist/js/main.min.js"></script>

<?php wp_footer(); ?>
</body>	
</html>

 