<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wirefox
 */
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row_padding_top row_padding_bottom row_padding_left row_padding_right">
    <div class="row main_banner change-header-color ">
        <div class="col-md-7 my-auto">
            <div class="py-5 p-md-0 pe-md-5 mt-4 mt-md-0">
                <h4><?php the_title(); ?></h4>
            </div>
        </div>

        <div class="col-md-5">
            <div class="animated-img">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" />
            </div>
        </div>
    </div>
</div>
<div class="news_cont">
    <div class="row">
        <div class="col-md-10">
            <?php the_content() ?>
        </div>


        <?php endwhile;
    else : ?>
        <p><?php _e('Sorry, no records matched your criteria.'); ?></p>
        <?php endif; ?>

        <div class="col-md-2">
            <!-- share icons -->
            <div class="sh_icons row_padding_top row_padding_bottom">
                <ul class="m-0">
                    <li>
                        <a href="">
                            <span class="icon_box">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon_box">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon_box">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon_box">
                                <i class="fa-brands fa-facebook-messenger"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon_box">
                                <i class="fa-brands fa-whatsapp"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon_box">
                                <i class="fa-regular fa-envelope"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon_box">
                                <i class="fa-brands fa-reddit-alien"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- feature post section -->
<div class="row_padding_top row_padding_bottom row_padding_left row_padding_right">
    <div class="posts_sec">
        <h3 class="mb-5">Further Reading</h3>
        <div class="row">
            <?php
    $args = array(
    'post_type'      => 'post', // Change this to the post type you're working with
    'orderby'        => 'rand',
    'posts_per_page' => 2,
);

$random_posts = get_posts($args);

foreach ($random_posts as $post) {
    // Your code to display or manipulate each post
    setup_postdata($post); 
    $featured_image_url = wp_get_attachment_url(get_post_thumbnail_id($postid));
    ?>

            <div class="col-lg-6">
                <div class="post_author mb-4 text-left">
                    <span><img decoding="async" class="auth_img"
                            src="http://localhost/Wirefox-new/wp-content/themes/wirefox/assets/images/user_icon.jpeg"
                            alt=""></span>
                    <span> <a class="auth_name" href=""><?php echo get_the_author(); ?></a></span>
                    <span class="">
                        <div class="line"></div>
                    </span>
                    <span class="text-light"><?php echo get_the_date('j F Y'); ?>
                    </span>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="post_img">
                            <img src="<?php echo $featured_image_url; ?>"
                                alt="Image Title">
                        </div>
                    </div>
                    <div class="col-lg-8 my-auto">
                        <div class="w-75">
                            <h5 class="mb-0"><a
                                    href="https://wirefox.co.uk/ecommerce-marketing-strategies-to-increase-sales/"
                                    class="link"><?php get_the_title();?></a></h5>
                            <i class="fa-solid fa-2x fa-plus"></i>
                        </div>
                    </div>
                </div>
            </div>
            <?php

}

wp_reset_postdata();
      ?>


        </div>
    </div>
</div>
<!-- feature post section -->

<?php
        get_footer();
        ?>