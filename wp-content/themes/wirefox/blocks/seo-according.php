<?php 

                // check for rows (parent repeater)
                if( have_rows('seo_accordion') ): ?>

<?php 

                    // loop through rows (parent repeater)
                    while( have_rows('seo_accordion') ): the_row(); ?>
<div id="our-service">
    <div class="content-row row_padding_left row_padding_right row_padding_bottom dark-section change-header-color has-clip-path">
        <div class="pinned-section">

            <div class="scrolling-element right">
                <div class="seo_according_title">
                    <h3><span class="has-mask-fill"><?php the_sub_field('weighted_title');?></span></h3>
                </div>
                <dl class="accordion has-animation">
                    <?php if( have_rows('accordion_reapter') ): ?>

                    <?php while( have_rows('accordion_reapter') ): the_row();?>
                    <dt>
                        <span class="link">
                            <div><?php the_sub_field('accordion_title'); ?></div>
                        </span>
                        <div class="acc-icon-wrap parallax-wrap">
                            <div class="acc-button-icon parallax-element">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    </dt>
                    <dd class="accordion-content"><?php the_sub_field('accordion_content'); ?></dd>
                    <?php endwhile; ?>

                    <?php endif; ?>

                </dl>
            </div>
        </div>
    </div>
</div>
<!--our service end-->
<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>

<?php endif;