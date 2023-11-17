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



</div>
<!--/Main Page Content -->
</div>
<!--/Main Content -->
</div>
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

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
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

    document.addEventListener("DOMContentLoaded", function()
    {
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
    }"use strict";

    document.addEventListener("DOMContentLoaded", function()
    {
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

    const distributor = gsap.utils.distribute({ base: minScale, amount: 0.2 });

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
<?php wp_footer(); ?>

</body>

</html>