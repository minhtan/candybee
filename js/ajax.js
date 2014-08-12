$(document).ready(function(){
	get_data_ajax(get_post_count_rq());
	$('.view-more').on('click', function(){
		get_data_ajax(get_post_count_rq());
	});
});

function get_data_ajax(clientPost){
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
			$('.post-list').append(json_data);
			$('.view-more').html('View more');
			setTimeout(function () {
		        postScroll.refresh();
		    }, 0);
		},
		error: function(){
			alert('Load post error');
		},
		complete: function(){
		}
	});
}

function get_post_count_rq(){
	return $('.post-list').children('.post').length;

}