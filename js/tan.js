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
function toggleSection(open, close){
	$(open).removeClass("closed");
	$(open).addClass("open");
	$(close).removeClass("open");
	$(close).addClass("closed");
}

$(document).ready(function() {
	setHeight();
	$('.first-half').click(function(){
		if( $(this).hasClass("open") ){
		}else{
			toggleSection(".first-half", ".second-half");
			setTimeout(function(){ 
				$(".logo-candy").removeClass("hidden");
				$(".data-toggle").show("drop", 400);
				$('#logo-bee').removeClass("vertical-center");
			}, 400);
		}
	});
	$('.second-half').click(function(){
		if( $(this).hasClass("open") ){
		}else{
			$(".logo-candy").addClass("hidden");
			setTimeout(function(){ 
				toggleSection(".second-half", ".first-half");
				$(".data-toggle").hide("drop", 400);
				$("#tabs").tabs( "option", "active", 0 );
				$('#logo-bee').addClass("vertical-center");
			}, 200);
		}
	});
	$("#tabs").tabs();
});
$(window).resize(function(){
	setHeight();
});