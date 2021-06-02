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
if ( is_home() ) {
  $page_location = 'home';
  $blog_permalink = home_url();
  $blog_description = DESCRIPTION;
  $blog_title = BLOG_TITLE;
  $blog_page_type = "website";
} elseif ( is_front_page() ) {
  $page_location = 'front_page';
  $blog_permalink = home_url();
  $blog_description = DESCRIPTION;
  $blog_title = BLOG_TITLE;
  $blog_page_type = "website";
} elseif ( is_single()) {
  $page_location = 'single';
  // $blog_single_description = get_the_excerpt($post_id);
  $blog_permalink = get_permalink($post_id);
  // $title = " | ".get_the_title();
  $blog_description = get_the_excerpt($post_id)." | ".DESCRIPTION;
  $blog_title = get_the_title()." | ".BLOG_TITLE;
  $blog_page_type = "artcle";
} else {
  $page_location = 'else';
  $blog_title = BLOG_TITLE;
  $blog_permalink = home_url();
  $blog_page_type = "artcle";
}

// $blog_description = mb_substr($blog_description, 0, 120);

// echo "blog_home_url: ".$blog_home_url."<br>\n";
// echo "site_location: ".$page_location."<br>\n";
// echo "post_id: ".$post_id."<br>\n";
// echo "blog_description: ".$blog_description."<br>\n";
// echo "url: ".$url."<br>\n";
// echo "post_title: ".$post_title."<br>\n";
// echo "og_image: ".$og_image."<br>\n";
// echo "blog_title: ".$blog_title."<br>\n";
// echo "blog_permalink: ".$blog_permalink."<br>\n";
// echo "blog_page_type: ".$blog_page_type."<br>\n";

/*
〇	twitter:card	カードの種類	-
twitter:site	WebサイトのTwitterID	-
twitter:creator	コンテンツ作成者のTwitterID	-
〇	twitter:title	ページのタイトル	og:title
〇	twitter:description	ページの説明	og:description
〇	twitter:image	アイキャッチ画像のURL	og:image
*/