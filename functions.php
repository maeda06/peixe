<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}


function add_adminbar_menu() {
  global $wp_admin_bar;
  global $template;
  $current_template = basename($template);
  $wp_admin_bar->add_node( array(
    'id'    => 'template_file_name',
    'title' => '使用されているテンプレートファイル : '. $current_template,
  ));
}
add_action('admin_bar_menu', 'add_adminbar_menu', 500);
?>