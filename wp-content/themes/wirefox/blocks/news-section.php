<div class="news_list tabs_sec content-row row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color">

    <!-- tabs section -->
    <ul class="nav" role="tablist" id="myBtnContainer">
        <li class="nav-item" role="presentation">
            <a class="nav-link active link" onclick="filterSelection('all')">ALL</a>
        </li>
        <?php
        $args = array(
            'orderby' => 'name',
        );

        $custom_terms = get_terms('category');

        $num = 1;
        foreach ($custom_terms as $custom_term) {
            $block_class = (count($custom_terms) == $num) ? 'last-child' : '';
            ?>
            <li class="nav-item" role="presentation">
                <a class="nav-link link" onclick="filterSelection('<?php echo $custom_term->slug; ?>')"><?php echo $custom_term->name; ?></a>
            </li>
            <?php
            $num++;
        }
        ?>
    </ul>

    <div class="tab-content pt-5" id="tab-content">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $projects = new WP_Query(array(
            'post_type'      => 'post',
            'posts_per_page' => 10, // Number of posts per page
            'order'          => 'DESC',
            'orderby'        => 'date',
            'paged'          => $paged,
        ));

        if ($projects->have_posts()) :
            while ($projects->have_posts()) : $projects->the_post();
                $postid = get_the_ID();
                $featured_image_url = wp_get_attachment_url(get_post_thumbnail_id($postid));

                $terms = get_the_terms($postid, 'category');
                if ($terms && !is_wp_error($terms)) {
                    $term_slug = reset($terms)->slug;
                } else {
                    $term_slug = 'uncategorized'; // Set a default category if post has none
                }
                ?>
                <div class="tab-pane <?php echo $term_slug; ?>">
                    <div class="single-news position-relative">
                        <div class="row">
                            <div class="col-md-10">
                                <a href="<?php echo get_permalink() ?>">
                                    <div class="animated-img">
                                        <img src="<?php echo $featured_image_url; ?>" alt="" width="" height="" />
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="text-block">
                            <div class="mt-3 mb-5">
                            <a class="link" href="<?php echo get_permalink() ?>">
                                <h3 class="title mb-0"><?php echo get_the_title(); ?></h3>
                            </a>
                            </div>
                            <div class="post_author text-left">
                                <span><img class="auth_img" src="http://localhost/Wirefox-new/wp-content/themes/wirefox/assets/images/user_icon.jpeg" alt=""></span>
                                <span> <a class="auth_name link" href=""><?php echo get_the_author(); ?></a></span>
                                <span class="">
                                    <div class="line"></div>
                                </span>
                            </div>
                            <div class="date_data text-center">
                                <p class="mb-0"><?php echo get_the_date('j F Y'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>

            <!-- Pagination links -->
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total'     => $projects->max_num_pages,
                    'current'   => max(1, $paged),
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                ));
                ?>
            </div>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</div>
