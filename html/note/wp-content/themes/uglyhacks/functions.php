<?php
function twpp_change_excerpt_more( $more ) {
  return '......';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

/* アイキャッチ画像を有効にする。*/
// add_theme_support('post-thumbnails');

function my_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'my_theme_setup');