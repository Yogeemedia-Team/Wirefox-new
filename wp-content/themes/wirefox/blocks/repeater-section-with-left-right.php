<?php
if( get_field('reapeting_block_start_left') ) { ?>

<?php if( have_rows('reapeting_block') ): 
    $i=1;
    $$div_class = '';
    ?>

    <?php while( have_rows('reapeting_block') ): the_row(); 
        $image = get_sub_field('block_image');
        
        if($i % 2 == 0) {?>
        <div class="row comn_block row_padding_top">
        <div class="col-md-6 order-md-2">
            <div class="py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0">
                <h3 class="num"><?php echo '0'.$i; ?></h3>
                <h5 class="mini-h"><?php the_sub_field('sub_title'); ?></h5>
                <h4 class="title"><?php the_sub_field('title'); ?></h4>
                <?php the_sub_field('content'); ?>
                <div class="button-wrap right large-btn has-animation animated" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon-wrap parallax-wrap" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        <div class="button-icon parallax-element" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <i class="arrow-icon-down"></i>
                        </div>
                    </div>
                    <a target="_blank" href="<?php the_sub_field('button_link'); ?>">
                        <div class="button-text sticky right">
                            <span data-hover="Explore Our SEO Services"><?php the_sub_field('button_text'); ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 order-md-1">
            <div class="overflow-hidden">
                <img class="fifty-fifty-img" src="<?php echo $image['url']; ?>" alt="" width="" height="" />
            </div>  
        </div>

</div>
        <?php }else{ ?>
<div class="row comn_block row_padding_top row_padding_bottom">
        <div class="col-md-6">
            <div class="py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0">
                <h3 class="num"><?php echo '0'.$i; ?></h3>
                <h5 class="mini-h"><?php the_sub_field('sub_title'); ?></h5>
                <h4 class="title"><?php the_sub_field('title'); ?></h4>
                <?php the_sub_field('content'); ?>
                <div class="button-wrap right large-btn has-animation animated" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon-wrap parallax-wrap" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        <div class="button-icon parallax-element" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <i class="arrow-icon-down"></i>
                        </div>
                    </div>
                    <a target="_blank" href="<?php the_sub_field('button_link'); ?>">
                        <div class="button-text sticky right">
                            <span data-hover="Explore Our SEO Services"><?php the_sub_field('button_text'); ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="overflow-hidden">
                <img class="fifty-fifty-img" src="<?php echo $image['url']; ?>" alt="" width="" height="" />
            </div>
        </div>

</div>

        <?php } ?>
            


    <?php 
$i++;
endwhile; ?>

<?php endif; ?>
       <!-- repeting block col order changed -->


 


<?php }else{ ?>

 <?php if( have_rows('reapeting_block') ): 
    $i=1;
    $div_class = '';
    ?>

    <?php while( have_rows('reapeting_block') ): the_row(); 
        $image = get_sub_field('block_image');
        
        if($i % 2 == 0) {?>   
 <div class="row comn_block row_padding_top">

        <div class="col-md-6">
            <div class="py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0">
                <h3 class="num"><?php echo '0'.$i; ?></h3>
                <h5 class="mini-h"><?php the_sub_field('sub_title'); ?></h5>
                <h4 class="title"><?php the_sub_field('title'); ?></h4>
                <?php the_sub_field('content'); ?>
                <div class="button-wrap right large-btn has-animation animated" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon-wrap parallax-wrap" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        <div class="button-icon parallax-element" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <i class="arrow-icon-down"></i>
                        </div>
                    </div>
                    <a target="_blank" href="<?php the_sub_field('button_link'); ?>">
                        <div class="button-text sticky right">
                            <span data-hover="Explore Our SEO Services"><?php the_sub_field('button_text'); ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="overflow-hidden">
                <img class="fifty-fifty-img" src="<?php echo $image['url']; ?>" alt="" width="" height="" />
            </div>
        </div>

</div>
<?php }else{ ?>
    <!-- repeting block col order changed -->
<div class="row comn_block row_padding_top row_padding_bottom">

        <div class="col-md-6 order-md-2">
            <div class="py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0">
                <h3 class="num"><?php echo '0'.$i; ?></h3>
                <h5 class="mini-h"><?php the_sub_field('sub_title'); ?></h5>
                <h4 class="title"><?php the_sub_field('title'); ?></h4>
                <?php the_sub_field('content'); ?>
                <div class="button-wrap right large-btn has-animation animated" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="icon-wrap parallax-wrap" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                        <div class="button-icon parallax-element" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">
                            <i class="arrow-icon-down"></i>
                        </div>
                    </div>
                    <a target="_blank" href="<?php the_sub_field('button_link'); ?>">
                        <div class="button-text sticky right">
                            <span data-hover="Explore Our SEO Services"><?php the_sub_field('button_text'); ?></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-6 order-md-1">
            <div class="overflow-hidden">
                <img class="fifty-fifty-img" src="<?php echo $image['url']; ?>" alt="" width="" height="" />
            </div>  
        </div>

</div>
<?php } ?>
            


    <?php 
$i++;
endwhile; ?>

<?php endif; ?>
<?php } ?>
