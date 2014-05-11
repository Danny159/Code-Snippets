<?php
// Source: http://premium.wpmudev.org/blog/adding-custom-images-sizes-to-the-wordpress-media-library/

if(function_exists('add_image_size')){
	add_image_size('new-size', 350, 250, true); //(cropped)
}

add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes){
	$addsizes = array(
		"new-size" => __( "New Size")
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}