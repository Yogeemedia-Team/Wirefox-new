<?php
/* 
Template Name: News List
*/
get_header();
?>

<!-- banner block here -->

<!-- News Section -->
<div class="news_list content-row row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color">
	<!-- tabs section -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item" role="presentation">
			<a class="nav-link active" id="all" data-bs-toggle="tab" href="#tabpanel-all" role="tab" aria-controls="tabpanel-all" aria-selected="true">ALL</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="news-1" data-bs-toggle="tab" href="#newspanel-1" role="tab" aria-controls="newspanel-1" aria-selected="false">SEO</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="news-2" data-bs-toggle="tab" href="#newspanel-2" role="tab" aria-controls="newspanel-2" aria-selected="false">WEB DESIGN</a>
		</li>
		<li class="nav-item" role="presentation">
			<a class="nav-link" id="news-3" data-bs-toggle="tab" href="#newspanel-3" role="tab" aria-controls="newspanel-3" aria-selected="false">WEB DEVELOPMENT</a>
		</li>
	</ul>
	<div class="tab-content pt-5" id="tab-content">
		<div class="tab-pane active" id="tabpanel-all" role="tabpanel" aria-labelledby="all">
			<!-- single-news -->
			<div class="single-news position-relative">
				<div class="row">
					<div class="col-md-10">
						<div class="animated-img">
							<img src="https://wirefox.co.uk/wp-content/uploads/2020/12/Wholesale-Meats-Coventry.jpg" alt="" width="" height="" />
						</div>
					</div>
				</div>
				<div class="text-block">
					<h3 class="title my-3">All</h3>
					<div class="post_author text-left">
						<span><img class="auth_img" src="http://localhost/Wirefox-new/wp-content/themes/wirefox/assets/images/user_icon.jpeg" alt=""></span>
						<span> <a class="auth_name" href="">Raj Kaur</a></span>
						<span class="">
							<div class="line"></div>
						</span>
					</div>
				</div>
			</div>
			<!-- single-news -->
		</div>
		<div class="tab-pane" id="newspanel-1" role="tabpanel" aria-labelledby="news-1">
			<!-- single-news -->
			<div class="single-news position-relative">
				<div class="row">
					<div class="col-md-10">
						<div class="animated-img">
							<img src="https://wirefox.co.uk/wp-content/uploads/2020/12/Wholesale-Meats-Coventry.jpg" alt="" width="" height="" />
						</div>
					</div>
				</div>
				<div class="text-block">
					<h3 class="title my-3">1</h3>
					<div class="post_author text-left">
						<span><img class="auth_img" src="http://localhost/Wirefox-new/wp-content/themes/wirefox/assets/images/user_icon.jpeg" alt=""></span>
						<span> <a class="auth_name" href="">Raj Kaur</a></span>
						<span class="">
							<div class="line"></div>
						</span>
					</div>
				</div>
			</div>
			<!-- single-news -->
		</div>
		<div class="tab-pane" id="newspanel-2" role="tabpanel" aria-labelledby="news-2">
			
		</div>
		<div class="tab-pane" id="newspanel-3" role="tabpanel" aria-labelledby="news-3">
			
		</div>
		<div class="tab-pane" id="newspanel-4" role="tabpanel" aria-labelledby="news-4">
			
		</div>
	</div>
</div>
<!-- News Section -->

<?php
get_footer();
