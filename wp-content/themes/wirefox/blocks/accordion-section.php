 <div id="our-service" class="padding-align">
        <div class="content-row row_padding_top row_padding_bottom dark-section change-header-color has-clip-path">
            <div class="pinned-section padding-align">
                <div class="pinned-element left">
                    <h3><em class="has-mask-fill"><?php the_field('title');?></em><br><span class="has-mask-fill"><?php the_field('weighted_title');?></span></h3>
                </div>
                <div class="scrolling-element right">
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
    </div><!--our service end-->