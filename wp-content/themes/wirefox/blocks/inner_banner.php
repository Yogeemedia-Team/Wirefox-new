<div class="row padding-align main_banner">
        <div class="col-md-7 my-auto">
            <div class="py-5 p-md-0 pe-md-5 mt-4 mt-md-0">
                <h1 class="title"><span><?php the_field('main_title');?></span> <?php the_field('main_title_weight_text');?></h1>
                <p><?php the_field('banner_paragrph');?></p>
<?php if( get_field('button_text') ): ?>
    <div class="button-wrap right large-btn has-animation animated" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon-wrap parallax-wrap" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        <div class="button-icon parallax-element" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <i class="arrow-icon-down"></i>
                        </div>
                    </div>
                    <a target="_blank" href="<?php the_sub_field('button_link'); ?>">
                        <div class="button-text sticky right">
                            <span data-hover="<?php the_sub_field('button_text'); ?>"><?php the_sub_field('button_text'); ?></span>
                        </div>
                    </a>
                </div>
<?php endif; ?>
                

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