<?php
/**
 * 
 * 
 */



/**
 * wordpressで必要な情報の取得を行う
 * - $post_id: 記事のIDを取得する
 */

$post_id = get_the_ID();
$blog_description = DESCRIPTION;
$url = site_url();
$post_title = get_the_title();
$og_image = OG_IMAGE_PATH;
$blog_title = BLOG_TITLE;


$blog_home_url = home_url();

/* Templateによる出し分け */
if ( is_front_page() && is_home() ) {
  $site_location = 'top';
  $blog_permalink = home_url();
  $blog_description = DESCRIPTION;
  $blog_title = BLOG_TITLE;
} elseif ( is_home() ) {
  $site_location = 'home';
  $blog_permalink = home_url();
  $blog_description = DESCRIPTION;
  $blog_title = BLOG_TITLE;
} elseif ( is_front_page() ) {
  $site_location = 'front_page';
  $blog_permalink = home_url();
  $blog_description = DESCRIPTION;
  $blog_title = BLOG_TITLE;
} elseif ( is_single()) {
  $site_location = 'single';
  // $blog_single_description = get_the_excerpt($post_id);
  $blog_permalink = get_permalink($post_id);
  $title = " | ".get_the_title();
  $blog_description = get_the_excerpt($post_id)." | ".DESCRIPTION;
  $blog_title = get_the_title()." | ".BLOG_TITLE;
} else {
  $site_location = 'else';
  $blog_title = BLOG_TITLE;
}

// $blog_description = mb_substr($blog_description, 0, 120);

echo "blog_home_url: ".$blog_home_url."<br>\n";
echo "site_location: ".$site_location."<br>\n";
echo "post_id: ".$post_id."<br>\n";
echo "blog_description: ".$blog_description."<br>\n";
echo "url: ".$url."<br>\n";
echo "post_title: ".$post_title."<br>\n";
echo "og_image: ".$og_image."<br>\n";
echo "blog_title: ".$blog_title."<br>\n";
echo "blog_permalink: ".$blog_permalink."<br>\n";