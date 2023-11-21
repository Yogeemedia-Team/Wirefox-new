<div class="row padding-align main_banner">
        <div class="col-md-7 my-auto">
            <div class="py-5 p-md-0 pe-md-5 mt-4 mt-md-0">
                <h1 class="title"><span><?php the_field('main_title');?></span> <?php the_field('main_title_weight_text');?></h1>
                <p><?php the_field('banner_paragrph');?></p>
            </div>
        </div>
        
        <div class="col-md-5">
            <?php 
                $image = get_field('banner_image');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
           
        </div>
</div>