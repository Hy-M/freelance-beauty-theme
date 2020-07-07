<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <?php wp_head(); ?>
		<title>HY digital</title>
	</head>
	<body>
		<header>
			<div id="slideout--menu">
				<ul>
					<li><a class="active" href="<?php echo site_url(''); ?>">Home</a></li>
					<li><a href="<?php echo site_url('/work'); ?>">Client work</a></li>
					<li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
					<li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
				</ul>
			</div>
			<nav>
				<section id="logo">
					<a href="#">
						<p>HY digital</p>
					</a>
				</section>
				<div id="menu--icon">
					<i class="fas fa-bars"></i>
				</div>
				<ul>
                    <li><a class="active" href="<?php echo site_url(''); ?>">Home</a></li>
					<li><a href="<?php echo site_url('/work'); ?>">Client work</a></li>
					<li><a href="<?php echo site_url('/blog'); ?>">Blog</a></li>
					<li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>
				</ul>
			</nav>
		</header>