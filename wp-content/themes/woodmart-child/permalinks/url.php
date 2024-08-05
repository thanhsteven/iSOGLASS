<?php 
// Them .html vao cac trang
add_action('init', 'add_html_to_page_permalink');
function add_html_to_page_permalink() {
  global $wp_rewrite;
  $wp_rewrite->page_structure = str_replace("%pagename%", "%pagename%.html", $wp_rewrite->get_page_permastruct());
  flush_rewrite_rules();
}

function get_current_url() {
    global $wp;
    return home_url($wp->request);
}
?>