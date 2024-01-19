//FAQ deo

const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

        const currentlyActiveAccordionItemHeader = document.querySelector(
            ".accordion-item-header.active"
        );
        if (
            currentlyActiveAccordionItemHeader &&
            currentlyActiveAccordionItemHeader !== accordionItemHeader
        ) {
            currentlyActiveAccordionItemHeader.classList.toggle("active");
            currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        }
        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if (accordionItemHeader.classList.contains("active")) {
            accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        } else {
            accordionItemBody.style.maxHeight = 0;
        }
    });
});



//skrol hedera i promena boje

const header = document.getElementById("myHeader");

window.addEventListener("scroll", function() {
    if (window.pageYOffset > 150) {
        header.classList.add("change-color");
    } else {
        header.classList.remove("change-color");
    }
});



$(document).ready(function(){

    //activ button
    $('.tab_content').hide();
    $('.tab_content:first').show();
    $('.lista li:first').addClass('activeTab');
    $('.lista li').click(function(event) {
        event.preventDefault();
        $('.lista li').removeClass('activeTab');
        $(this).addClass('activeTab');

        $('.tab_content').hide();

        var selectTab = $(this).find('a').attr("href");

        $(selectTab).fadeIn(0);
    });


    window.addEventListener('scroll', reveal);

    function reveal(){
        var reveals = document.querySelectorAll('.reveal');

        for(var i = 0; i < reveals.length; i++){
            var windowheight = window.innerHeight;
            var revealtop = reveals[i].getBoundingClientRect().top;
            var revealpoint = 150;


            if(revealtop < windowheight - revealpoint){
                reveals[i].classList.add('active');
            }
            else{
                reveals[i].classList.remove('active');
            }
        }
    }
});





//slajder na pocetnoj
$(document).ready(function () {
    $('.head-banner').owlCarousel({
        loop:true,
        items : 1,
        margin:20,
        nav:true,
        // dots: true,
        mouseDrag:true,
        autoplay: true,
        smartSpeed: 1000, // duration of change of 1 slide
        autoplayTimeout: 4000,
        // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                loop:true
            },
            600:{
                items:1,
                loop:true
            },
            1000:{
                items:1,
                loop:true
            },
            1300:{
                items:1,

            }
        }
    })


    //slajder levo tekst desno
    $('.what-is-paintball-slider-left').owlCarousel({
        loop:true,
        items : 1,
        margin:20,
        nav:true,
        dots: false,
        mouseDrag:true,
        autoplay: true,
        smartSpeed: 1000, // duration of change of 1 slide
        autoplayTimeout: 4000,
        navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
                loop:true
            },
            600:{
                items:1,
                loop:true
            },
            1000:{
                items:1,
                loop:true
            },
            1300:{
                items:1,

            }
        }
    })



    //SINGLE galerija SLIDER
    $('.u-gallery ').owlCarousel({
        loop:true,
        items : 1,
        margin:20,
        nav:true,
        mouseDrag:true,
        autoplay: true,
        smartSpeed: 1000, // duration of change of 1 slide
        autoplayTimeout: 5000,
        dots: false,
        // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:2,
                mouseDrag:true,
            },
            600:{
                items:2,
                mouseDrag:true
            },
            1000:{
                items:3
            }
        }
    })


    $('.rodjendaniGalerija-slider').owlCarousel({
        loop:true,
        items : 1,
        margin:20,
        nav:true,
        mouseDrag:true,
        autoplay: true,
        smartSpeed: 1000, // duration of change of 1 slide
        autoplayTimeout: 5000,
        dots: false,
        // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:2,
                mouseDrag:true,
            },
            600:{
                items:2,
                mouseDrag:true
            },
            1000:{
                items:3
            }
        }
    })


    $('.paintball-slike-gallery').owlCarousel({
        loop:true,
        items : 1,
        margin:20,
        nav:true,
        mouseDrag:true,
        autoplay: true,
        smartSpeed: 1000, // duration of change of 1 slide
        autoplayTimeout: 5000,
        dots: false,
        // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:2,
                mouseDrag:true,
            },
            600:{
                items:2,
                mouseDrag:true
            },
            1000:{
                items:3
            }
        }
    })







    $('.slider-news').owlCarousel({
        items : 1,
        margin:10,
        autoplay: false,
        center: true,
        loop: true,
        nav: true,
        dots: false,
        mouseDrag:true,
        navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 2,
                margin: 0,
            },
            1000: {
                items: 3,
            }
        }
    })


    //VIDEO PLAYING
    const video = document.getElementById("video");
    const circlePlayButton = document.getElementById("playVideo");

    function togglePlay() {
        if (video.paused || video.ended) {
            video.play();
        } else {
            video.pause();
        }
    }

    circlePlayButton.addEventListener("click", togglePlay);
    video.addEventListener("playing", function () {
        console.log('test')
        circlePlayButton.style.opacity = 0;
    });
    video.addEventListener("pause", function () {
        circlePlayButton.style.opacity = 1;
    });


    //BUTTON GO TO TOP
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

//
//     var footer = document.getElementById('footer');
//     window.onscroll=function (){scrollFunctionFooter()};
//     function  scrollFunctionFooter(){
//         footer.style.display = "none";
//         if (document.body.scrollTop > 650 || document.documentElement.scrollTop > 650) {
//             footer.style.display = "block";
//         }
//     }
//
//
//     //FORME NA SINGLE PAGE
//     $('.sendInfo').click(function (){
//             $('.forma').addClass('formaActive');
//
//     });
//     $('.formX i').click(function (){
//         $('.forma').removeClass('formaActive');
//
//     });
//     if (window.innerWidth < 780) {
//         $('.toggle:first').show();
//         $(".trigger").click(function(){
//             $(this).next(".toggle").slideToggle("slow");
//
//             var className = $(this).attr('class');
//             // console.log(className);
//             if(className=="trigger h3active"){
//                 $(this).removeClass('h3active');
//             }
//             else{
//                 $(this).addClass('h3active');
//             }
//         });
//
//     }
//     $('.menu-mobile .fa-times').hide();
//     if (window.innerWidth < 780) {
//         // $('.menu-mobile').html(" <i class='fal fa-bars'></i>");
//         $('.menu-pages').hide();
//         $('.menu-mobile .fa-times').hide();
//         $('.menu-mobile .fa-bars').click(function(e) {
//             e.preventDefault();
//             $('.menu-pages').slideDown();
//             // $('.menu-2-mobile').hide();
//             $('.menu-mobile .fa-times').show();
//             $('.menu-mobile .fa-bars').hide();
//             $('.menu-mobile .fa-times').click(function(e) {
//                 e.preventDefault();
//                 $('.menu-pages').slideUp();
//                 // $('.menu-2-mobile').show();
//                 $('.menu-mobile .fa-bars').show();
//                 $('.menu-mobile .fa-times').hide();
//             });
//         });
//
//     }
//   $('.othersHomepage').owlCarousel({
//         loop:true,
//         items : 1,
//         margin:20,
//         nav:false,
//         dots: false,
//         // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.5
//             },
//             600:{
//                 items:2
//             },
//             1000:{
//                 items:3.5
//             },
//             1300:{
//                 items:5
//             }
//         }
//     })
//
//     $('.tab_content').hide();
//     $('.tab_content:first').show();
//     // $('.tabs li:first').addClass('activeTab');
//     $('.tabs li').click(function(event) {
//         event.preventDefault();
//         $('.tabs li').removeClass('activeTab');
//         $(this).addClass('activeTab');
//         $('.tab_content').hide();
//
//         var selectTab = $(this).find('a').attr("href");
//
//         $(selectTab).fadeIn(0);
//     });
//
//     // var content = document.querySelector('.text-scroll'),
//     //     wrapper = document.querySelector('.text-scroll-car'),
//     //     shadowTop = document.querySelector('.shadow--top'),
//     //     shadowBottom = document.querySelector('.shadow--bottom'),
//     //     contentScrollHeight = content.scrollHeight - wrapper.offsetHeight;
//     //
//     // content.addEventListener('scroll', function(){
//     //     var currentScroll = this.scrollTop / (contentScrollHeight);
//     //     // shadowTop.style.opacity = currentScroll;
//     //     shadowBottom.style.opacity = 1 - currentScroll;
//     // });
//     $(".fancybox").fancybox();
// })
//
// $(document).ready(function () {
//     var $recommendedBlocks = $('.recommendBlocks').owlCarousel({
//         loop:true,
//         items : 1,
//         margin:20,
//         nav:false,
//         dots: false,
//         // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.5
//             },
//             600:{
//                 items:2
//             },
//             1000:{
//                 items:3.5
//             },
//             1300:{
//                 items:5
//             }
//         }
//     })
//     $recommendedBlocks.trigger('refresh.owl.carousel');
// })
//
//
// $(document).ready(function () {
//     var $recommendedBlocks = $('.recommendBlocks1').owlCarousel({
//         loop:true,
//         items : 1,
//         margin:20,
//         nav:false,
//         dots: false,
//         // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.5
//             },
//             600:{
//                 items:2
//             },
//             1000:{
//                 items:3.5
//             },
//             1300:{
//                 items:5
//             }
//         }
//     })
//     $recommendedBlocks.trigger('refresh.owl.carousel');
// })
// $(document).ready(function () {
//     var $recommendedBlocks = $('.recommendBlocks2').owlCarousel({
//         loop:true,
//         items : 1,
//         margin:20,
//         nav:false,
//         dots: false,
//         // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.5
//             },
//             600:{
//                 items:2
//             },
//             1000:{
//                 items:3.5
//             },
//             1300:{
//                 items:5
//             }
//         }
//     })
//     $recommendedBlocks.trigger('refresh.owl.carousel');
// })
// $(document).ready(function () {
//     var $recommendedBlocks = $('.recommendBlocks3').owlCarousel({
//         loop:true,
//         items : 1,
//         margin:20,
//         nav:false,
//         dots: false,
//         // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.5
//             },
//             600:{
//                 items:2
//             },
//             1000:{
//                 items:3.5
//             },
//             1300:{
//                 items:5
//             }
//         }
//     })
//     $recommendedBlocks.trigger('refresh.owl.carousel');
// })
// $(document).ready(function () {
//     var $recommendedBlocks = $('.recommendBlocks4').owlCarousel({
//         loop:true,
//         items : 1,
//         margin:20,
//         nav:false,
//         dots: false,
//         // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.5
//             },
//             600:{
//                 items:2
//             },
//             1000:{
//                 items:3.5
//             },
//             1300:{
//                 items:5
//             }
//         }
//     })
//     $recommendedBlocks.trigger('refresh.owl.carousel');
// })
//
// $(document).ready(function () {
//
// })
// $(document).ready(function () {
//
//     $('.slider-for').slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: false,
//         fade: true,
//         asNavFor: '.slider-nav',
//         responsive: [
//             {
//                 breakpoint: 1024,
//                 settings: {
//                     slidesToShow: 3,
//                     slidesToScroll: 3,
//                     infinite: false,
//                     dots: false
//                 }
//             },
//             {
//                 breakpoint: 600,
//                 settings: {
//                     slidesToShow: 4,
//                     slidesToScroll: 4
//                 }
//             },
//             {
//                 breakpoint: 480,
//                 settings: {
//                     slidesToShow: 4,
//                     slidesToScroll: 4
//                 }
//             }
//             // You can unslick at a given breakpoint now by adding:
//             // settings: "unslick"
//             // instead of a settings object
//         ]
//     });
//     $('.slider-nav').slick({
//         slidesToShow: 8,
//         slidesToScroll: 8,
//         asNavFor: '.slider-for',
//         dots: false,
//         focusOnSelect: true
//     });
//
//     $('a[data-slide]').click(function(e) {
//         e.preventDefault();
//         var slideno = $(this).data('slide');
//         $('.slider-nav').slick('slickGoTo', slideno - 1);
//     });
// })
// $(document).ready(function () {
//
//     var $similarCars = $('.similarCars').owlCarousel({
//         loop:true,
//         items : 1,
//         margin:10,
//         nav:true,
//         dots: false,
//         // autoplay: true,
//         // slideTransition: 'linear',
//         // autoplayTimeout: 6000,
//         // autoplaySpeed: 6000,
//         // autoplayHoverPause: true,
//         navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.3,
//                 nav:false,
//                 dots:true,
//                 navText: false
//             },
//             600:{
//                 items:1,
//                 nav:true
//
//             },
//             1000:{
//                 items:2.3,
//                 nav:true
//             }
//         }
//     })
//     $similarCars.trigger('refresh.owl.carousel');
// })
// $(document).ready(function () {
//
//     var $galleryMobile = $('.gallery-mobile').owlCarousel({
//         loop:true,
//         items : 1.5,
//         margin:10,
//         nav:false,
//         dots: true,
//         // autoplay: true,
//         // slideTransition: 'linear',
//         // autoplayTimeout: 6000,
//         // autoplaySpeed: 6000,
//         // autoplayHoverPause: true,
//         // navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
//         responsive:{
//             0:{
//                 items:1.2
//
//             },
//             600:{
//                 items:1
//
//
//             },
//             1000:{
//                 items:2.3
//             }
//         }
//     })
//     $galleryMobile.trigger('refresh.owl.carousel');
//
})
