<?php
/* 
Template Name: News Single
*/
get_header();
?>


<div class="row main_banner row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color">
	<div class="col-md-7 my-auto">
		<div class="py-5 p-md-0 pe-md-5 mt-4 mt-md-0">
			<h1 class="title"><?php the_title();?></h1>
		</div>
	</div>
	<div class="col-md-5">
		<div class="animated-img">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium');?>" />
		</div>
	</div>
	<div class="news_cont row_padding_top">
		<div class="row">
			<div class="col-md-9">
				<?php the_content();?>
			</div>
			<div class="col-md-3">
				<!-- post sidebar(if need) -->
			</div>
		</div>
	</div>
</div>




<?php
get_footer();
