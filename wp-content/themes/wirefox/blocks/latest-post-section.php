<div class="content-row post_sec row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color text-align-center">
    <div class="title-text">
        <div class="title-text-styles">
            <div class="title-text-caption parallax-onscroll">
                <div class="inner">
                    <h1 class="text-uppercase"><span class="has-mask-fill"><?php the_field('section_title');?></span></h1>
                    <p><?php the_field('section_content');?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-10">
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
                        $author_id = get_the_author_meta('ID');
                        $author_name = get_the_author_meta('display_name');
                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        ?>
                        <img src="<?php echo $thumbnail_url;?>" alt="" width="" height="" />
                             <div class="post_card">
                                <div class="post_details">
                                    <div class="post_date">
                                        <p class="tect-white mb-0"><?php echo get_the_date('j F Y'); ?></p>
                                    </div>
                                    <p class="title"><a class="post_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    <div class="post_author text-left">
                                        <span><img class="auth_img" src="<?php echo get_template_directory_uri(); ?>/assets/images/user_icon.jpeg" alt=""></span>
                                        <span> <a class="auth_name" href=""><?php echo esc_html($author_name); ?></a></span>
                                    </div>
                                </div>
                                <div class="overflow-hidden position-relative">
                                <img class="post_img" src="<?php echo $thumbnail_url;?>" alt="">
                                </div>
                                
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
    </div>
</div>
 