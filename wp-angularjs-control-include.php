<?php
/*
Plugin Name: WP angularjs control include
Plugin URI: http://infoheap.com/
Description: Include angularjs javascript for a specific post (using custom field wp-angularjs-include)
Author: infoheap team
Author URI: http://infoheap.com/
Version: 1.0
*/


function waci_enqueue_js () {
  global $post;
  $post_angularjs_include_value = get_post_meta($post->ID, 'wp-angularjs-include', true);
  if (in_array($post_angularjs_include_value, array('true', '1')) ) {
    wp_enqueue_script('angularjs-js', plugins_url('js/angular.js', __FILE__), null, null, true/*in_footer*/);
  }
}
add_action('wp_enqueue_scripts', 'waci_enqueue_js');

?>
