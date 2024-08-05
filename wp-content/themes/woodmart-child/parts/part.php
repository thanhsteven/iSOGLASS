<?php
// Slideshow Trang Chai thuy tinh va Ly thuy tinh
function slider_danh_muc_lon()
{
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
add_shortcode("slideshow_trangdanhmuc", "slider_danh_muc_lon");

// Product grid trang danh muc lon
function product_grid_trang_danhmuclon()
{
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 53) {
            echo do_shortcode('[html_block id="9645"]');
        } else if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="9642"]');
        }  else if ($category_tag_id == 130) {
            echo do_shortcode('[html_block id="14401"]');
        }
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("product_grid_danhmuclon", "product_grid_trang_danhmuclon");
// Product carousel trang danh muc
function product_carousel_trang_danhmuclon()
{
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
add_shortcode("product_carousel_danhmuclon", "product_carousel_trang_danhmuclon");

// Answer and Question trang danh mục
function answerthequestion_trang_danhmuclon()
{
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
add_shortcode("answerthequestion_category", "answerthequestion_trang_danhmuclon");

// Sidebar Phân loại theo danh mục
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
add_shortcode("sidebar_phanloai_chaivaly", "sidebar_phanloaidanhmuc");

// Testimonial phan loai danh muc
function testimonial_danhmuc(){
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
add_shortcode("testimonial_phanloai_chai_ly", "testimonial_danhmuc");

// Table Single Product
function thanh_single_product_details() {
    echo '
        <div class="thanh-table-product-detail">
        <ul class="thanh-table-ul-heading table-first">
            <li class="thanh-table-li-item">
                Dung tích
                <span class="thanh-li-value">'.get_field('dung_tich').'</span>
            </li>
            <li class="thanh-table-li-item">
                Chiều cao
                <span class="thanh-li-value">'.get_field('chieu_cao').'</span>
            </li>
            <li class="thanh-table-li-item">
                Đường kính miệng
                <span class="thanh-li-value">'.get_field('duong_kinh_mieng').'</span>
            </li>
            <li class="thanh-table-li-item">
                Đường kính đáy
                <span class="thanh-li-value">'.get_field('duong_kinh_day').'</span>
            </li>
            <li class="thanh-table-li-item border-bottom-1">
                Đường kính lớn nhất
                <span class="thanh-li-value">'.get_field('duong_kinh_lon_nhat').'</span>
            </li>
        </ul>
        <ul class="thanh-table-ul-heading table-second">
            <li class="thanh-table-li-item">
                Đường kính đĩa
                <span class="thanh-li-value">'.get_field('duong_kinh_dia').'</span>
            </li>
            <li class="thanh-table-li-item">
                Trọng lượng ly
                <span class="thanh-li-value">'.get_field('trong_luong_ly').'</span>
            </li>
            <li class="thanh-table-li-item">
                Quy cách
                <span class="thanh-li-value">'.get_field('quy_cach_dong_goi').'</span>
            </li>
            <li class="thanh-table-li-item">
                Trọng lượng hộp
                <span class="thanh-li-value">'.get_field('trong_luong_hop').'</span>
            </li>
            <li class="thanh-table-li-item border-bottom-1">
                Xuất xứ
                <span class="thanh-li-value">'.get_field('xuat_xu').'</span>
            </li>
        </ul>
    </div>';
}
add_shortcode('table_single_product_detail','thanh_single_product_details');

// Hàm lấy danh mục sản phẩm
function get_highest_parent_product_category_shortcode() {
    global $product;

    // Kiểm tra xem trang hiện tại có phải là trang sản phẩm WooCommerce không
    if (function_exists('is_product') && is_product()) {
        // Lấy danh sách danh mục sản phẩm của sản phẩm hiện tại
        $product_categories = wc_get_product_terms($product->get_id(), 'product_cat');

        if ($product_categories) {
            $parent_category_id = 0;
            // Lặp qua danh sách danh mục sản phẩm để tìm danh mục cha lớn nhất
            foreach ($product_categories as $product_category) {
                $category_ancestors = get_ancestors($product_category->term_id, 'product_cat');
                if (empty($category_ancestors)) {
                    $parent_category_id = $product_category->term_id;
                }
            }

            // Kiểm tra các điều kiện về tag_id và trả về shortcode tương ứng
            if ($parent_category_id == 53) {
				echo do_shortcode('[html_block id="9221"]');
            } elseif ($parent_category_id == 20) {
				echo do_shortcode('[html_block id="9848"]');
            }
        }
    }
}
add_shortcode('check_categories_product','get_highest_parent_product_category_shortcode');

function hinhanh_bolythuytinh() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 90) {
            echo do_shortcode('[html_block id="14478"]');
        } 
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("hinhanh_danhmuc", "hinhanh_bolythuytinh");

function inLogoLythuyTinh() {
    if (is_product_category()) {
        $category_tag_id = get_queried_object_id();
        if ($category_tag_id == 20) {
            echo do_shortcode('[html_block id="15348"]');
        } 
    } else {
        echo "Đây không phải trang danh mục";
    }
}
add_shortcode("thanh_inlogolythuytinh", "inLogoLythuyTinh");

?>