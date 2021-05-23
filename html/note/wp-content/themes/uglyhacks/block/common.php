<?php
/**
 * 
 * 
 */

/* Templateによる出し分け */
if ( is_front_page() && is_home() ) {
  $site_location = 'home+front';
} elseif ( is_home() ) {
  $site_location = 'home';
} elseif ( is_front_page() ) {
  $site_location = 'front_page';
} elseif ( is_home() ) {
  $site_location = 'home';
} elseif ( is_single()) {
  $site_location = 'single';
  $description = get_the_excerpt($post_id);
  $url = get_permalink($post_id);
  $title = " | ".get_the_title();
} else {
  $site_location = 'else';
}

/**
 * wordpressで必要な情報の取得を行う
 * - $post_id: 記事のIDを取得する
 */

$post_id = get_the_ID();
$description = DESCRIPTION;
$url = site_url();
$post_title = get_the_title();
$og_image = OG_IMAGE_PATH;
$blog_title = BLOG_TITLE;

// echo $site_location."<br>\n";
// echo $post_id."<br>\n";
// echo $description."<br>\n";
// echo $url."<br>\n";
// echo $post_title."<br>\n";
// echo $og_image."<br>\n";
// echo $blog_title."<br>\n";