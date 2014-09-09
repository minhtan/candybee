$(document).ready(function(){
	get_data_ajax(get_post_count_rq());
	$('.view-more-wrap').on('click', function(){
		get_data_ajax(get_post_count_rq());
	});
});

function get_data_ajax(clientPost ){
	$.ajax({
		url: ajax.url,
		async: false,
		cache: false,
		timeout: 8000,
		type: "POST",
		data:({action: 'return_posts', clientPost: clientPost}),
		beforeSend: function(){
			$('.view-more').html('Loading...');
		},
		success: function(data){
			var json_data = $.parseJSON(data);
			$('.post-list').append(json_data.html);

			$('.lazy').each(function(){
				loadImg($(this));
				checkImg($(this));
			});
			check_view_more_extant(json_data);
			setTimeout(function () {
		        postScroll.refresh();
		    }, 0);
		},
		error: function(){
			
		}
	});
}

function check_view_more_extant(json_data){
	if(json_data.has_post_remain){
		$('.view-more').html('Xem thêm');
	}else{
		$('.view-more').remove();
	}
}

function get_post_count_rq(){
	return $('.post-list').children('.post-mini').length;

}

function loadImg(img){
	img.bind('load',function(){
		img.parent().parent().removeClass('img-loading');
	});      
}

function checkImg(img){
	if(img.attr('src') === ''){
		img.parent().parent().removeClass('img-loading').addClass('img-default');
		img.remove();
	}
}
