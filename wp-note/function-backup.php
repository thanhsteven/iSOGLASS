<?php
// Enqueue script and styles for child theme
function woodmart_child_enqueue_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'woodmart-style' ), woodmart_get_theme_info( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'woodmart_child_enqueue_styles', 10010 );

// Chuyen tu noindex sang index
function convert_noindex_to_index() {
    if (is_singular()) {
        echo '<meta name="robots" content="index, follow" />' . "\n";
    }
}
add_action('wp_head', 'convert_noindex_to_index');

// Tat tinh nang tu dong cap nhat cua theme
add_filter( 'auto_update_theme', '__return_false' );

// Tat tinh nang tu dong cap nhat cua plugin
add_filter( 'auto_update_plugin', '__return_false' );

// Tat het cac thong bao cap nhat cua plugin
function disable_update_notifications( $value ) {
    if ( isset( $value ) && is_object( $value ) ) {
        foreach( $value->response as $plugin_file => $plugin_data ) {
            unset( $value->response[ $plugin_file ] );
        }
    }
    return $value;
}
add_filter( 'site_transient_update_plugins', 'disable_update_notifications' );

// Gioi han so luong ban sua doi trong WordPress
// Limit = 2
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 2);

// Them .html vao cac trang
add_action('init', 'add_html_to_page_permalink');
function add_html_to_page_permalink(){
    global $wp_rewrite;
    $wp_rewrite->page_structure = str_replace("%pagename%", "%pagename%.html", $wp_rewrite->get_page_permastruct());
    flush_rewrite_rules();
}

// Slideshow Trang Chai thuy tinh va Ly thuy tinh
function slider_danh_muc_lon() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="9634"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="9636"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("slideshow_trangdanhmuc","slider_danh_muc_lon");

// Product grid trang danh muc lon
function product_grid_trang_danhmuclon() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="9645"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="9642"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("product_grid_danhmuclon","product_grid_trang_danhmuclon");
// Product carousel trang danh muc
function product_carousel_trang_danhmuclon() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="9680"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="9688"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("product_carousel_danhmuclon","product_carousel_trang_danhmuclon");

// Answer and Question trang danh mục
function answerthequestion_trang_danhmuclon() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="9727"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="9729"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("answerthequestion_category","answerthequestion_trang_danhmuclon");

// Carousel trang danh muc
function carousel_trangdanhmuc_chaivaly() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="9742"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="9758"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("carousel_trangdanhmuc","carousel_trangdanhmuc_chaivaly");

// Sidebar Phan loai danh muc
function sidebar_phanloaidanhmuc() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="9221"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="9848"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("sidebar_phanloai_chaivaly","sidebar_phanloaidanhmuc");

// Xoa shorlink toan site
function disable_shortlink_wp_head() {
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
}
add_action('init', 'disable_shortlink_wp_head');

// Testimonial phan loai danh muc
function testimonial_danhmuc() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="10717"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="10719"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("testimonial_phanloai_chai_ly","testimonial_danhmuc");

function remove_robots_meta_tags() {
    remove_action('wp_head', 'noindex', 1);
    remove_action('wp_head', 'nofollow', 1);
}
add_action('wp_head', 'remove_robots_meta_tags', 1);

?>