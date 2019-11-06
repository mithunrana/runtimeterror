$(document).ready(function () {

    function toggleIcon(e) {
        $(e.target)
                .prev('.panel-heading')
                .find(".more-less")
                .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);

    /*Responsive button query*/
    $(document).ready(function () {
        $('.showbutton').click(function () {
            $('#mySidenav').css({"width": "240px", "transition": "0.25s"});
            $('.showbutton').hide();
            $('#hidebuttonbar2').css({"opacity": "0"});
            $(".hidebutton").show();
        });

        $('.hidebutton').click(function () {
            $('#mySidenav').css({"width": "0px", "transition": "0.25s"});
            $('.hidebutton').hide();
            $('.showbutton').show();
        });
    });

    // Drop Down Menu
    $('.main-item').hover(function () {
        $(this).find('ul li').stop().fadeToggle(100);
    });

    //$('.silk-slider').slick({arrows: false});
    $('.silk-slider').bxSlider({
        pager: false,
        randomStart: true,
        auto: true,
        mode: 'fade',
        speed: 100,
        controls: false
    });

    $('.slick-category').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 2,
        autoplay:true,
        autoplaySpeed: '3000',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.slick-best-sell-section-1').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: '2000',
        cssEase: 'linear',
        arrows: false,
        rtl: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.slick-best-sell-section-2').slick({
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: '1000',
        cssEase: 'linear',
        arrows: false,
        rtl: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    $('.carousel-brand').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: '3000',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.card-carousel').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 2,
        autoplay: true,
        arrows: false,
        autoplaySpeed: '3000',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    
    $('.product-multiimage').slick({
        infinite: true,
        slidesToShow:5,
        slidesToScroll: 2,
        autoplay: true,
        arrows: false,
        autoplaySpeed: '3000',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    
    $('.catproductslide').slick({
        infinite: true,
        slidesToShow:1,
        slidesToScroll:1,
        autoplay: true,
        arrows: false,
        autoplaySpeed: '1000',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    
    
    $('#product1').magnify();


/* live chart jquery start here*/
    $('.live-message-box').hide();
    
    $('.live-message-box-cross').click(function(){
      $('.live-message-box').hide();
      $('#reve-chat-widget-header').show();
    });
    
    $('#reve-chat-widget-header').click(function(){
        $('.live-message-box').show();
        $(this).hide();
    });
/* live chart jquery end here*/  

    

});