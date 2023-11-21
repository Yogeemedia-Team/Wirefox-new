 <div id="news-section" class="padding-align">
        <div class="heading-text">
            <h3><?php the_field('section_title');?></h3>
            <p><?php the_field('section_content');?></p>
        </div>
        <div id="news-row">
            <?php
                // The Query
                $args = array(
                    'post_type' => 'post', // You can change this to 'page' or any other custom post type
                    'posts_per_page' => 1,
                    'orderby'        => 'date', // Order by date
                    'order'          => 'DESC', // Number of posts to display
                );

                $query = new WP_Query($args);

                // The Loop
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        ?>
                        <img src="<?php echo $thumbnail_url;?>" alt="" width="" height="" />
                            <div class="news-col">
                                <span><?php echo get_the_date('j F Y'); ?></span>
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                            </div>
                        <?php
                    }
                    /* Restore original Post Data */
                    wp_reset_postdata();
                } else {
                    // No posts found
                    echo 'No posts found';
                }
                ?>

            
        </div>
    </div><!--news section end-->