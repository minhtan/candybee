//set section height to 100%
function setHeight(){
	var winHeight = $(window).height();

	var adminbar;
	if( $("#wpadminbar").length ){
		adminbar = $("#wpadminbar").height();
	}else{
		adminbar = 0;
	}
	
	$('.candyfront').height(winHeight-adminbar);
}

//toggle section
function toggleSection(thiz, that){
	thiz.removeClass("closed");
	thiz.addClass("open");
	$(that).removeClass("open");
	$(that).addClass("closed");
}

$(document).ready(function() {
	setHeight();
	$('.first-half').click(function(){
		if( $(this).hasClass("open") ){
		}else{
			toggleSection($(this), ".second-half");
		}
	});
	$('.second-half').click(function(){
		if( $(this).hasClass("open") ){
		}else{
			toggleSection($(this), ".first-half");
		}
	});
});
$(window).resize(function(){
	setHeight();
});