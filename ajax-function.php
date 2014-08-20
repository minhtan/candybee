<?php
function useAjax() {
 
	/** Register JavaScript Functions File */
	 wp_register_script( 'ajax-function', esc_url( trailingslashit( get_template_directory_uri() ) . '/js/ajax.js' ), array(), '1.0', true );
	 
	/** Localize Scripts */
	 wp_localize_script( 'ajax-function', 'ajax', array( 'url' => admin_url( 'admin-ajax.php' ) ) );
	/** Enqueue JavaScript Functions File */
	wp_enqueue_script( 'ajax-function' );
}

add_action( 'wp_enqueue_scripts', 'useAjax');

function return_posts(){
	$client_post = $_POST['clientPost'];
	$post_list = get_posts(array('orderby' => 'post_date','posts_per_page' => -1) );
	$total_post = count($post_list);
	$return_post = check_return_post($client_post);
	$result = get_result($client_post, $return_post, $total_post);
	$has_post_remain = has_post_remain($total_post, $client_post, count($result));
	$result_html = create_post_html($result, $return_post);
	$return_data = array('html' => $result_html, 'has_post_remain' => $has_post_remain);

	echo json_encode($return_data);
	die();
}
add_action("wp_ajax_nopriv_return_posts","return_posts");
add_action("wp_ajax_return_posts","return_posts");

function check_return_post($client_post){
	if($client_post > 0){
		return 5;
	}else{
		return 7;
	}
}
function get_result($client_post, $return_post, $total_post){
	$sub_post = $total_post - $client_post;
	$result_list;
	$has_post_remain;
	if($sub_post < $return_post){
		$result_list = get_posts(array('orderby' => 'post_date', 'offset' => $client_post, 'posts_per_page' => $sub_post));
	}else if($sub_post >= $return_post){
		$result_list = get_posts(array('orderby' => 'post_date', 'offset' => $client_post, 'posts_per_page' => $return_post));
	}
	return $result_list;
}

function has_post_remain($total_post, $client_post, $sub_post){
	if($client_post + $sub_post < $total_post){
		return true;
	}else{
		return false;
	}
}

function create_post_html($result, $return_post){
	$temp = "";
	for ($i = 0; $i < count($result); $i++) {

		if(check_has_gap($return_post, $i)){
			$temp = $temp . "<li class ='post hex-gap'>";	
		}else{
			$temp = $temp . "<li class ='post'>";
		}
		$temp = $temp . "<div class='hexagon hexagon2'>";
		$temp = $temp . "<div class='hexagon-in1'>";
		$temp = $temp . "<div class='hexagon-in2 img-loading'>";
		$temp = $temp . "<a href='" . get_permalink($result[$i]->ID) . "'>";
		$temp = $temp . "<img class='lazy' id='" . $result[$i]->ID . "' src='". wp_get_attachment_url( get_post_thumbnail_id($result[$i]->ID)) . "'/>";
		$temp = $temp . "<div class='post-title-bg'>";
		$temp = $temp . "<h3 class='post-title vertical-center text-center'>" . $result[$i]->post_title . "</h3>";
		$temp = $temp . "</div>";
		$temp = $temp . "</a>";
		$temp = $temp . "</div>";
		$temp = $temp . "</div>";
		$temp = $temp . "</div>";
		$temp = $temp . "</li>";
	}
	return $temp;
}

function check_has_gap($return_post, $index){
	if($return_post == 7){
		if($index == 0 || $index == 5){
			return true;
		}
	}else{
		if($index == 3){
			return true;
		}
	}
	return false;
}
?>
