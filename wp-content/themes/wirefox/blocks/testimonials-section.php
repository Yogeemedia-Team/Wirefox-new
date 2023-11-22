<div class="dark-section change-header-color row_padding_top row_padding_bottom">
    <div class="title-text">
        <div class="title-text-styles">
            <div class="title-text-caption content-full-width parallax-onscroll">
                <div class="inner">
                    <div class="line-with-text">
                        <div class="ln"></div>
                        <div class="txt"><?php the_field('section_sub_title');?></div>
                    </div>
                    <h1 class="text-uppercase"><em class="has-mask-fill"><?php the_field('section_title');?></em><br><span class="has-mask-fill"><?php the_field('section_weighted_title');?></span></h1>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="fifty-container">
        <div class="fifty-div">
            <div class="row testimonials-section">
                <?php if( have_rows('testimonials_image') ): ?>
                    <?php while( have_rows('testimonials_image') ): the_row(); 
                        $image = get_sub_field('image');
                        ?>
                        <div class="col-md-6">
                            <div class="testi-img m-3">
                                <a href="<?php the_sub_field('link'); ?>">
                                    <img src="<?php echo $image['url']; ?>" alt="wirefox">
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>