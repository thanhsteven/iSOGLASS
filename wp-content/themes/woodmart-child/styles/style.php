<?php
function style_for_each_page () {
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/thanh-global.css" type="text/css" />';
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/thanh-desktop.css" type="text/css" />';
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/thanh-tablet.css" type="text/css" />';
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/thanh-mobile.css" type="text/css" />';
	echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/thanh-style.css" type="text/css" />';
	// 	Lọc CSS cho từng page
	$current_page_id = get_queried_object_id();
	if($current_page_id == 15207) {
		echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/in-logo-ly-thuy-tinh.css" type="text/css" />';
	}
	if($current_page_id == 38) {
		echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/styles/thanh-blog.css" type="text/css" />';
	}
};
add_action('wp_head', 'style_for_each_page');
?>