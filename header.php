<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<meta name="description" content="<?php bloginfo('description'); ?>" />
        <?php wp_head(); ?>
		<title>Beauty made digital - web solutions for businesses in the beauty services sector</title>
	</head>
	<body>
		<header>
			<div id="slideout--menu">
				<ul>
					<li><a href="<?php echo site_url(''); ?>">Home</a></li>
					<li><a href="<?php echo site_url('/work'); ?>">Client work</a></li>
					<li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
					<li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
				</ul>
			</div>
			<nav>
				<section id="logo">
					<a href="<?php echo site_url(''); ?>">
						<!-- <h4 class="h4 logo--title">Beauty made digital</h4> -->
						<!-- <p class="p--subtext logo--subtext" style="text-align: center;">By Humayraa</p> -->
						<img class="logo--img" src="<?php echo get_template_directory_uri(); ?>/img/beauty-made-digital-logo.png" alt="beauty-made-digital-logo">
					</a>
					
				</section>
				<div id="menu--icon">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
                    <li><a href="<?php echo site_url(''); ?>">Home</a></li>
					<li><a href="<?php echo site_url('/work'); ?>">Client work</a></li>
					<li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
					<li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
				</ul>
			</nav>
		</header>