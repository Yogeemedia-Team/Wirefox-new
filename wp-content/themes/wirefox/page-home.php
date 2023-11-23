<?php
/* 
Template Name: Home Page 
*/
get_header();
?>


<!-- Don't Remove this code -->

<style>
    #section-2-15 {
        text-align: left;
        position: relative;
        height: 1450px;

    }

    #section-2-15 {
        display: block;
        margin-bottom: 100px;
    }

    .navWrap {
        position: relative;
    }

    .ct-section {
        width: 100%;
        background-size: cover;
        background-repeat: repeat;
    }

    #section-2-15>.ct-section-inner-wrap {
        max-width: 1600px;
        padding-top: 0;
        padding-right: 75px;
        padding-bottom: 0;
        padding-left: 75px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .navWrap .ct-section-inner-wrap {
        padding-top: 0;
    }

    .ct-section>.ct-section-inner-wrap {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .ct-section-inner-wrap {
        padding-top: 75px;
        padding-right: 20px;
        padding-bottom: 75px;
        padding-left: 20px;
    }

    .ct-section-inner-wrap,
    .oxy-header-container {
        max-width: 1120px;
    }

    .ct-section-inner-wrap {
        margin-left: auto;
        margin-right: auto;
        height: 100%;
        min-height: inherit;
    }

    #image-7-15 {
        width: 700px;
        transition-delay: 0.2s;
        transition-duration: 1s;
        margin-top: -250px;
        position: absolute;
        z-index: 2;
        margin-left: auto;
        margin-right: auto;
    }

    .fadeInUp {
        animation: fadeInUp 2s ease backwards !important;
    }

    .main__image {
        z-index: 1;
        position: -webkit-sticky !important;
        position: sticky !important;
        top: 150px !important;
    }

    .main__image {}

    .fadeInUp {
        transition-delay: 0.6s;
    }

    .ct-image {
        max-width: 100%;
    }

    img {
        border-style: none;
    }

    #headline-498-15 {
        font-family: 'Poppins';
        color: #fff;
        font-size: 324px;
        font-weight: 600;
        line-height: .9;

        z-index: 0;
    }

    .fadeInUp {
        animation: fadeInUp 2s ease backwards !important;
    }

    .fadeInUp {
        transition-delay: 0.6s;
    }

    #headline-499-15 {
        font-family: 'Poppins';
        color: #fff;
        font-size: 220px;
        font-weight: 400;
        line-height: 0.9;
        transition-delay: 0.8s;
        transition-duration: 1s;
        z-index: 2;
    }

    .fadeInUp {
        animation: fadeInUp 2s ease backwards !important;
    }

    #headline-5-15 {
        font-family: 'Poppins';
        color: #fff;
        font-size: 220px;
        font-weight: 400;
        line-height: 0.9;
        transition-delay: 0.8s;
    }

    .fadeInUp {
        animation: fadeInUp 2s ease backwards !important;
    }

    #text_block-15-15 {
        color: #fff;
        font-size: 33px;
        font-weight: 400;
        text-align: center;
        margin-top: 10px;
        transition-delay: 1s;
    }

    .fadeInUp {
        animation: fadeInUp 2s ease backwards !important;
    }


    #intro.trans {
        background: transparent;
        opacity: 0
    }

    #div_block-57-30 {
        width: 700px;
        transition-delay: 0.2s;
        transition-duration: 1s;
        margin-bottom: -550px;
        position: absolute;
        z-index: 2;
        margin-left: auto;
        margin-right: auto;
        position: sticky !important;
        top: 150px !important;
        height: 100%;
    }

    #intro>div>div {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    #intro>div>div div {
        text-align: center
    }

    #intro .nomLong {
        width: 22.2vw;
        transform: translateY(100%);
        opacity: 0
    }

    @media (max-width: 1440px) {
        #intro .nomLong {
            width: 320px
        }
    }

    @media (max-width: 767px) {
        #intro .nomLong {
            width: 224px
        }
    }

    #intro .creative {
        width: 11.1vw;
        height: .9vw;
        margin: 1vw auto 0;
        overflow: visible;
        transform: translateY(100%);
        opacity: 0
    }

    @media (max-width: 1440px) {
        #intro .creative {
            width: 160px;
            height: 12px
        }
    }

    @media (max-width: 767px) {
        #intro .creative {
            width: 110px;
            height: 10px
        }
    }

    #intro .phrase {
        font: 300 normal 24px/1.5 "OggThin";
        font: 300 normal max(24px, 1.7vw)/1.5 "OggThin";
        text-align: center;
        width: 53vw;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%)
    }

    #intro .phrase.ok {
        opacity: 1
    }

    #intro .phrase span {
        opacity: 0;
        transform: translateY(100%);
        display: inline-block;
        white-space: nowrap
    }

    @media (max-width: 767px) {
        #intro .phrase {
            font-size: 14px;
            width: 75vw
        }
    }

    .home {
        /*overflow: hidden;
        position:sticky;*/
        top: 75px;
        width: 100%;
        height: 33vw;
        z-index: 1;
        margin-bottom: -280px;
    }

    .home #img1 {
        width: 33vw;
        height: 33vw;
        position: sticky;
        top: 50px;
        z-index: 1;
        right: 0;
        left: 0;
        margin-left: auto;
        margin-right: auto;
    }

    .home #img1 svg {
        width: 100%;
        height: 100%;
        position: absolute
    }

    .home #img1 svg image {
        position: relative;
        z-index: 1
    }

    @media (max-width: 767px) {
        .home #img1 {
            left: 0;
            width: 60.2%;
            height: 60.2vw;
            top: 16vh
        }
    }

    .home #img2 {
        position: sticky;
        top: 50px;
        z-index: 1;
        bottom: 0;
        left: 0;
        width: 25.4vw;
        height: 5.3vw
    }


    @media (max-width: 767px) {
        .home #img2 {
            width: 49.1vw;
            height: 11vw
        }
    }

    .home #img3 {
        width: 5.3vw;
        height: 25vw;
        position: sticky;
        top: 50px;
        z-index: 1;

        right: 20vw
    }

    @media (max-width: 767px) {
        .home #img3 {
            width: 20px;
            right: 0;
            bottom: auto;
            height: 23vh;
            top: 36vh
        }
    }

    .home .innerImgs {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden
    }

    .home .innerImgs div {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover !important
    }

    .home .innerImgs .cover {
        transform: translateY(100%);
        overflow: hidden
    }

    .home .innerImgs .cover.current {
        transform: translateY(0%)
    }

    .home .innerImgs .cover div {
        transform: scale(1.1, 1.1)
    }

    .home .distort {
        transition: .8s
    }

    .home .distort.zoom {
        transform: scale(1.03, 1.03)
    }

    .main__image {
        z-index: 1;
        position: -webkit-sticky !important;
        position: sticky !important;
        top: 150px !important;
    }
</style>

<section id="section-2-15" class=" ct-section navWrap">
    <div class="ct-section-inner-wrap">
        <main id="div_block-57-30" class="ct-div-block sticky-main sticky-image ">
            <section id="section-51-30" class=" ct-section">
                <div class="ct-section-inner-wrap">

                    <section id="section-1-30" class=" ct-section" data-scroll-section="" data-scroll-section-id="section1" style="transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); opacity: 1; pointer-events: all;" data-scroll-section-inview="">

                        <div class="ct-section-inner-wrap">
                            <div id="div_block-18-30" class="ct-div-block home">
                                <div id="main" class="ct-div-block is-inview" data-scroll-sticky="" data-scroll-target="#section-1-30">
                                    <div id="img1" class="ct-div-block" href="projets/hutchinson-touareg/index.html">
                                        <div id="code_block-4-30" class="ct-code-block innerImgs">
                                            <div class="cover" data-perma="projets/tilaguy/index.html" style="transform: translate(0px, -100%);">
                                                <div class="preload" data-url="img/1.jpg" style="transform: translate(0px, 90%) scale(1.3);">
                                                    <svg class="distort" width="100%" height="100%">
                                                        <filter id="distortionFilter0">
                                                            <feTurbulence type="turbulence" baseFrequency="0.009 0.01" numOctaves="5" seed="2" stitchTiles="stitch" x="0%" y="0%" width="100%" height="100%" result="noise"></feTurbulence>
                                                            <feDisplacementMap in="SourceGraphic" in2="noise" scale="0" xChannelSelector="R" yChannelSelector="B" x="0%" y="0%" width="100%" height="100%" filterUnits="userSpaceOnUse"></feDisplacementMap>
                                                        </filter>
                                                        <g filter="url(#distortionFilter0)">
                                                            <image class="distort__img" xlink:href="https://wire.sendix.co/wp-content/images/1.jpg" x="0" y="0" height="100%" width="100%" preserveAspectRatio="xMidYMid slice"></image>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>

                                            <div class="cover current" data-perma="projets/hutchinson-touareg/index.html" style="transform: translate3d(0px, -98.0693%, 0px);">
                                                <div style="transform: translate3d(0px, 88.2624%, 0px) scale(1.2961, 1.29614);">
                                                    <svg class="distort" width="100%" height="100%">
                                                        <filter id="distortionFilter1">
                                                            <feTurbulence type="turbulence" baseFrequency="0.009 0.01" numOctaves="5" seed="2" stitchTiles="stitch" x="0%" y="0%" width="100%" height="100%" result="noise"></feTurbulence>
                                                            <feDisplacementMap in="SourceGraphic" in2="noise" scale="98.0692749023438" xChannelSelector="R" yChannelSelector="B" x="0%" y="0%" width="100%" height="100%" filterUnits="userSpaceOnUse"></feDisplacementMap>
                                                        </filter>
                                                        <g filter="url(#distortionFilter1)">
                                                            <image class="distort__img" xlink:href="https://wire.sendix.co/wp-content/images/2.jpg" x="0" y="0" height="100%" width="100%" preserveAspectRatio="xMidYMid slice"></image>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>

                                            <div class="cover" data-perma="projets/chanel-martian-project/index.html" style="transform: translate3d(0px, 1.9307%, 0px);">
                                                <div style="transform: translate3d(0px, -1.7377%, 0px) scale(1.1019, 1.10193);">
                                                    <svg class="distort" width="100%" height="100%">
                                                        <filter id="distortionFilter2">
                                                            <feTurbulence type="turbulence" baseFrequency="0.009 0.01" numOctaves="5" seed="2" stitchTiles="stitch" x="0%" y="0%" width="100%" height="100%" result="noise"></feTurbulence>
                                                            <feDisplacementMap in="SourceGraphic" in2="noise" scale="1.93072402477264" xChannelSelector="R" yChannelSelector="B" x="0%" y="0%" width="100%" height="100%" filterUnits="userSpaceOnUse"></feDisplacementMap>
                                                        </filter>
                                                        <g filter="url(#distortionFilter2)">
                                                            <image class="distort__img" xlink:href="https://wire.sendix.co/wp-content/images/3.jpg" x="0" y="0" height="100%" width="100%" preserveAspectRatio="xMidYMid slice"></image>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
        <!-- <img id="image-7-15" alt="wirefox" src="https://yogeetech.us/wp-content/uploads/2023/10/Web-Design-Birmingham.webp" class="pinned-section ct-image fadeInUp main__image" srcset="https://yogeetech.us/wp-content/uploads/2023/10/Web-Design-Birmingham.webp 1000w, https://yogeetech.us/wp-content/uploads/2023/10/Web-Design-Birmingham-300x296.webp 300w, https://yogeetech.us/wp-content/uploads/2023/10/Web-Design-Birmingham-768x759.webp 768w" sizes="(max-width: 1000px) 100vw, 1000px"> -->

        <h1 id="headline-498-15" class="ct-headline mainHeding fadeInUp" style="z-index: 1;padding-top: 280px;">DIGITAL</h1>
        <h2 id="headline-499-15" class="ct-headline fadeInUp" style="z-index: 2;">MARKETING</h2>
        <h2 id="headline-5-15" class="ct-headline fadeInUp" style="z-index: 1;">AGENCY</h2>
        <div id="text_block-15-15" class="ct-text-block fadeInUp " style="margin-bottom: 280px;">Experts in Website Design &amp; SEO Based in Birmingham</div>



    </div>
</section>
<!-- Row COMMENTED BY THARAK TEMP 
<div class="content-row dark-section fadeout-element">

    <div class="clipped-image-wrapper">

        <div class="clipped-image-pin">
            <div class="clipped-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/00hero.jpg" alt="Image Title">
                <div class="clipped-image-gradient"></div>
            </div>
        </div>

        <div class="clipped-image-content text-align-center content-full-width">
            <h2 class="has-mask-fill">Stand out from the crowd and make a statement with
                our sleek and stylish portfolio template that speaks volumes about your
                creativity.</h2>
            <hr>
        </div>

    </div>



    <div class="one_fourth">
        <p class="has-mask-fill no-margins">2023</p>
    </div>

    <div class="one_fourth">
        <p class="has-mask-fill no-margins">Portfolio Website</p>
    </div>

    <div class="one_half last">
        <p class="has-opacity bigger">Our template pages are a playground for
            creativity, where we leverage an assortment of shortcodes to build
            captivating content. This enables us to demonstrate the limitless potential
            and showcase the impressive features of our template.</p>



        <div class="button-wrap right button-link large-btn has-animation">
            <div class="icon-wrap parallax-wrap">
                <div class="button-icon parallax-element">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            <a target="_blank" href="https://themeforest.net/user/clapat/portfolio">
                <div class="button-text sticky right">
                    <span data-hover="Learn More">Learn More</span>
                </div>
            </a>
        </div>

    </div>

</div>
COMMENTED BY THARAK TEMP
Row -->

<!-- Project Slider -->
<!-- <div class="content-row light-section full">
    <div class="clapat-slider-wrapper showcase-carousel preview-mode-enabled">
        <div class="clapat-slider">

            <div class="clapat-slider-viewport">

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project01.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/01hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>The</em> Handbag</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project02.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/02hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>Woolen</em> Craft</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project03.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/03hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>Urban</em> Edge</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item change-header" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project04.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/04hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                        <div class="hero-video-wrapper">
                                            <video loop muted playsinline class="bgvid">
                                                <source src="<?php echo get_template_directory_uri(); ?>/assets/images/04hero.mp4" type="video/mp4">
                                            </video>
                                        </div>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/04hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>The</em> Camarades</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project05.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/05hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>Storm</em> Guard</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project06.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/06hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>Heritage</em> Car Rides</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project07.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/07hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>Serene</em> Sheets</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-inner" data-centerLine="VIEW">
                        <div class="slide-moving">
                            <div class="trigger-item" data-centerLine="OPEN">
                                <div class="img-mask">
                                    <a class="slide-link" data-type="page-transition" href="project08.html"></a>
                                    <div class="section-image  trigger-item-link">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/08hero.jpg" class="item-image grid__item-img" alt="wirefox">
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/08hero.jpg" class="grid__item-img grid__item-img--large" alt="wirefox">
                                </div>
                            </div>
                            <div class="slide-caption">
                                <div class="slide-title primary-font-title"><span><em>Rustic</em> Wonders</span></div>
                                <div class="slide-subtitle"><span>February 2023</span> <span>Commercial</span> <span>Development &amp; Motion</span></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="carousel-zoom-wrapper"></div>

        <div class="carousel-thumbs-wrapper"></div>

        <div class="carousel-close-thumbs"></div>

        <div class="carousel-nav-wrapper">
            <div class="carousel-prev cp-button-prev">
                <div class="icon-wrap parallax-wrap">
                    <div class="button-icon parallax-element">
                        <i class="fa-solid fa-minus"></i>
                    </div>
                </div>
            </div>
            <div class="carousel-next cp-button-next">
                <div class="icon-wrap parallax-wrap">
                    <div class="button-icon parallax-element">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="clapat-pagination fadeout-element"></div>

    </div>
</div> -->


<!-- COMMENTED BY THARAK TEMP
<div class="content-row light-section full">

    <div class="panels" data-widthratio="1">

        <div class="panels-container">

            <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Car-Export-Web-Design.jpg">
            </div>

            <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Web-Design-Perspective-Opticians.jpg">
            </div>

            <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Web-Design-Pizza-Equipment.jpg">
            </div>

            <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Web-Design-Wholesale-Meats-Coventry.jpg">
            </div>
            <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Ultimate-Siri-Lanka.jpg">
            </div>
            <div class="panel" data-color="#000" data-firstline="Read" data-secondline="Story">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/projects/Barretts-Sausage.jpg">
            </div>

        </div>

    </div>

</div>

COMMENTED BY THARAK TEMP -->


<!-- Company Brief -->
<div class="content-row row_padding_top row_padding_left row_padding_right row_padding_bottom dark-section change-header-color">

    <h4><span class="has-span-indent">Web Design Agency / SEO birmingham / Digital Marketing / SEO Experts / Social Media Marketing

        </span> <br><span class="has-mask-fill">A leading web design company in Birmingham, who focus on delivering quality web design and digital marketing services in Birmingham and the West Midlands. Providing digital marketing services giving our clients impressive, functional and user-friendly websites that get found by customers.Our websites and apps don’t just look good, they perform, they convert. If you are looking to generate enquiries.</span></h4>

</div>
<!-- Company Brief -->

<!-- Services section -->

<div class="ser_sec content-row row_padding_top row_padding_left row_padding_right row_padding_bottom dark-section change-header-color has-clip-path">

    <div class="pinned-section">
        <div class="pinned-element left">
            <h3 class="text-uppercase"><em class="has-mask-fill">Our</em><br><span class="has-mask-fill">Services</span></h3>
        </div>

        <div class="scrolling-element right">
            <dl class="accordion bigger-acc has-animation">
                <dt>
                    <span class="link primary-font-title">
                        <div><em>WEB</em> DESIGN</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">We deliver high-performance websites that turn visitors into customers. From design to development, content writing and launch SEO.</dd>

                <dt>
                    <span class="link primary-font-title">
                        <div><em>SOCIAL</em> MEDIA MARKETING</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Affordable results-driven Social Media strategies across all platforms.</dd>

                <dt>
                    <span class="link primary-font-title">
                        <div><em>SEO</em></div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Experts in SEO, with a reliable track record using the latest industry knowledge & results-driven practices to help businesses.</dd>

                <dt>
                    <span class="link primary-font-title">
                        <div><em>ONLINE</em> REPUTATION MANAGEMENT</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Specialists in business and personal online reputation management.</dd>

                <dt>
                    <span class="link primary-font-title">
                        <div><em>OUTDOOR</em> ADVERTISING</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Specialists in business and personal online reputation management.</dd>

                <dt>
                    <span class="link primary-font-title">
                        <div><em>E-</em>COMMERCE</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">Outstanding Ecommerce visually engaging websites built with cutting-edge technology, generating high ROI.</dd>

                <dt>
                    <span class="link primary-font-title">
                        <div><em>GOOGLE</em> TRUSTED PHOTOGRAPHER</div>
                    </span>
                    <div class="acc-icon-wrap parallax-wrap">
                        <div class="acc-button-icon parallax-element">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </div>
                </dt>
                <dd class="accordion-content">UK Google trusted photographer. Showcase your business premises with our 360 virtual tours.</dd>
            </dl>
        </div>
    </div>
</div>
<!--/Services section -->


<!-- Projects Slider -->
<div class="content-row full dark-section text-align-center row_padding_bottom change-header-color">
    <div class="title-text">
        <div class="title-text-styles">
            <div class="title-text-caption content-full-width parallax-onscroll">
                <div class="inner text-right">
                    <h1><em class="has-mask-fill">SELECTED</em><br><span class="has-mask-fill">PROJECT</span></h1>
                    <p>Recent web design projects Creating beautiful <br class="destroy"> and engaging websites that get seen</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clapat-slider-wrapper content-slider looped-carousel has-animation disabled-slider-dots autocenter light-cursor">
        <div class="clapat-slider">
            <div id="clapat" class="clapat-slider-viewport">
                <div class="clapat-slide">
                    <div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.jpg" alt="Image Title"></div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.jpg" alt="Image Title"></div>
                </div>

                <div class="clapat-slide">
                    <div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.jpg" alt="Image Title"></div>
                </div>
                <div class="clapat-slide">
                    <div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.jpg" alt="Image Title"></div>
                </div>
                <div class="clapat-slide">
                    <div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.jpg" alt="Image Title"></div>
                </div>
                <div class="clapat-slide">
                    <div class="slide-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/service.jpg" alt="Image Title"></div>
                </div>
            </div>
        </div>

        <div class="clapat-controls">
            <div class="clapat-button-next slider-button-next"></div>
            <div class="clapat-button-prev slider-button-prev"></div>
            <div class="clapat-pagination"></div>
        </div>
    </div>
</div>
<!--    Projects Slider -->

<!-- BESPOKE -->
<div class="dark-section change-header-color">
    <div class="title-text">
        <div class="title-text-styles">
            <div class="title-text-caption content-full-width parallax-onscroll">
                <div class="inner">
                    <div class="line-with-text">
                        <div class="ln"></div>
                        <div class="txt">Insightful Design</div>
                    </div>
                    <h1 class=""><em class="has-mask-fill">BESPOKE</em><br><span class="has-mask-fill">SOLUTION</span></h1>
                    <p>DELIVERING DIGITAL EXPERIENCES: We have been implementing Web Design, SEO and Digital Marketing <br class="destroy"> services, for over 20+ years and we take your business needs from ideas to reality</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BESPOKE -->

<!-- 01 -->
<div class="fifty-container dark-section change-header-color">
    <div class="fifty-div">
        <div class="row row_padding_bottom light-section">
            <div class="col-md-6">
                <figure class="has-animation has-cover" data-delay="100">
                    <a href="#" class="image-link"><img class="fifty-fifty-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Experts-In-Web-Design.jpg" alt="Image Title"></a>
                    <!-- 					<figcaption>Image Caption Here</figcaption> -->
                </figure>
            </div>
            <div class="col-md-6">
                <figure class="has-cover digit-text py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0" data-delay="200">
                    <h1 class="text-easing">01</h1>
                    <div class="mid-text">
                        <span class="mini-h">
                            <div><em>ECOMMERCE</em></div>
                        </span>
                        <div class="gap-24"></div>
                        <span class="second-h">
                            <div>Experts In User-Friendly Web Design</div>
                        </span>
                        <p class="paragraph-text">Creative Web Design
                            <br class="destroy">Web Development
                            <br class="destroy">WordPress Design
                            <br class="destroy">User Experience Design (UX)
                            <br class="destroy">User Interface Design (UI)
                            <br class="destroy">Responsive Web Design
                            <br class="destroy">Custom Web Design
                            <br class="destroy">Websites for Start-up Businesses
                            <br class="destroy">Our experienced interactive user designers will bring your ideas, goals and brand to life. The website layout will help to determine your customers’ impression of your business. The design will reflect your business and target future customers, and our designers will provide you with impactful design solutions that get noticed.
                        </p>
                        <div class="button-wrap right large-btn has-animation">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="arrow-icon-down"></i>
                                </div>
                            </div>
                            <a target="_blank" href="">
                                <div class="button-text sticky right"><span data-hover="Explore Our Web Design Services">Explore Our Web Design Services</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
<!-- 01 -->

<!-- 02 -->
<!-- fifty fifty Content -->
<div class="fifty-container dark-section change-header-color">
    <div class="fifty-div">
        <div class="row row_padding_bottom light-section">
            <div class="col-md-6 order-md-2">
                <figure class="has-animation has-cover" data-delay="100">
                    <a href="#" class="image-link"><img class="fifty-fifty-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Ecommerce-Web-Design.webp" alt="Image Title"></a>
                    <!-- 					<figcaption>Image Caption Here</figcaption> -->
                </figure>
            </div>
            <div class="col-md-6 order-md-1">
                <figure class="has-cover digit-text py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0" data-delay="200">
                    <h1 class="text-easing">02</h1>
                    <div class="mid-text">
                        <span class="mini-h">
                            <div><em>ECOMMERCE</em></div>
                        </span>
                        <div class="gap-24"></div>
                        <span class="second-h">
                            <div>Ecommerce Design & Development</div>
                        </span>
                        <p class="paragraph-text">eCommerce Design & Development
                            <br class="destroy">API Integrations
                            <br class="destroy">Secure ePayment Processing
                            <br class="destroy">Bespoke or open source ecommerce shops
                            <br class="destroy">Google shopping
                            <br class="destroy">Multi-Channel ecommerce
                            <br class="destroy">Inventory Management
                            <br class="destroy">We design and build successful e-Commerce websites that look fantastic, are easy to update, secure, and provide you with all the tools you need to manage products, pricing, customers, invoicing and much more. We can also help you optimise your website so that your site and its products appear in search engines such as Google bringing in more traffic, converting into sales.
                        </p>
                        <div class="button-wrap right large-btn has-animation">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="arrow-icon-down"></i>
                                </div>
                            </div>
                            <a target="_blank" href="">
                                <div class="button-text sticky right"><span data-hover="Explore Our Web Ecommerce Services">Explore Our Web Ecommerce Services</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </figure>
            </div>

        </div>
    </div>
</div>
<!-- 02 -->


<!-- 03 -->
<!-- fifty fifty Content -->
<div class="fifty-container dark-section change-header-color">
    <div class="fifty-div">
        <div class="row row_padding_bottom light-section">
            <div class="col-md-6">
                <figure class="has-animation has-cover" data-delay="100">
                    <a href="" class="image-link"><img class="fifty-fifty-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/Birmingham-SEO-Specialists.webp" alt="Image Title"></a>
                    <!-- 					<figcaption>Image Caption Here</figcaption> -->
                </figure>
            </div>
            <div class="col-md-6">
                <figure class="has-cover digit-text py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0" data-delay="200">
                    <h1 class="text-easing">03</h1>
                    <div class="mid-text">
                        <span class="mini-h">
                            <div><em>SEO EXPERT</em></div>
                        </span>
                        <div class="gap-24"></div>
                        <span class="second-h">
                            <div>Organic SEO Specialists</div>
                        </span>
                        <p class="paragraph-text">Birmingham SEO Consultants
                            <br class="destroy">Full technical site audits
                            <br class="destroy">Local SEO Services
                            <br class="destroy">ROI Driven SEO Services
                            <br class="destroy">Content Marketing
                            <br class="destroy">SEO for Start-Ups
                            <br class="destroy">International SEO Services
                            <br class="destroy">Be Visible in Search Engines
                            <br class="destroy">Why do you need SEO Services? It increases conversions which equates to an increase in sales. Over 60% of marketers say improving SEO and growing an organic presence is their top inbound marketing priority. We apply our knowledge and successful experience to employ tried and tested tactics that we know work quickly to boost web traffic, optimise conversions and increase sales. Because our experience tells us precisely what works for local SEO in the West Midlands, our clients are able to save money and enjoy faster results.
                        </p>
                        <div class="button-wrap right large-btn has-animation">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="arrow-icon-down"></i>
                                </div>
                            </div>
                            <a target="_blank" href="">
                                <div class="button-text sticky right"><span data-hover="Explore Our SEO Services">Explore Our SEO Services</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</div>
<!-- 03 -->


<!-- 04 -->
<!-- fifty fifty Content -->
<div class="fifty-container dark-section change-header-color">
    <div class="fifty-div">
        <div class="row row_padding_bottom light-section">
            <div class="col-md-6 order-md-2">
                <figure class="has-animation has-cover" data-delay="100">
                    <a href="" class="image-link"><img class="fifty-fifty-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/social-media-marketing-birmingham.webp" alt="Image Title"></a>
                    <!-- 					<figcaption>Image Caption Here</figcaption> -->
                </figure>
            </div>
            <div class="col-md-6 order-md-1">
                <figure class="has-cover digit-text py-5 px-4 p-md-0 px-md-5 mt-4 mt-md-0" data-delay="200">
                    <h1 class="text-easing">04</h1>
                    <div class="mid-text">
                        <span class="mini-h">
                            <div><em>DIGITAL MARKETING</em></div>
                        </span>
                        <div class="gap-24"></div>
                        <span class="second-h">
                            <div>Effective & Bespoke Digital Marketing Solutions</div>
                        </span>
                        <p class="paragraph-text">Social Media Consultants
                            <br class="destroy">Facebook advertising
                            <br class="destroy">Google Advertising
                            <br class="destroy">Email marketing
                            <br class="destroy">Social Integration
                            <br class="destroy">Website Promotion
                            <br class="destroy">Online Advertising
                            <br class="destroy">Sms Campaigns
                            <br class="destroy">Media Planning
                            <br class="destroy">Our campaigns and digital strategy have a proven track record of achieving great results, driving new leads and visitors to your website and help them convert. Our marketing team are skilled in creating digital campaigns across traditional advertising, online and social media. Digital marketing is reliant on compelling content, targeted messaging, and engaging campaigns. We will design and execute effective digital marketing campaigns that will increase your visibility and make sure the right people are finding your business.
                        </p>
                        <div class="button-wrap right large-btn has-animation">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <i class="arrow-icon-down"></i>
                                </div>
                            </div>
                            <a target="_blank" href="">
                                <div class="button-text sticky right"><span data-hover="Explore Our Social Media Marketing Services">Explore Our Social Media Marketing Services</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </figure>
            </div>

        </div>
    </div>
</div>
<!-- 04 -->

<!-- BIRMINGHAM -->
<div class="dark-section change-header-color">
    <div id="hero">
        <div id="hero-styles">
            <div id="hero-caption" class="content-full-width no-padding-bottom text-align-center subtitle-padding-left">
                <div class="inner">
                    <h1 class="hero-title caption-timeline"><span><em>BASED IN</em></span>
                        <span>BIRMINGHAM, UK</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/BIRMINGHAM -->

<!-- Birmingham Content -->

<!-- Timeline Section -->
<div class="content-row dark-section fadeout-element change-header-color">
    <div class="clipped-image-wrapper">
        <div class="clipped-image-pin">
            <div class="clipped-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Wirefox-Digital-Agency-Birmingham.jpg" alt="Image Title">
                <div class="clipped-image-gradient"></div>
            </div>
        </div>
        <div class="clipped-image-content text-align-center content-full-width ">
        </div>
    </div>
</div>
<div class="dark-section change-header-color">
    <div class="timeln px-100 text-center">
        <div class="tv_effect"></div>
        <div class="cont">
            <!-- <div class="hero-subtitle caption-timeline"><span>Why Choose Us?</span></div> -->
            <h2 class="has-mask-fill title-text">Wirefox's Approach</h2>
            <div class="hor-line w-25"></div>
            <p class="mt-5 mx-auto w-75">Whether you’re looking for a simple content managed website (CMS), complex corporate website or a fully functional eCommerce store,
                Wirefox can create professional digital solutions to meet your needs.</p>
            <div class="timeline mt-5">
                <div class="row">
                    <div class="col-sm-4 text-center p-0">
                        <p class="h4 mb-3">01</p>
                        <div class="point"></div>
                        <div class="line w-50 ms-auto"></div>
                        <div class="content py-4 px-5">
                            <p class="h4 mt-5">Cutting Edge Design</p>
                            <p class="mt-3 px-3">We strive to create high quality solutions that exceed the current industry standards.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center p-0">
                        <p class="h4 mb-3">02</p>
                        <div class="point"></div>
                        <div class="line"></div>
                        <div class="content py-4 px-5">
                            <p class="h4 mt-5">Excellent SEO Work
                            </p>
                            <p class="mt-3 px-3">Our SEO friendly websites will help you to soar to the top of search engine results pages.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center p-0">
                        <p class="h4 mb-3">03</p>
                        <div class="point"></div>
                        <div class="line w-50 me-auto"></div>
                        <div class="content py-4 px-5">
                            <p class="h4 mt-5">Cutting Edge Design</p>
                            <p class="mt-3">We don’t ditch you when our work is done. We’ll stick around and are happy to make enhancements and changes in the future.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Timeline Section -->

<!-- Services section -->
<div class="content-row full has-clip-path row_padding_top row_padding_bottom row_padding_left row_padding_right dark-section fadeout-element change-header-color change-header-color">

    <div class="list-rotator-wrapper">
        <div class="list-rotator-title has-mask-fill"></div>
        <div class="list-rotator-height">
            <div class="list-rotator-pin">
                <ul class="list-rotator">
                    <li><a href=""><em>Web Design &</em> Development</a></li>
                    <li><a href=""><em>Social Media</em> Marketing</a></li>
                    <li><a href=""><em>Outdoor</em> Advertising</a></li>
                    <li><a href=""><em>Search Engine</em> Optimization</a></li>
                    <li><a href=""><em>Branding & Print</em> Work</a></li>
                    <li><a href=""><em>Web App</em> Development</a></li>
                    <li><a href=""><em>Google Trusted</em> Photographer</a></li>
                    <li><a href=""><em>Online Reputation</em> Management</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--/Services section -->

<!-- Locations Slider -->
<div class="dark-section change-header-color">
    <div class="title-text">
        <div class="title-text-styles">
            <div class="title-text-caption text-center content-full-width parallax-onscroll">
                <div class="inner">
                    <h1><span class="has-mask-fill text-uppercase">Locations</span></h1>
                    <p>Up close and personal with brands and customers across the region.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="content-row row_padding_bottom dark-section text-align-center">

        <div class="pinned-gallery">
            <div class="pinned-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations/location1.jpg" alt="Image Title">
            </div>
            <div class="pinned-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations/location2.jpg" alt="Image Title">
            </div>
            <div class="pinned-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/locations/location3.jpg" alt="Image Title">
            </div>
        </div>

    </div>
</div>
<!--/Locations Slider -->

<!-- Brands Section -->
<?php get_template_part('sections/brands_section'); ?>
<!--/Brands Section -->

<!-- Testimonials-section -->
<?php get_template_part('sections/testimonials'); ?>
<!-- Testimonials-section -->

<!-- Posts Section -->
<?php get_template_part('sections/posts_section'); ?>
<!-- Posts Section -->

<!-- Contact section -->
<div class="row_padding_top row_padding_bottom row dark-section contact-section change-header-color">
    <div class="container">
        <div class="title-text">
            <div class="title-text-caption text-center">
                <p class="sub-title">READY TO STARTA PROJECT?</p>
                <h1 class="title text-uppercase">Let’s make something
                    great together!</h1>
                <p class="desc mx-auto">Ready to start a project or really curious about our process? Drop us a note
                    or give us a call 888.641.7313; we’re happy to answer all your questions.</p>
                <div class="btn-sec">
                    <a href="" class="cont-btn text-upperecase">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section -->


<!-- Page Navigation --------------------------->
<div id="page-nav">
    <div class="page-nav-wrap">
        <div class="page-nav-caption content-full-width">
            <div class="inner">
                <a class="page-title next-ajax-link-page" data-type="page-transition" data-centerline="MOVE ON" href="multimedia.html">
                    <div class="next-hero-title primary-font-title caption-timeline"><span><em>Multimedia</em></span> <span>Creative Elements</span></div>
                </a>
                <div class="next-hero-subtitle caption-timeline"><span>Unleash Your Visual Storytelling</span></div>
            </div>
        </div>
    </div>
</div>
<!-- Page Navigation -------------------------->


<?php
get_footer();
