   <div class="padding-align change-header-color row_padding_top row_padding_bottom">

        <div class="inner">
            <div class="line-with-text">
                <?php
                    // Get the current page's ancestors
                    $ancestors = get_ancestors(get_the_ID(), 'page');

                    // Reverse the array to start with the top-level parent
                    $ancestors = array_reverse($ancestors);

                    // Output the breadcrumb links
                    echo '<div class="txt">';
					echo '<a href="' . get_home_url() . '">' . esc_html('Wirefox') . '</a> / ';
                    foreach ($ancestors as $ancestor_id) {
                        $ancestor_title = get_the_title($ancestor_id);
                        $ancestor_url = get_permalink($ancestor_id);
                        echo '<a href="' . esc_url($ancestor_url) . '">' . esc_html($ancestor_title) . '</a><span> /</span>';
                    }
                    echo '<a href="' . esc_url(get_permalink()) . '">' . esc_html(get_the_title()) . '</a>';
                    echo '</div>';
                    ?>

            </div>
            <h1 class="mb-0"><em class="has-mask-fill"><?php the_field('section_title');?></em><br><span class="has-mask-fill"><?php the_field('section_weighted_title');?></span></h1>
        </div>
    </div>