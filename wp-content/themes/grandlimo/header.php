<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/fontawesome/css/all.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/select2/css/select2.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap-datetimepicker.min.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/aos/aos.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/feather.css">

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">

	<?php wp_head(); ?>

</head>

<body>
	<?php wp_body_open(); ?>
	<div class="main-wrapper">
		<header class="header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="index-2.html" class="navbar-brand logo">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid" alt="Logo">
						</a>
						<a href="index-2.html" class="navbar-brand logo-small">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-small.png" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="index-2.html" class="menu-logo">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>
						</div>


						<?php if (has_nav_menu('primary')) : ?>
								<?php
								wp_nav_menu(
									array(
										'theme_location'  => '',
										'menu_class'      => '',
										'container_class' => '',
										'items_wrap'      => '<ul class="main-nav">%3$s</ul>',
										'fallback_cb'     => false,
									)
								);
								?>
						<?php endif; ?>
						<!-- <div class="menu-main-menu-container">

						<ul class="main-nav">
							<li class="active"><a href="index-2.html">Home</a></li>
							<li class="has-submenu">
								<a href>Listings <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="listing-grid.html">Listing Grid</a></li>
									<li><a href="listing-list.html">Listing List</a></li>
									<li><a href="listing-details.html">Listing Details</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href>Pages <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="about-us.html">About Us</a></li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Authentication</a>
										<ul class="submenu">
											<li><a href="register.html">Signup</a></li>
											<li><a href="login.html">Signin</a></li>
											<li><a href="forgot-password.html">Forgot Password</a></li>
											<li><a href="reset-password.html">Reset Password</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Booking</a>
										<ul class="submenu">
											<li><a href="booking-payment.html">Booking Checkout</a></li>
											<li><a href="booking.html">Booking</a></li>
											<li><a href="invoice-details.html">Invoice Details</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="javascript:void(0);">Error Page</a>
										<ul class="submenu">
											<li><a href="error-404.html">404 Error</a></li>
											<li><a href="error-500.html">500 Error</a></li>
										</ul>
									</li>
									<li><a href="pricing.html">Pricing</a></li>
									<li><a href="faq.html">FAQ</a></li>
									<li><a href="gallery.html">Gallery</a></li>
									<li><a href="our-team.html">Our Team</a></li>
									<li><a href="testimonial.html">Testimonials</a></li>
									<li><a href="terms-condition.html">Terms & Conditions</a></li>
									<li><a href="privacy-policy.html">Privacy Policy</a></li>
									<li><a href="maintenance.html">Maintenance</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
							<li class="has-submenu">
								<a href>Blog <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="blog-list.html">Blog List</a></li>
									<li><a href="blog-grid.html">Blog Grid</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact-us.html">Contact</a></li>
						</ul>

							</div> -->
					</div>
				</nav>
			</div>
		</header>