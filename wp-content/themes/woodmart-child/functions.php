<?php
// Enqueue script and styles for child theme
function woodmart_child_enqueue_styles() {
    wp_enqueue_style('child-style', 
    get_stylesheet_directory_uri() . '/style.css', 
    array('woodmart-style'), 
    woodmart_get_theme_info('Version'));
}
add_action('wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010);

// Mảng chứa danh sách các file bạn muốn include và đường dẫn tương ứng
$files_to_include = array(
	'url' => '/permalinks/url.php',
    'style' => '/styles/style.php',
    'part' => '/parts/part.php'
);

// Đường dẫn đến thư mục của child-theme
$child_theme_directory = get_stylesheet_directory();

// Duyệt qua mảng và include từng file
foreach ($files_to_include as $file_name => $file_path) {
	$include_path = $child_theme_directory . $file_path;
	if (file_exists($include_path)) {
		include $include_path;
	} else {
		echo "File $file_name không tồn tại tại đường dẫn: $include_path";
	}
}



