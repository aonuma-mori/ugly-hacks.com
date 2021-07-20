<?php
require '../config.php';
require_once '../vendor/autoload.php';

define('LOG_PATH','get-data-cache.log');

/**s
 * initialize
 */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log = new Logger('get-data-cache.php');
$log->pushHandler(new StreamHandler(__DIR__."/".LOG_PATH, Logger::INFO));
$log->info('hello');

/* remote ip allow */
if (!array_search($_SERVER["REMOTE_ADDR"], $parameter["ug_allow_ips"])) {
  $log_line = "from: ".$_SERVER["REMOTE_ADDR"]." accsessed.";
  $log->warning($log_line);
  exit();
}

/**
 * DB connect
 */
try {
  $wp_pdo = new PDO($parameter["dsn"],$parameter["user"],$parameter["password"]);
  $wp_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  $error_message = "Connection failed: ". $e->getMessage();
  echo $error_message;
  $log->error($error_message);
  exit();
}
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
$table_post = $parameter["ug_wp_prefix"]."posts";
$count_query = 'SELECT count(*) FROM '.$table_post;
$stmt = $wp_pdo->query($count_query);
foreach ($stmt as $k=>$count) {
  $blog_posts_count = $count[0];
}
$table_statistics = $parameter["ug_other_prefix"]."statistics";
$current_count_query = "SELECT count FROM ".$table_statistics." where name='blog_posts'";
// var_dump($current_count_query);
$stmt = $wp_pdo->query($current_count_query);
foreach ($stmt as $k=>$count) {
  $c_blog_posts_count = $count[0];
}
echo "current count: ".$blog_posts_count."<br>\n";
echo "previous count: ".$c_blog_posts_count."<br>\n";

if ($blog_posts_count !== $c_blog_posts_count) {
  $update_count_query = "UPDATE ".$table_statistics." SET count = ".$blog_posts_count.", update_date = NOW() where name = 'blog_posts';";
  $stmt = $wp_pdo->query($update_count_query);
  $display_blog_posts_count = $blog_posts_count;
  echo "update: ";
} else {
  $display_blog_posts_count = $c_blog_posts_count;
  echo "no update: ";
}
echo "display count: ".$display_blog_posts_count."<br>\n";

$data[0] = [
  "no" => "0", 
  "name" => "blog posts",
  "value" => $display_blog_posts_count,
  "previous_count" => $c_blog_posts_count,
  "current_count" => $blog_posts_count,
];
$data[1]  = [
  "no" => "1", 
  "name" => "dummy",
  "value" => "9999",
  "previous_count" => "+++++++",
  "current_count" => "+++++++",
];

$json_date = json_encode($data);
@file_put_contents("get-data-cache.json", $json_date);
echo($json_date);
