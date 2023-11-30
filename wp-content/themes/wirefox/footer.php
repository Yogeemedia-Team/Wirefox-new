<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wirefox
 */

?>

<!-- footer section -->
<div class="footer_sec change-header-color row_padding_bottom">
    <div class="foot_cont mx-auto">
        <div class="row_padding_top">
            <p class="subtitle mb-0">
                SIGN UP TO OUR NEWS LETTER:
            </p>
            <div class="form_sec">
                <?php echo do_shortcode('[contact-form-7 id="d4bfc1a" title="Subscribe Form"]');?>
            </div>
        </div>
        <div class="social row_padding_top">
            <p class="subtitle">
                Socials
            </p>
            <div class="icon_sec">
                <div class="row">
                    <div class="col">
                        <div class="button-wrap">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <a target="_blank" href="https://www.facebook.com/WirefoxDigitalAgencyUK">
                                        <i class="fa-brands fa-3x fa-facebook-f"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="button-wrap">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <a target="_blank" href="https://www.instagram.com/wirefoxuk/">
                                        <i class="fa-brands fa-3x fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="button-wrap">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <a target="_blank" href="https://www.youtube.com/channel/UCFtXf5bmoprfAnwqZEzDFFQ">
                                        <i class="fa-brands fa-3x fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="button-wrap">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <a target="_blank" href="https://twitter.com/wirefox_uk">
                                        <i class="fa-brands fa-3x fa-twitter"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="button-wrap">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <a target="_blank" href="https://www.linkedin.com/company/wirefoxuk">
                                        <i class="fa-brands fa-3x fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="button-wrap">
                            <div class="icon-wrap parallax-wrap">
                                <div class="button-icon parallax-element">
                                    <a target="_blank" href="https://www.pinterest.com/">
                                        <i class="fa-brands fa-3x fa-pinterest-p"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="foot_menu">
            <div class="row">
                <div class="col-md-4">
                    <div class="menu">
                        <?php
                        $menu_object = get_term_by('name', 'footer-left', 'nav_menu');
                        if ($menu_object) {
                            $menu_items = wp_get_nav_menu_items($menu_object->term_id);

                            if (!empty($menu_items)) {
                                echo '<ul>';
                                foreach ($menu_items as $menu_item) {
                                    echo '<li class="mb-1"><a class="link" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                                }
                                echo '</ul>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu">
                        <?php
                        $menu_object = get_term_by('name', 'footer-midle', 'nav_menu');
                        if ($menu_object) {
                            $menu_items = wp_get_nav_menu_items($menu_object->term_id);

                            if (!empty($menu_items)) {
                                echo '<ul class="mx-auto">';
                                foreach ($menu_items as $menu_item) {
                                    echo '<li class="mb-1"><a class="link" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                                }
                                echo '</ul>';
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu">
                        <?php
                        $menu_object = get_term_by('name', 'footer-right', 'nav_menu');
                        if ($menu_object) {
                            $menu_items = wp_get_nav_menu_items($menu_object->term_id);

                            if (!empty($menu_items)) {
                                echo '<ul class="ms-auto">';
                                foreach ($menu_items as $menu_item) {
                                    echo '<li class="mb-1"><a class="link" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                                }
                                echo '</ul>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="foot_logo mx-auto w-75">
                <div class="row">
                    <div class="col-md-4 my-auto">
                        <div class="text-center">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/CSSDESIGN.svg" alt="wirefox">
                        </div>
                    </div>
                    <div class="col-md-4 my-auto">
                        <div class="w-50 mx-auto">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/CULTCH.svg" alt="wirefox">
                        </div>
                    </div>
                    <div class="col-md-4 my-auto">
                        <div class="text-center">
                            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/awwwards.svg" alt="wirefox">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <p class="copy_des mx-auto text-center">
                Copyright 2019 © Wirefox, All rights reserved | Trademark: Wirefox ®, | Privacy and Cookies Policy | Terms & Conditions | Reg Address: 32 DeMontfort Street, Leicester, LE1 7GD
                Registered in England & Wales: Company No. 09072362 | Tel: 0121 368 0098 | Office: Suite 2A, Blackthorn House, Saint Paul’s Square, Birmingham B3 1RL
            </p>

        </div>
    </div>
</div>
<!-- footer section -->

</div>
<!--/Main Page Content -->
</div>
<!--/Main Content -->
<!--/Main -->

<!-- Footer -->
<footer class="hidden">
    <?php get_template_part('sections/footer_section'); ?>
</footer>
<!--/Footer -->


</div>
<!--/Content Scroll -->


<div id="app"></div>


</div>
<!--/Page Content -->

</div>
</main>



<div class="cd-cover-layer"></div>
<div id="magic-cursor">
    <div id="ball">
        <div id="ball-drag-x"></div>
        <div id="ball-drag-y"></div>
        <div id="ball-loader"></div>
    </div>
</div>
<div id="clone-image">
    <div class="hero-translate"></div>
</div>
<div id="rotate-device"></div>

<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<script src="
https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/Flip.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.4.0/smooth-scrollbar.js'></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCpK1sWi3J3EbUOkF_K4-UHzi285HyFX5M&sensor=false"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/clapat.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>

<script>
    "use strict";

    document.addEventListener("DOMContentLoaded", function() {
        const img = document.getElementById("img1");
        const distortElements = document.querySelectorAll(".distort");

        /* Zoom in & Zoom Out */
        img.addEventListener("mouseenter", () => {
            distortElements.forEach(elem => elem.classList.add("zoom"));
        });
        img.addEventListener("mouseleave", () => {
            distortElements.forEach(elem => elem.classList.remove("zoom"));
        });

        /* Animation */
        setInterval((function() {
            laTransition();
        }), 6e3);
    });

    function laTransition() {
        const progress = {
            aller: 0,
            retour: 100
        };

        let delayed = 0;
        let nb_pass = 0;

        document.querySelectorAll("feDisplacementMap").forEach(elem => {
            elem.scale.baseVal = 0;
        });

        document.querySelectorAll(".innerImgs").forEach(elem => {
            let nextElem;
            gsap.to(elem.querySelector(".current"), {
                duration: 1,
                y: "-100%",
                delay: delayed,
                ease: Power2.easeInOut
            });
            gsap.to(elem.querySelector(".current").querySelector("div"), {
                duration: 1,
                scale: 1.3,
                y: "90%",
                delay: delayed,
                ease: Power2.easeInOut
            });
            gsap.to(progress, {
                duration: 1,
                aller: 100,
                delay: delayed,
                ease: Power2.easeInOut,
                onUpdate: () => {
                    elem.querySelector(".current").querySelector("feDisplacementMap").scale.baseVal = progress.aller;
                }
            });

            nextElem = elem.querySelector(".current").nextElementSibling || elem.querySelectorAll(".cover")[0];

            gsap.fromTo(nextElem, {
                y: "100%"
            }, {
                duration: 1,
                y: "0%",
                delay: delayed,
                ease: Power2.easeInOut,
                onComplete: () => {
                    elem.querySelector(".current").classList.remove("current");
                    nextElem.classList.add("current");
                    if (elem.querySelector(".current").getAttribute("data-perma")) {
                        document.getElementById("img1").setAttribute("href", elem.querySelector(".current").getAttribute("data-perma"));
                    }
                }
            });

            gsap.fromTo(nextElem.querySelector("div"), {
                y: "-90%",
                scale: 1.2
            }, {
                duration: 1,
                y: "0%",
                scale: 1.1,
                delay: delayed,
                ease: Power2.easeInOut
            });

            gsap.to(progress, {
                duration: 1,
                retour: 0,
                delay: delayed,
                ease: Power2.easeInOut,
                onUpdate: () => {
                    nextElem.querySelector("feDisplacementMap").scale.baseVal = progress.retour;
                }
            });

            delayed += .15;

            if (++nb_pass === 3) {
                nb_pass = 0;
                delayed = 0;
            }
        });
    }
    "use strict";

    document.addEventListener("DOMContentLoaded", function() {
        const img = document.getElementById("img1");
        const distortElements = document.querySelectorAll(".distort");

        /* Zoom in & Zoom Out */
        img.addEventListener("mouseenter", () => {
            distortElements.forEach(elem => elem.classList.add("zoom"));
        });
        img.addEventListener("mouseleave", () => {
            distortElements.forEach(elem => elem.classList.remove("zoom"));
        });

        /* Animation */
        setInterval((function() {
            laTransition();
        }), 6e3);
    });

    function laTransition() {
        const progress = {
            aller: 0,
            retour: 100
        };

        let delayed = 0;
        let nb_pass = 0;

        document.querySelectorAll("feDisplacementMap").forEach(elem => {
            elem.scale.baseVal = 0;
        });

        document.querySelectorAll(".innerImgs").forEach(elem => {
            let nextElem;
            gsap.to(elem.querySelector(".current"), {
                duration: 1,
                y: "-100%",
                delay: delayed,
                ease: Power2.easeInOut
            });
            gsap.to(elem.querySelector(".current").querySelector("div"), {
                duration: 1,
                scale: 1.3,
                y: "90%",
                delay: delayed,
                ease: Power2.easeInOut
            });
            gsap.to(progress, {
                duration: 1,
                aller: 100,
                delay: delayed,
                ease: Power2.easeInOut,
                onUpdate: () => {
                    elem.querySelector(".current").querySelector("feDisplacementMap").scale.baseVal = progress.aller;
                }
            });

            nextElem = elem.querySelector(".current").nextElementSibling || elem.querySelectorAll(".cover")[0];

            gsap.fromTo(nextElem, {
                y: "100%"
            }, {
                duration: 1,
                y: "0%",
                delay: delayed,
                ease: Power2.easeInOut,
                onComplete: () => {
                    elem.querySelector(".current").classList.remove("current");
                    nextElem.classList.add("current");
                    if (elem.querySelector(".current").getAttribute("data-perma")) {
                        document.getElementById("img1").setAttribute("href", elem.querySelector(".current").getAttribute("data-perma"));
                    }
                }
            });

            gsap.fromTo(nextElem.querySelector("div"), {
                y: "-90%",
                scale: 1.2
            }, {
                duration: 1,
                y: "0%",
                scale: 1.1,
                delay: delayed,
                ease: Power2.easeInOut
            });

            gsap.to(progress, {
                duration: 1,
                retour: 0,
                delay: delayed,
                ease: Power2.easeInOut,
                onUpdate: () => {
                    nextElem.querySelector("feDisplacementMap").scale.baseVal = progress.retour;
                }
            });

            delayed += .15;

            if (++nb_pass === 3) {
                nb_pass = 0;
                delayed = 0;
            }
        });
    }
</script>
<script>
    const cards = gsap.utils.toArray(".card");
    const spacer = 20;
    const minScale = 0.8;

    const distributor = gsap.utils.distribute({
        base: minScale,
        amount: 0.2
    });

    cards.forEach((card, index) => {

        const scaleVal = distributor(index, cards[index], cards);

        const tween = gsap.to(card, {
            scrollTrigger: {
                trigger: card,
                start: `top top`,
                scrub: true,
                markers: true,
                invalidateOnRefresh: true
            },
            ease: "none",
            scale: scaleVal
        });

        ScrollTrigger.create({
            trigger: card,
            start: `top-=${index * spacer} top`,
            endTrigger: '.cards',
            end: `bottom top+=${300 + (cards.length * spacer)}`,
            pin: true,
            pinSpacing: false,
            markers: true,
            id: 'pin',
            invalidateOnRefresh: true,
        });
    });
</script>

<!----filter function--->
<script>
    filterSelection("all");

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("tab-pane");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (c == "" || x[i].className.indexOf(c) > -1) {
                w3AddClass(x[i], "show");
            }
        }
    }

    function w3AddClass(element, name) {
        var arr1 = element.className.split(" ");
        var arr2 = name.split(" ");
        for (var i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
        // Add inline style display: block
        element.style.display = "block";
    }

    function w3RemoveClass(element, name) {
        var arr1 = element.className.split(" ");
        var arr2 = name.split(" ");
        for (var i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
        // Remove inline style display
        element.style.display = "";
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("nav-link");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = btnContainer.getElementsByClassName("active");
            if (current.length > 0) {
                current[0].className = current[0].className.replace(" active", "");
            }
            this.className += " active";
        });
    }
</script>

    <script type="text/javascript">
        $('#showsuccess').hide();
        $('#showdanger').hide();
        /* Please add these script at the end of code for form validation */
$(document).ready(function () {
    $('#showsuccess').hide();
    $('#showdanger').hide();

    $("#check_btn").on('click', function (e) {
        e.preventDefault();

        var website_name = $("#inpWebsite").val();
        var FirstName = $("#result_FirstName").val();
        var LastName = $("#result_LastName").val();
        var email = $("#result_email").val();
        var phone = $("#result_phone").val();
        var customfield = $("#result_CustomField").val();

        // Clear previous error messages
        $('#websiteError').html('');
        $('#firstNameError').html('');
        $('#lastNameError').html('');
        $('#emailError').html('');
        $('#phoneError').html('');
        $('#checkboxError').html('');

        // Validation for Website URL
        if (website_name == '' && document.getElementById("inpWebsite")) {
            $('#websiteError').html('Enter Website URL');
            return false;
        } else if (!isUrl(website_name) && document.getElementById("inpWebsite")) {
            $('#websiteError').html('Enter Website URL with http/https');
            return false;
        }

        // Validation for First Name
        if (FirstName == '') {
            $('#firstNameError').html('Enter First Name');
            return false;
        }

        // Validation for Last Name
        if (LastName == '') {
            $('#lastNameError').html('Enter Last Name');
            return false;
        }

        // Validation for Email
        if (email == '' || !ValidateEmail(email)) {
            $('#emailError').html('Enter a valid Email address');
            return false;
        }

        // Validation for Phone
        if (phone == '') {
            $('#phoneError').html('Enter Phone number');
            return false;
        }

        // Validation for Checkbox
        var checkbox = $('#AgreeOpt1').prop("checked");
        if (!checkbox && document.getElementById("AgreeOpt1")) {
            $('#checkboxError').html('Select Checkbox');
            return false;
        }

        // Continue with form submission logic...
        $('#textdanger').html('');
        var senddata = {
            'website': website_name,
            'FirstName': FirstName,
            'LastName': LastName,
            'email': email,
            'phone': phone,
            'customfield': customfield,
            'checkbox': checkbox,
            'iframeCode': 'IMC8gE',
            'webPageURL': window.location.href
        }

        $.ajax({
            type: 'post',
            data: senddata,
            url: 'https://app.serpwizz.com/add-lead',
            crossDomain: true,
            success: function (data) {
                var jsondata = $.parseJSON(data);
                if (jsondata.status == 'YES') {
                    if (jsondata.getAction == '1') {
                        var url = "https://seoaudit.wirefox.co.uk/IMC8gE-" + jsondata.insert_id + "/" + jsondata.auditurl;
                        window.open(url);
                    } else if (jsondata.getAction == '2') {
                        $('.formhide').hide();
                        $('#showsuccess').css('display', 'block').html('Thank you for the filled form. We will contact you as soon as possible.');
                    } else if (jsondata.getAction == '3') {
                        window.open(jsondata.redurl, "_self");
                    } else {
                        $('.formhide').hide();
                        $('#showdanger').css('display', 'block').html('Contact support');
                    }
                } else if (jsondata.status == 'NOT') {
                    $('.formhide').hide();
                    $('#showdanger').css('display', 'block').html('The website URL you have entered is not responding. Please confirm that the URL you have entered is correct, and that the website is actually loading at this address in your browser.');
                } else {
                    $('.formhide').hide();
                    $('#showdanger').css('display', 'block').html('Something went wrong. Please try again.');
                }
            },
            error: function () {
                $('.formhide').hide();
                $('#showdanger').css('display', 'block').html('An error occurred during the form submission. Please try again later.');
            }
        });
    });

    $("#result_phone").keyup(function () {
        this.value = this.value.replace(/[^0-9\.+() ]/, '');
    });

    function isUrl(s) {
        var regexp = /(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi;
        return regexp.test(s);
    }

    function ValidateEmail(email) {
        var expr = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        return expr.test(email);
    }
});

    </script>
<?php wp_footer(); ?>

</body>

</html>