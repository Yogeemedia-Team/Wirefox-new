<div class="content-row full has-clip-path row_padding_left row_padding_right row_padding_top row_padding_bottom dark-section change-header-color text-align-center">
<div class="title-text">
    <div class="title-text-styles">
        <div class="title-text-caption parallax-onscroll">
            <div class="inner text-right">
                <h1 class="text-uppercase"><em class="has-mask-fill"><?php the_field('section_title');?></em><br><span class="has-mask-fill"><?php the_field('section_weighted_title');?></span></h1>
                <p><?php the_field('section_sub_title');?></p>
            </div>
        </div>
    </div>
</div>
    <!-- Clients Table -->
    <ul class="clients-table">
        <?php if( have_rows('brands_logo') ): ?>
            
            <?php while( have_rows('brands_logo') ): the_row(); 
                $image = get_sub_field('image');
                ?>
                <li class="link">
                        <div class="my-auto">
                            <a target="_blank" href="<?php the_sub_field('link'); ?>"><img src="<?php echo $image['url']; ?>" alt="client"></a>
                            <div class="overlay"></div>
                        </div>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
    <!--/Clients Table -->
</div>