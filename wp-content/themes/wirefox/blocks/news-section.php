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
                <?php
                    $args = array(
                        'post_type' => 'post', // replace with your actual custom post type
                        'posts_per_page' => 10, // number of posts to display
                        'order' => 'DESC', // or 'ASC' for ascending order
                        'orderby' => 'date', // you can change this to 'title', 'rand', etc.
                    );

                    $custom_query = new WP_Query($args);

                    if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post();
                        $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                        ?>
                        <div class="row">
                            <div class="col-md-10">
                                <div class="animated-img">
                                    <img src="<?php echo $featured_image_url;?> " alt="" width="" height="" />
                                </div>
                            </div>
                        </div>

                        <div class="text-block">
                            <h3 class="title my-3"><?php the_title();?></h3>
                            <div class="post_author text-left">
                                <span><img class="auth_img" src="http://localhost/Wirefox-new/wp-content/themes/wirefox/assets/images/user_icon.jpeg" alt=""></span>
                                <span> <a class="auth_name" href=""><?php the_author();?></a></span>
                                <span class="">
                                    <div class="line"></div>
                                </span>
                            </div>
                            <div class="date_data text-center">
                                <p class="mb-0"><?php the_date('j F Y');?></p>
                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_postdata(); // reset the query
                    else :
                        echo 'No posts found';
                    endif;
                    ?>

				

			</div>
			<!-- single-news -->
		</div>

		
	</div>
</div>
<!-- News Section -->