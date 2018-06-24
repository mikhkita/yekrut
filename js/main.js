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
                    prevArrow: '<button type="button" class="slick-prev icon-arrow-left">Previous</button>',
                    nextArrow: '<button type="button" class="slick-next icon-arrow-right">Previous</button>'
    });
    $( " .b-reviews " ).slick({
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    touchThreshold: 100,
                    arrows: true,
                    dots: true,
                    prevArrow: '<button type="button" class="slick-prev icon-arrow-left">Previous</button>',
                    nextArrow: '<button type="button" class="slick-next icon-arrow-right">Previous</button>'
    });

    $('#b-title-logo').enllax();
    $('#expert').enllax();
    particlesJS.load('particles-js', 'js/particles.json', function() {
    });
custom["footer-animate"] = function(){
    var typed = new Typed("#typed-show", {
        strings:["<b>Запишитесь на встречу</b> в нашем офисе"],
        typeSpeed: 7,
        showCursor: false
    });

    setTimeout(string2, 1600);
}

    function string2(){
        var typed2 = new Typed("#typed-show-2", {
            strings:["и мы <b>бесплатно</b> пришлем за вами автомобиль с личным водителем"],
            typeSpeed: 5,
            showCursor: false
        });
    }

        jQuery.preloadImages = function()
     {
      for(var i = 0; i < arguments.length; i++)
      {
       jQuery("<img>").attr("src", arguments[ i ]);
      }
     };

     $.preloadImages("/i/bg-popup.jpg", "/i/julia-pop.png");

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