$(document).ready(function() {		
	
/*----------------------------------------------------------*/
/*              Modern ticker               */
/*----------------------------------------------------------*/
       
$(".ticker1").modernTicker({effect:"scroll",scrollType:"continuous",scrollStart:"inside",scrollInterval:20,transitionTime:500,autoplay:true});
$(".ticker2").modernTicker({effect:"fade",displayTime:4e3,transitionTime:300,autoplay:true});
$(".ticker3").modernTicker({effect:"type",typeInterval:10,displayTime:4e3,transitionTime:300,autoplay:true});
$(".ticker4").modernTicker({effect:"slide",slideDistance:100,displayTime:4e3,transitionTime:350,autoplay:true});


/*----------------------------------------------------------*/
/*               FLEX SLIDERS                           */
/*----------------------------------------------------------*/
       

if ($('.flexslider.portfolio-items-slider.slide').length && jQuery()) {
    var target_flexslider = $('.flexslider.portfolio-items-slider.slide');
    target_flexslider.flexslider({
        animation: "slide",
        slideshow: true,
        controlNav: false,
        smoothHeight: false,
        pauseOnHover: true,
        slideshowSpeed: 8000, 
        directionNav:false
        
    });
    $(".flexslider.portfolio-items-slider.slide").hover(function () {
            $('.flexslider.portfolio-items-slider.slide .flex-direction-nav').fadeIn(200);
        },
        function () {
            $('.flexslider.portfolio-items-slider.slide .flex-direction-nav').fadeOut(200);
    });  
}

/*----------------------------------------------------------*/
/*              scroll bar                      */
/*----------------------------------------------------------*/
        
  $(".agenda").mCustomScrollbar({
                    autoHideScrollbar:true,
                    theme:"light-thin"
  });

/*----------------------------------------------------------*/
/*             z GOOGLE MAPS                             */
/*----------------------------------------------------------*/
        if ($('#google-map').length && jQuery()) {
            var $map = $('#google-map');
            $map.gMap({
                markers: [{
                    'address': 'Level 13, 2 Elizabeth St, Melbourne Victoria 3000 Australia',
                }],
                zoom: 16,
            });
        }


/*----------------------------------------------------------*/
/*               datatable             
/*----------------------------------------------------------   

$('#example').dataTable({

            "scrollCollapse":true,
            "paging":false,
            "scrollY": "200px",
            "language":{
                "url": "http://cdn.datatables.net/plug-ins/f2c75b7247b/i18n/French.json"
            }
        });

 /* ---------------------------------------------------- */
        /*  owlslider Init   */
/* ---------------------------------------------------- */

(function() {
    if ($('#owl-slider-video').length) {
        var config = CONFIG.objOwlSlider_video;
        $("#owl-slider-video").owlCarousel(config);
    }
        if ($('#owl-slider-photo').length) {
        var config = CONFIG.objOwlSlider_photo;
        $("#owl-slider-photo").owlCarousel(config);
    }
}());

/*----------------------------------------------------------*/
/*               prettyphoto             
/*----------------------------------------------------------*/  

$("a[data-rel^='prettyPhoto']").prettyPhoto({
    overlay_gallery: false
});

/*----------------------------------------------------------*/
/*               datatable             
/*----------------------------------------------------------*/    

$('#example').dataTable({

            "scrollCollapse": true,
            "paging": false,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/f2c75b7247b/i18n/French.json"
            }
        });
$('#example_sans_recherche').dataTable({

            "scrollCollapse": true,
            "paging": false,
            "searching":   false,
            "language": {
                "url": "http://cdn.datatables.net/plug-ins/f2c75b7247b/i18n/French.json"
            }
        });



/* ---------------------------------------------------- */
        /*  SmoothScroll Init   */
/* ---------------------------------------------------- */

(function() {

    try {
        $.browserSelector();
            var $html = $('html');
            if ($html.hasClass('chrome') || $html.hasClass('ie11') || $html.hasClass('ie10') || $html.hasClass('safari')) {
                $.smoothScroll();
            }
        } catch (err) {
    }

}());


/*----------------------------------------------------------*/
/*              JQUERY TABS                            */
/*----------------------------------------------------------*/
        (function () {
            var $tabsNav = $('.tabs-nav'),
                $tabsNavLis = $tabsNav.children('li'),
                $tabContent = $('.tab-content');
            $tabContent.hide();
            $tabsNavLis.first().addClass('active').show();
            $tabContent.first().show();
            $tabsNavLis.on('click', function (e) {
                var $this = $(this);
                $tabsNavLis.removeClass('active');
                $this.addClass('active');
                $tabContent.hide();
                $($this.find('a').attr('href')).fadeIn(700);
                e.preventDefault();
            });
        })();

/*----------------------------------------------------------*/
/*              PORTFOLIO ISOTOPE JQUERY                */
/*----------------------------------------------------------*/
        if ($('#portfolio-container').length && jQuery()) {
            (function () {
                var $container = $('#portfolio-container');
                if ($container.length) {
                    var $itemsFilter = $('#filterable');
                    $('.isotope-item', $container).each(function (i) {
                        var $this = $(this);
                        $this.addClass($this.attr('data-categories'));
                    });
                    $(window).on('load', function () {
                        $container.isotope({
                            itemSelector: '.isotope-item',
                            layoutMode: 'fitRows'
                        });
                    });
                    $itemsFilter.on('click', 'a', function (e) {
                        var $this = $(this),
                         currentOption = $this.attr('data-categories');
                        $itemsFilter.find('a').removeClass('active');
                        $this.addClass('active');
                        if (currentOption) {
                            if (currentOption !== '*') currentOption = currentOption.replace(currentOption, '.' + currentOption);
                            $container.isotope({
                                filter: currentOption,
                                 
                            });
                        }
                        e.preventDefault();
                    } );
                    $itemsFilter.find('a').first().addClass('active');
                }
            })();
        }


}());

