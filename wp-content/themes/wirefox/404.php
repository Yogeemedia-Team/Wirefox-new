<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Wirefox
 */

get_header();
?>

<div class="ser_sec content-row row_padding_top row_padding_left row_padding_right row_padding_bottom dark-section change-header-color has-clip-path not_found">
	<div class="container text-center mt-5">
		<div class="text-center">
			<p class="text_lg">404</p>
			<p class="text_sm"><em>Page Not Found</em></p>
		</div>
		<span class="text-light">Sorry, an error has occured, Requested page not found!</span>
		<div class="next-hero-subtitle caption-timeline"><span><a href="<?php echo get_home_url(); ?>">Back to homepage</a></span></div>
	</div>
</div>
<?php
get_footer();
