<?php
require '../config.php';
require_once '../vendor/autoload.php';

/* remote ip allow */
if (!array_search($_SERVER["REMOTE_ADDR"], $parameter["ug_allow_ips"])) {
  exit();
}

/**s
 * initialize
 */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$wp_pdo = new PDO($parameter["dsn"],$parameter["user"],$parameter["password"]);
/**
 * - wordpessの記事の件数 (n)
 * - Tweet (n)
 * 
 * 
 * 
 * 
 */


/**
 * ブログの記事数を取得する(Wordpress)
 * Number of blog articles
 * 
 */
$display_blog_posts_count = "";
$count_query = "SELECT count(*) FROM wp_posts";
$stmt = $wp_pdo->query($count_query);
foreach ($stmt as $k=>$count) {
  $blog_posts_count = $count[0];
}
$current_count_query = "SELECT count FROM ug_statistics where name='blog_posts'";
$stmt = $wp_pdo->query($current_count_query);
foreach ($stmt as $k=>$count) {
  $c_blog_posts_count = $count[0];
}

if ($blog_posts_count !== $c_blog_posts_count) {
  $update_count_query = "UPDATE ug_statistics SET count = ".$blog_posts_count." where name = 'blog_posts';";
  $stmt = $wp_pdo->query($update_count_query);
  $display_blog_posts_count = $blog_posts_count;
  echo "update: ".$display_blog_posts_count."<br>\n";
} else {
  $display_blog_posts_count = $c_blog_posts_count;
  echo "no update: ".$display_blog_posts_count."<br>\n";
}
$data[0] = [
  "no" => "0", 
  "name" => "blog posts",
  "value" => $display_blog_posts_count,
];
$data[1]  = [
  "no" => "1", 
  "name" => "dummy",
  "value" => "9999",
];




$json_date = json_encode($data);
@file_put_contents("get-data-cache.json", $json_date);
var_dump($json_date);

/**
 * トップページなどに表示するいろいろなキャッシュデータを取得する
 * - wordpessの記事の件数
 * - Tweet数
 * - アクセス数
 * - 
 * 
 */
class statistics {









}


echo "893A7437F152D20FFA3390DC57708B49C44B6BDA2E07477C2BE16741BE10342CB92144A55E94C1B0E306934C1CC883E5EA75FCA9C537A20E52DE9F489441B460";