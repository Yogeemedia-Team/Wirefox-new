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
                        <h2><em>
                        <?php the_title(); ?>
                        </em></h2>
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
            <div class="sh_icons row_padding_top row_padding_bottom row_padding_right">
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
                    <div class="col-lg-6">
                        <div class="post_author mb-5 text-left">
                            <span><img decoding="async" class="auth_img" src="http://localhost/Wirefox-new/wp-content/themes/wirefox/assets/images/user_icon.jpeg" alt=""></span>
                            <span> <a class="auth_name" href="">adm-wirefox</a></span>
                            <span class="">
                                <div class="line"></div>
                            </span>
                            <span class="text-light">1616-0808-2121
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="post_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Wirefox-Digital-Agency-Birmingham.jpg" alt="Image Title">
                                </div>
                            </div>
                            <div class="col-lg-8 my-auto">
                                <div class="w-75">
                                    <h5 class="mb-0"><a href="https://wirefox.co.uk/ecommerce-marketing-strategies-to-increase-sales/" class="link">Ecommerce Marketing Strategies to Increase sales</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="post_author mb-5 text-left">
                            <span><img decoding="async" class="auth_img" src="http://localhost/Wirefox-new/wp-content/themes/wirefox/assets/images/user_icon.jpeg" alt=""></span>
                            <span> <a class="auth_name" href="">adm-wirefox</a></span>
                            <span class="">
                                <div class="line"></div>
                            </span>
                            <span class="text-light">1616-0808-2121
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="post_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Wirefox-Digital-Agency-Birmingham.jpg" alt="Image Title">
                                </div>
                            </div>
                            <div class="col-lg-8 my-auto">
                                <div class="w-75">
                                    <h5 class="mb-0"><a href="https://wirefox.co.uk/ecommerce-marketing-strategies-to-increase-sales/" class="link">Ecommerce Marketing Strategies to Increase sales</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- feature post section -->

        <?php
        get_footer();
        ?>