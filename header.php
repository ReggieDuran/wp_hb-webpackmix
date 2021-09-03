<!doctype html>
<html class="no-js" lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&display=swap" rel="stylesheet"> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> -->
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/dist/styles/style.min.css" media="all"/>
<!--[if lt IE 9]>
    <script src="node_modules/html5shiv/dist/html5shiv.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class('no-scroll_js'); ?>>

<section id="main-container">
	<header>
        <div class="top-nav flex items-center" <?= get_field('background_color_tn', 'option') ? 'style="background:' . get_field('background_color_tn', 'option') . '"' : '' ?>>
            <div class="container-max">
				<ul class="flex justify-end">
				 <?php
				if( have_rows('add_navigation', 'option') ):
					while( have_rows('add_navigation', 'option') ) : the_row();
						$link = get_sub_field('link');
						$icon = get_sub_field('icon');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = $link['title'];
							$link_target = $link['target'] ? $link['target'] : '_self';
						endif; ?>
						<li class="flex items-center">
							<img src="<?= $icon['url'] ?>" alt="">
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						</li>
						<?php
					endwhile;
				endif;
				?>
				</ul>
            </div>
        </div>
		<div class="main-nav flex items-center">
			<div class="container-max">
				<div class="flex items-center justify-space-bet">
					<?php $logo = get_field('logo', 'option'); ?>
					<div class="site-logo">
						<img src="<?= $logo['url'] ?>" alt="Helperbees Logo">
					</div>
					<?php 
						wp_nav_menu( array(
							'menu' => 'Main Menu',
							'menu_class' => 'show-tbl text-center items-center'
						) );
					?>
					<div class="mobile-nav">
						<div class="menu-hamburger">
							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>