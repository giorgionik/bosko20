<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bosko
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://kit.fontawesome.com/5a19641a23.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	


<nav>
	
	<div class="logo">
		  <i class="fas fa-camera fa-5x"></i>
	</div>
<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li><a href="#">Apartments</a></li>
	<li><a href="#">Contact</a></li>

</ul>
<div class="button">
	<a class="btn-open" href="#"></a>
</div>
</nav>
<div class="overlay">
	<div class="wrap">
		<ul class="wrap-nav">
			<li><a href="#">About</a>
			<ul>
				<li><a href="#">About Company</a></li>
				<li><a href="#">Designers</a></li>
				<li><a href="#">Developers</a></li>
				<li><a href="#">Pets</a></li>
			</ul>
			</li>
			<li><a href="#">Services</a>
			<ul>
				<li><a href="https://www.google.hr/">Web Design</a></li>
				<li><a href="#">Development</a></li>
				<li><a href="#">Apps</a></li>
				<li><a href="#">Graphic design</a></li>
				<li><a href="#">Branding</a></li>
			</ul>
			</li>
			<li><a href="#">Work</a>
			<ul>
				<li><a href="#">Web</a></li>
				<li><a href="#">Graphic</a></li>
				<li><a href="#">Apps</a></li>
			</ul>
			</li>
		</ul>
		<div class="social">
			<a href="http://mario-loncarek.from.hr/">
			<div class="social-icon">
				<i class="fa fa-facebook"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-twitter"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-codepen"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-behance"></i>
			</div>
			</a>
			<a href="#">
			<div class="social-icon">
				<i class="fa fa-dribbble"></i>
			</div>
			</a>
			<p>
				From: Zagreb, Croatia<br>
				 Site: <a href="http://mario-loncarek.from.hr/">mario-loncarek.from.hr</a>
			</p>
		</div>
	</div>
</div>

	
	
	
	
	
	<h1>
		Header
	</h1>
	<?php echo do_action('wpml_add_language_selector'); ?>

				
