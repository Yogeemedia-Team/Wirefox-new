<div class="row">
        <div class="col-md-6">
            <div class="py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0">
                <h5>
                    <?php the_field('section_title');?>
                </h5>
                <p>
                    <?php the_field('section_content');?>
                </p>
                <div class="small-text-col align-left">
                    <?php the_field('sub_section_left');?>
                </div>
                <div class="small-text-col align-right">
                    <?php the_field('sub_section_right');?>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0">
            <div class="overflow-hidden">
                <?php 
                $image = get_field('section_block_image');
                if( !empty( $image ) ): ?>
                    <img class="fifty-fifty-img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                
            </div>
        </div>
    </div>