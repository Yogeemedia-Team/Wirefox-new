<div class="services_tabs content-row row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color">
<p class="mb-5">
		<?php the_field('section_content');?>
	</p>
	<!-- tabs section -->
	<ul class="nav" role="tablist">
		<li class="nav-item ms-auto" role="presentation">
			<a class="nav-link active" id="all" data-bs-toggle="tab" href="#tabpanel-all" role="tab" aria-controls="tabpanel-all" aria-selected="true">View All</a>
		</li>
        <?php
            // Define your custom taxonomy
            $taxonomy = 'project'; // Replace with the name of your custom taxonomy

            // Get the terms of the custom taxonomy
            $terms = get_terms(array(
                'taxonomy' => $taxonomy,
                'hide_empty' => false, // Set to true if you want to hide terms with no posts
            ));

            // Check if there are terms
            if ($terms) :
               
                foreach ($terms as $term) : ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="<?php echo $term->slug;?>" data-bs-toggle="tab" href="#<?php echo $term->slug;?>" role="tab" aria-controls="<?php echo $term->slug;?>" aria-selected="false"><?php echo $term->name;?></a>
                    </li>
                <?php    
                endforeach;
                ;
            endif;
            ?>

	</ul>
	<div class="tab-content pt-5" id="tab-content">
		<div class="tab-pane active" id="tabpanel-all" role="tabpanel" aria-labelledby="all">
			<!-- single-service -->
			<div class="single-service position-relative">
				<div class="row">
					<div class="col-md-10">
						<div class="overflow-hidden">
							<img class="fifty-fifty-img" src="https://wirefox.co.uk/wp-content/uploads/2020/12/Wholesale-Meats-Coventry.jpg" alt="" width="" height="" />
						</div>
					</div>
				</div>
				<div class="text-block">
					<h3 class="title">All</h3>
					<p class="desctiption">A successful E Commerce Website with Free Delivery especially popular in today's environment.</p>
				</div>
			</div>
			<!-- single-service -->
		</div>
        
		<div class="tab-pane" id="servicepanel-1" role="tabpanel" aria-labelledby="service-1">
			<!-- single-service -->
			<div class="single-service position-relative">
				<div class="row">
					<div class="col-md-10">
						<div class="overflow-hidden">
							<img class="fifty-fifty-img" src="https://wirefox.co.uk/wp-content/uploads/2020/12/Wholesale-Meats-Coventry.jpg" alt="" width="" height="" />
						</div>
					</div>
				</div>
				<div class="text-block">
					<h3 class="title">Service 1</h3>
					<p class="desctiption">A successful E Commerce Website with Free Delivery especially popular in today's environment.</p>
				</div>
			</div>
			<!-- single-service -->
		</div>
		<div class="tab-pane" id="servicepanel-2" role="tabpanel" aria-labelledby="service-2">
			<!-- single-service -->
			<div class="single-service position-relative">
				<div class="row">
					<div class="col-md-10">
						<div class="overflow-hidden">
							<img class="fifty-fifty-img" src="https://wirefox.co.uk/wp-content/uploads/2020/12/Wholesale-Meats-Coventry.jpg" alt="" width="" height="" />
						</div>
					</div>
				</div>
				<div class="text-block">
					<h3 class="title">Service 2</h3>
					<p class="desctiption">A successful E Commerce Website with Free Delivery especially popular in today's environment.</p>
				</div>
			</div>
			<!-- single-service -->
		</div>
		<div class="tab-pane" id="servicepanel-3" role="tabpanel" aria-labelledby="service-3">
			<!-- single-service -->
			<div class="single-service position-relative">
				<div class="row">
					<div class="col-md-10">
						<div class="overflow-hidden">
							<img class="fifty-fifty-img" src="https://wirefox.co.uk/wp-content/uploads/2020/12/Wholesale-Meats-Coventry.jpg" alt="" width="" height="" />
						</div>
					</div>
				</div>
				<div class="text-block">
					<h3 class="title">Service 3</h3>
					<p class="desctiption">A successful E Commerce Website with Free Delivery especially popular in today's environment.</p>
				</div>
			</div>
			<!-- single-service -->
		</div>
		<div class="tab-pane" id="servicepanel-4" role="tabpanel" aria-labelledby="service-4">
			<!-- single-service -->
			<div class="single-service position-relative">
				<div class="row">
					<div class="col-md-10">
						<div class="overflow-hidden">
							<img class="fifty-fifty-img" src="https://wirefox.co.uk/wp-content/uploads/2020/12/Wholesale-Meats-Coventry.jpg" alt="" width="" height="" />
						</div>
					</div>
				</div>
				<div class="text-block">
					<h3 class="title">Service 4</h3>
					<p class="desctiption">A successful E Commerce Website with Free Delivery especially popular in today's environment.</p>
				</div>
			</div>
			<!-- single-service -->
		</div>
	</div>
</div>
<!-- services section -->