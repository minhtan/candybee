//prototype functions
if (!Array.prototype.map)
{
  Array.prototype.map = function(fun /*, thisp*/)
  {
    var len = this.length;
    if (typeof fun != "function")
      throw new TypeError();

    var res = new Array(len);
    var thisp = arguments[1];
    for (var i = 0; i < len; i++)
    {
      if (i in this)
        res[i] = fun.call(thisp, this[i], i, this);
    }

    return res;
  };
}

var beeScroll;
var postScroll;
var slider;
var scrollLock = false;
//script begin
$(document).ready(function() {
	//set document height to 100%
	var winHeight = $(window).height();
	function setHeight(){
		var adminbar;
		if( $("#wpadminbar").length ){
			adminbar = $("#wpadminbar").height();
		}else{
			adminbar = 0;
		}

		var height = winHeight - adminbar;
		
		$('.candyfront').height(height);
		if( $(window).width() > 960)
			$('.bee-content-wrap section:last-child').css('min-height', height-64);
		else
			$('.bee-content-wrap section:last-child').css('min-height', height);
	}

	//toggle section
	function toggleSection(open, close){
		$(open).removeClass("closed");
		$(open).addClass("open");
		$(close).removeClass("open");
		$(close).addClass("closed");
		setTimeout(function(){
			$(open).find('.section-cover').addClass("open");
			$(open).find('.section-content').addClass("open");
			$(open).find('.bee-control').addClass("open");
		}, 400);
	}

	//toggle section content
	function toggleSectionContent(current, other){
		if( ! $(current).hasClass("open") ){
			if($(other).hasClass("open")){
				$(other).find('.section-cover').removeClass("open");
				$(other).find('.section-content').removeClass("open");
				$(other).find('.bee-control').removeClass("open");
				setTimeout(function(){
					toggleSection(current, other);
				}, 400);
			}else{
				toggleSection(current, other);
			}
		}	
	}

	setHeight();

	// prevent default touch on mobile and tablet
	$(document).bind('touchmove', function(e){
		e.preventDefault();
	});

	//init IScroll for bee content
	beeScroll = new IScroll('#candybee-content', {
		mouseWheel: true,
		scrollbars: true,
		fadeScrollbars: true,
		interactiveScrollbars: true,
		shrinkScrollbars: 'clip',
		useTransition: false,
		click: true,
		probeType: 3
	});

	//init scroll for post content
	postScroll = new IScroll('#post-scroll', {
		mouseWheel: true,
		scrollbars: true,
		fadeScrollbars: true,
		interactiveScrollbars: true,
		shrinkScrollbars: 'clip',
		useTransition: false,
		click: true
	});

	//compute element in view
	var nav = [];
	$('#candybee-content .bee-content-wrap .bee-content').each(function(){
		nav.push( $(this).attr('id') );
	});
	var remainPer = 0.2; //remaining percentage of section required to be considered active
	var navHeight;
	//calculate nav-section position
	function calNavHeight(){
		navHeight = nav.map(function(section){
			section = '#' + section;
	  		return $(section).height();
		});
	}
	function setActiveNav(){
		var remain;
		for (var i = 0; i < nav.length; i++) {
			remain = ( $('#'+nav[i]).offset().top + navHeight[i] ) / winHeight;
			if(remain > remainPer){
				if( $('.bee-control').find('.'+nav[i]).hasClass('active') ){}
				else{
					$('.bee-control li').removeClass('active');
					$('.bee-control').find('.'+nav[i]).addClass('active');
				}
				return;
			}
		}
	}
	beeScroll.on('scroll', function(){
		scrollLock = true;
		setActiveNav();
	});

	//scroll navigation
	beeScroll.on('scrollEnd', function(){
		scrollLock = false;
	});
	beeScroll.on('scrollCancel', function(){
		scrollLock = false;
	});
	$('.bee-control li').click(function(){
		if( scrollLock === false ){
			var offsetY;
			if( $(window).width() > 960 )
				offsetY = -64;
			else
				offsetY = 0;
			var el = '#' + $(this).attr('nav');
			beeScroll.scrollToElement(el, 600, 0, offsetY);
			closeMobMenu();
		}
	});

	//toggle sections
	$('.first-half').click(function(){
		toggleSectionContent(".first-half", ".second-half");
		setTimeout(function () {
	        beeScroll.refresh();
	        calNavHeight();
	        setActiveNav();
	    }, 800);
	});
	$('.second-half').click(function(){
		toggleSectionContent(".second-half", ".first-half");
		closeMobMenu();
		setTimeout(function () {
	        beeScroll.scrollTo(0,0);
	        postScroll.refresh();
	    }, 800);
	});
	$('#go-to-2nd-half').click(function(){
		$('.second-half').click();
	});

	//product images slider
	function sliderConfig(){
		if($(window).width() <= 768){
			if(slider === undefined){
				slider = $('.product-image').bxSlider();
			}else{
				slider.reloadSlider();
			}
			$('.fancy').removeClass("fancybox");
		}else{
			if(slider != undefined){
				slider.destroySlider();
		        $('.product-image').removeAttr('style');
		        $('.product-image > .col-3').removeAttr('style');
			}
			$('.fancy').addClass("fancybox");
		}
	}
	// sliderConfig();

	//fancy box init
	$(".fancybox").fancybox({
		padding: 0,
		aspectRatio: true,
		margin: 0
	});
	// $(".img-zoom").click(function(){
	// 	$(this).parent().parent().parent().find('.fancybox').click();
	// });

	//mobile navigation
	function closeMobMenu(){
		if( $('.bee-control').hasClass('toggled') ){
			$('.bee-control').removeClass('toggled');
		}
	}
	$('.mobile-button').click(function(){
		if( ! $('.bee-control').hasClass('toggled') ){
			$('.bee-control').addClass('toggled');
		}
	});
	function smallHeightDeviceNav(){
		if( $(window).height() < 400 ){
			$('.bee-control').addClass('small');
		}else{
			$('.bee-control').removeClass('small');
		}
	}
	smallHeightDeviceNav();

	//resize function
	$(window).resize(function(){
		winHeight = $(window).height();
		closeMobMenu();
		smallHeightDeviceNav();
		setHeight();
		calNavHeight();
		setTimeout(function () {
	        beeScroll.refresh();
	        postScroll.refresh();
	        setActiveNav();
	        // sliderConfig();
	    }, 400);
	});
});