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
		<div class="container-max">
			<div class="main-header">
				<div class="logo">
					<a href="<?= get_site_url(); ?>">
						<img src="<?= get_field('logo', 'option')['url'] ?>" width="135" height="82" alt="" title="">
					</a>
				</div>
				<div class="navigation">
					<?php 
						wp_nav_menu( array(
					        'menu' => 'Main Menu',
					    ) );
					?>
				</div>
				<div class="menu-hamburger">
					<span></span>
				</div>
			</div>
		</div>
	</header>