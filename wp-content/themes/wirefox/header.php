<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wirefox
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<!-- Stylesheets -->
	<!-- bootstrap css -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/content.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/showcase.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/shortcodes.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/assets.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/custom.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/inner-page.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
	
	<!-- Google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
</head>

<?php 
if ( is_front_page() ) : ?>
	<body class="smooth-scroll">
	<?php wp_body_open(); ?>
<?php else : ?>
	<body <?php body_class(); ?> data-primary-color="#8c6144">
	<?php wp_body_open(); ?>
<?php endif; ?>

	<div class="bg-red">
		<!-- Preloader -->
		<?php 
		// get_template_part('sections/preloader'); 
		?>
		<!--/Preloader -->

		<div class="cd-index cd-main-content">

			<!-- Page Content -->
			<div id="page-content" class="light-content" data-bgcolor="#0c0c0c">

				<!-- Header -->
				<?php get_template_part('sections/header_nav'); ?>
				<!--/Header -->



				<!-- Content Scroll -->
				<div id="content-scroll">
				<div class="tv_effect"></div>

					<!-- Main -->
					<div id="main">
					
						<!-- Main Content -->
						<div id="main-content">
						
							<!-- Main Page Content -->
							<?php 
							if ( is_front_page() ) : ?>
								
							<?php else : ?>
								<!-- Main Page Content -->
								<!-- <div id="main-page-content" class="content-full-width"> -->
									<div id="main-page-content">

							<?php endif; ?>
