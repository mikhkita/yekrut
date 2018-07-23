var     isDesktop = false,
        isTablet = false,
        isMobile = false;

$(document).ready(function(){	
    function resize(){
       if( typeof( window.innerWidth ) == 'number' ) {
            myWidth = window.innerWidth;
            myHeight = window.innerHeight;
        } else if( document.documentElement && ( document.documentElement.clientWidth || 
        document.documentElement.clientHeight ) ) {
            myWidth = document.documentElement.clientWidth;
            myHeight = document.documentElement.clientHeight;
        } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
            myWidth = document.body.clientWidth;
            myHeight = document.body.clientHeight;
        }

        if( myWidth > 767 ){
            isDesktop = true;
            isTablet = false;
            isMobile = false;
        }else{
            isDesktop = false;
            isTablet = false;
            isMobile = true;
        }
    }
    $(window).resize(resize);
    resize();

    $.fn.placeholder = function() {
        if(typeof document.createElement("input").placeholder == 'undefined') {
            $('[placeholder]').focus(function() {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                    input.removeClass('placeholder');
                }
            }).blur(function() {
                var input = $(this);
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.addClass('placeholder');
                    input.val(input.attr('placeholder'));
                }
            }).blur().parents('form').submit(function() {
                $(this).find('[placeholder]').each(function() {
                    var input = $(this);
                    if (input.val() == input.attr('placeholder')) {
                        input.val('');
                    }
                });
            });
        }
    }
    $.fn.placeholder();
    $( " .b-reasons " ).slick({
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    touchThreshold: 100,
                    arrows: true,
                    dots: true,
                    easing: 'easeOutQuart',
                    useTransform: false,
                    prevArrow: '<button type="button" class="slick-prev icon-arrow-left">Previous</button>',
                    nextArrow: '<button type="button" class="slick-next icon-arrow-right">Previous</button>'
    });

    $(".b-reason[data-slick-index='0'] .slider-anim").addClass("show");

    $(".b-reasons").on('afterChange', function(event, slick, currentSlide, nextSlide){
        $(".b-reason .slider-anim").removeClass("show");
        $(".b-reason[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    });

    $( " .b-reviews " ).slick({
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    touchThreshold: 100,
                    arrows: true,
                    dots: true,
                    easing: 'easeOutQuart',
                    useTransform: false,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    prevArrow: '<button type="button" class="slick-prev icon-arrow-left">Previous</button>',
                    nextArrow: '<button type="button" class="slick-next icon-arrow-right">Previous</button>'
    });

    $(".b-review[data-slick-index='0'] .slider-anim").addClass("show");

    $(".b-reviews").on('afterChange', function(event, slick, currentSlide, nextSlide){
        $(".b-review .slider-anim").removeClass("show");
        $(".b-review[data-slick-index='"+currentSlide+"'] .slider-anim").addClass("show");
    });

    particlesJS.load('particles-js', 'js/particles.json', function() {
    });
    
    var circleWidth = 0;
    function circleWidthDeterm(){
        var circle = document.getElementById("circle");
        circleWidth = circle.offsetWidth;
        document.getElementById('circle').style.height = circleWidth+'px';
        var circle2 = document.getElementById("circle-2");
        circleWidth = circle2.offsetWidth;
        document.getElementById('circle-2').style.height = circleWidth+'px';
        var circle3 = document.getElementById("circle-3");
        circleWidth = circle3.offsetWidth;
        document.getElementById('circle-3').style.height = circleWidth+'px';
    }
    circleWidthDeterm();
   
    if (isDesktop) {
            $('#b-title-logo').enllax();
            $('#expert').enllax();
            $('#expert-2').enllax();
        };
    if (isMobile){
        document.getElementById('expert').className = ('b-expert-pic anim fadeDown');
        document.getElementById('expert').setAttribute('data-cont', '#circle');
        document.getElementById('expert-name').setAttribute('data-cont', '#circle');
        document.getElementById('expert-name').className = ('b-expert-name anim fadeDown delay100');
        document.getElementById('expert-quote').setAttribute('data-cont', '#circle');
        document.getElementById('expert-quote').className = ('b-expert-quote anim fadeDown delay200');
        document.getElementById('question-button').setAttribute('data-cont', '#circle');
        document.getElementById('question-button').className = ('anim fadeDown delay400');



        document.getElementById('expert-2').className = ('b-expert-pic-2 anim fadeDown');
        document.getElementById('expert-2').setAttribute('data-cont', '#circle-2');
        document.getElementById('expert-name-2').setAttribute('data-cont', '#circle-2');
        document.getElementById('expert-name-2').className = ('b-expert-name anim fadeDown delay100');
        document.getElementById('expert-quote-2').setAttribute('data-cont', '#circle-2');
        document.getElementById('expert-quote-2').className = ('b-expert-quote anim fadeDown delay200');
        document.getElementById('question-button-2').setAttribute('data-cont', '#circle-2');
        document.getElementById('question-button-2').className = ('anim fadeDown delay400');

        document.getElementById('link-1').className = ('b-button orange question fancy left');
        document.getElementById('link-1').setAttribute('data-cont', ' ');
    };
    $(window).resize(function () {
        circleWidthDeterm();
    });
// custom["footer-animate"] = function(){
//     var typed = new Typed("#typed-show", {
//         // strings: ['npm install^1000\n `installing components...` ^1000\n `Fetching from source...`'],
//         strings:["<b>Запишитесь на встречу</b> в нашем офисе"],
//         typeSpeed: 10,
//         showCursor: false,
//         onComplete: string2
//     });

// }

//     function string2(){
//         var typed2 = new Typed("#typed-show-2", {
//             strings:["и мы <b>бесплатно</b> пришлем за вами автомобиль с личным водителем"],
//             typeSpeed: 5,
//             showCursor: false
//         });
    var elem =  document.getElementsByClassName('b-header-h2-b-6')[0];
    var str = elem.innerText;
    var symbols = str.split("");
    var body = document.getElementsByClassName('b-header-h2-b-6-2')[0];
    var delay = 0;

    // symbols.forEach(function(item, i, arr) {
    //     delays.push();
    // }
    symbols.forEach(function(item, i, arr) {
        
          var span = document.createElement('span');
          span.innerHTML = item;
          span.className = 'lol anim fadeIn';
          span.setAttribute('data-cont', '.b-6');
          span.style.transitionDelay = delay+'ms';
          if (i < 21) {
            span.style.fontFamily = 'Gilroy-Bold'
          };
          body.appendChild(span);
          console.log(item);
          delay += 20;
    });
    
    var elem =  document.getElementsByClassName('b-subtitle-b-6')[0];
    var str = elem.innerText;
    var symbols = str.split("");
    var body = document.getElementsByClassName('b-subtitle-b-6-2')[0];
    var delay = 680;
    symbols.forEach(function(item, i, arr) {
        
          var span = document.createElement('span');
          span.innerHTML = item;
          span.className = 'lol anim fadeIn';
          span.setAttribute('data-cont', '.b-6');
          span.style.transitionDelay = delay+'ms';
          if (i > 4 && i < 14) {
            span.style.fontFamily = 'Gilroy-Bold'
          };
          body.appendChild(span);
          console.log(item);
          delay += 20;
    });

    var isWindows = false,
        timerLeave = 0,
        showLeave = true;
        inputFocus= false;

    $( "input" ).focus(function() {
        inputFocus = true;
        showLeave = false;
      });



    if (navigator.userAgent.indexOf ('Windows') != -1) isWindows = true;

    setInterval(function() {
        timerLeave++;
        if(timerLeave > 120){
            showLeave = true;
            timerLeave = 0;
        }
    }, 1000);

    $(document).mouseleave(function(){
        if(!$(".fancybox-slide .b-popup").length && showLeave){
            $(".pop6").click();
            showLeave = false;
            timerLeave = 0;
        }
    });

    isRetina = retina();

    function retina(){
        var mediaQuery = "(-webkit-min-device-pixel-ratio: 1.5),\
            (min--moz-device-pixel-ratio: 1.5),\
            (-o-min-device-pixel-ratio: 3/2),\
            (min-resolution: 1.5dppx)";
        if (window.devicePixelRatio > 1)
            return true;
        if (window.matchMedia && window.matchMedia(mediaQuery).matches)
            return true;
        return false;
    }

    if(isRetina){
        $("*[data-retina]").each(function(){
            var $this = $(this),
                img = new Image(),
                src = $this.attr("data-retina");

            img.onload = function(){
                $this.attr("src", $this.attr("data-retina"));
            };
            img.src = src;
        });
    }
    // $('#b-quiz').validate(
    //   {
    //     rules:
    //     {
    //         "when":{ 
    //             required:true
    //         },
    //         "nights":{ 
    //             required:true
    //         }
    //     },
    //     messages:
    //     {
    //         "when": "Выберите один вариант",
    //         "nights": "Выберите один вариант"
    //     },
    //     errorPlacement: function(error, element) 
    //     {
    //         if ( element.is(":radio") ) 
    //         {
    //             error.addClass("visible-label");
    //             error.appendTo('.b-error-placement');
    //         }
    //         else 
    //         {
    //             error.insertAfter( element );
    //         }
    //      }
    //       });


    $(".quiz-screen").hide();
    $(".scr-1").show();
    $(".quiz-but").click(function(){
        // var lol = ($(this).parents(".quiz-answers").find("input.error"));
        // alert(lol);

        $("#b-quiz").valid();
        if ($(this).parents(".quiz-answers").find("input.error").length != 0) {
            return false;  
        }
        else{ 
            $(".quiz-screen").hide();
            $(($(this)).attr("data-next")).show(); 
        }
    });
    // $(".b-button.submit").click(function(){
    //     $(".quiz-screen").hide();
    //     $(".scr-1").show();  
    // });

    // $("body").children().each(function() {
    //     $(this).html($(this).html().replace(/&#8232;/g," "));
    // });


	// var myPlace = new google.maps.LatLng(55.754407, 37.625151);
 //    var myOptions = {
 //        zoom: 16,
 //        center: myPlace,
 //        mapTypeId: google.maps.MapTypeId.ROADMAP,
 //        disableDefaultUI: true,
 //        scrollwheel: false,
 //        zoomControl: true
 //    }
 //    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions); 

 //    var marker = new google.maps.Marker({
	//     position: myPlace,
	//     map: map,
	//     title: "Ярмарка вакансий и стажировок"
	// });

});