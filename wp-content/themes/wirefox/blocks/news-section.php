<!-- News Section -->
<div class="news_list content-row row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color">

	<!-- test -->

	<!-- tabs section -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item" role="presentation">
			<a class="nav-link active" id="all" data-bs-toggle="tab" href="#tabpanel-all" role="tab" aria-controls="tabpanel-all" aria-selected="true">ALL</a>
		</li>
        <?php
            // Get the categories
            $categories = get_categories();

            // Check if there are categories
            if ($categories) :
              
                foreach ($categories as $category) : ?>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="<?php echo $category->slug;?>" data-bs-toggle="tab" href="#<?php echo $category->slug;?>" role="tab" aria-controls="<?php echo $category->slug;?>" aria-selected="false"><?php echo $category->name;?></a>
                </li>
                <?php    
                endforeach;
              
            endif;
            ?>


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
				<div class="date_data text-center">
					<p class="mb-0">9 November 2022</p>
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