<div class="services_tabs tabs_sec content-row row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color">
<p class="mb-5">
		<?php the_field('section_content');?>
	</p>
	<!-- tabs section -->
	<ul class="nav" role="tablist" id="myBtnContainer">
		<li class="nav-item ms-auto" role="presentation">
			<a class="nav-link" onclick="filterSelection('all')" >View All</a>
		</li>
        <?php
            // Define your custom taxonomy
            $taxonomy = 'project'; // Replace with the name of your custom taxonomy

            // Get the terms of the custom taxonomy
            $terms = get_terms(array(
                'taxonomy' => $taxonomy,
                'hide_empty' => false, // Set to true if you want to hide terms with no posts
                'orderby' => 'term_id',    // You can change this to 'name', 'slug', or other parameters
                'order' => 'ASC',         // 'ASC' for ascending order, 'DESC' for descending order
                
            ));

            // Check if there are terms
            if ($terms) :
               
                foreach ($terms as $term) : ?>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" onclick="filterSelection('<?php echo $term->slug;?>')" ><?php echo $term->name;?></a>
                    </li>
                <?php    
                endforeach;
                ;
            endif;
            ?>

	</ul>
	<div class="tab-content pt-5" id="tab-content">
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
		<div class="tab-pane pt-5 <?php echo $term->slug;?>" >
			<!-- single-service -->
            <?php
            $args = array(
                'post_type' => 'our_works', // replace with your actual custom post type
                'posts_per_page' => 10, // number of posts to display
                'order' => 'DESC', // or 'ASC' for ascending order
                'orderby' => 'date', 
                'tax_query' => array(
                    array(
                        'taxonomy' => 'project', // replace with your actual taxonomy name
                        'field'    =>  'slug', // you can change this to 'id' or 'name' depending on how you want to query the taxonomy
                        'terms'    => $term->slug,
                    ),
                ),// you can change this to 'title', 'rand', etc.
            );
            
            $custom_query = new WP_Query($args);
            
            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    // Get the URL of the featured image
                    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); // replace 'thumbnail' with the desired image size
                 ?>
               <div class="single-service position-relative pt-5">
				<div class="row">
					<div class="col-md-10">
						<div class="overflow-hidden">
							<img class="fifty-fifty-img" src="<?php echo $featured_image_url;?>" alt="" width="" height="" />
						</div>
					</div>
				</div>
                <a href="<?php the_field('field_65645209e41c3');?>">
                
				<div class="text-block">
					<h3 class="title"><?php the_title();?></h3>
					<p class="desctiption"><?php the_content();?></p>
				</div>
                </a>
			</div>
           <?php
                endwhile;
                wp_reset_postdata(); // reset the query
            else :
                echo 'No work found';
            endif;
            ?>

		

			<!-- single-service -->
		</div>
        <?php    
                endforeach;
                ;
            endif;
            ?>

	</div>
</div>
<!-- services section -->