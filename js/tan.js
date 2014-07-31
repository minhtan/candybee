//safeguard array.map function
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

//script begin
$(document).ready(function() {
	//set document height to 100%
	function setHeight(){
		var winHeight = $(window).height();

		var adminbar;
		if( $("#wpadminbar").length ){
			adminbar = $("#wpadminbar").height();
		}else{
			adminbar = 0;
		}

		var height = winHeight - adminbar;
		
		$('.candyfront').height(height);
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
		if( $(current).hasClass("open") ){}else{
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
	$(document).bind(
		'touchmove',
		function(e) {
			e.preventDefault();
		}
	);

	//init IScroll for bee content
	var beeScroll = new IScroll('#candybee-content', {
		mouseWheel: true,
		scrollbars: true,
		fadeScrollbars: true,
		interactiveScrollbars: true,
		shrinkScrollbars: 'clip',
		useTransition: false,
		click: true
	});

	//compute element in view
	var nav = ["info", "benefit", "price"]; //sections id - MUST be in correct order
	var navHeight;
	var navPos = [];
	//calculate nav-section position
	function calNavPos(){
		navHeight = nav.map(function(section){
			section = '#' + section;
	  		return $(section).height();
		});
		for (var i = 0; i < navHeight.length; i++) {
			if(i === 0)
				navPos[i] = 0;
			else
				navPos[i] = navPos[i-1] + navHeight[i-1];
		};
	}
	function setActiveNav(scrollPos){
		$('.bee-control li').removeClass('active');
		for (var i = 0; i < navPos.length; i++) {
			if(i < navPos.length -1){
				if(scrollPos >= navPos[i] && scrollPos < navPos[i+1]){
					$('.bee-control').find('.'+nav[i]).addClass('active');
					return;
				}
			}
			else{
				if (scrollPos >= navPos[i]){
					$('.bee-control').find('.'+nav[i]).addClass('active');
					return;
				}
			}
		}
	}
	function setActiveNav2(){
		for (var i = 0; i < nav.length; i++) {
			if( $(nav).offset().top + $(nav).height() > $(window).height() ){

			}
		}
	}
	setActiveNav(0);
	beeScroll.on('scrollEnd', function(){
		setActiveNav(this.y * -1);
	});

	//scroll navigation
	$('.bee-control li').click(function(){
		var el = '#' + $(this).attr('nav');
		beeScroll.scrollToElement(el);
	});

	//toggle sections
	$('.first-half').click(function(){
		toggleSectionContent(".first-half", ".second-half");
		setTimeout(function () {
	        beeScroll.refresh();
	        calNavPos();
	    }, 800);
	});
	$('.second-half').click(function(){
		toggleSectionContent(".second-half", ".first-half");
		setTimeout(function () {
	        beeScroll.scrollTo(0,0);
	    }, 800);
	});

	//resize function
	$(window).resize(function(){
		setHeight();
		calNavPos();
		setTimeout(function () {
	        beeScroll.refresh();
	        setActiveNav(beeScroll.y * -1);
	    }, 0);
	});

});