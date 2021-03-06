<?php
/**
 * html meta data
 */

/* local,sand,dev,test,stg,prod */
$ug_meta_env = "sand";

if ($ug_meta_env == "prod") {
  $parameter = [
    /* deefault = 0 else for wordpress */
    "ug_meta_post_id" => "0",
    /* subtitle */
    "ug_subtitle" => "ugryhacks:system_porn_notebook()",
    "ug_lead" => "システムポルノノートブック::スケベなこととか書いていない。",
    /* url */
    "ug_url" => "https://ugryhacks.com",
    /* archives */
    "ug_archives_page" => "/note/archivepage",
    /* profile page */
    "ug_profile_page" => "/note/profile/",
  ];
} else if ($ug_meta_env == "sand") {
  $parameter = [
    /* deefault = 0 else for wordpress */
    "ug_meta_post_id" => "0",
    /* subtitle */
    "ug_subtitle" => "ugryhacks:system_porn_notebook()",
    "ug_lead" => "システムポルノノートブック::スケベなこととか書いていない。",
    /* url */
    "ug_url" => "http://localhost:8000",
    /* archives */
    "ug_archives_page" => "/note/?page_id=59",
    /* profile page */
    "ug_profile_page" => "/note/?page_id=168",
  ];
}



/* title */
$ug_meta_title = "Ugryhacks (アグリーハックス)";

/* description */
$ug_meta_description = "WEB技術のシステムポルノのノートブックです。WEB制作に関連する話題、技術・マネージメントを扱うブログです。PHP,Python,AWS,GCP,Javascript,Vue.jsなどモダンなWEB開発を中心に記事を書いております。基本的にはアジャイル開発が中心です。";

/**
 * FB OGP
 */

/* og:admins */
$ug_meta_og_admins = "roughlang";

/* og:url */
$ug_meta_og_url = "https://ugryhacks.com/";

/* ./assets/image/icon/og-uglyhacks.png */
$ug_meta_og_image = "https://ugryhacks.com/assets/image/icon/og-uglyhacks.png";

/**
 * Twitter
 */
$ug_twitter_rss = "http://twitter-great-rss.herokuapp.com/feed/user?name=a141828410&url_id_hash=3d0bcd52ad998ad6ed1b72d816af4d04544cb26b";

