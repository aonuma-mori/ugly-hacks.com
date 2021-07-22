<?php
require './config.php';
require_once './vendor/autoload.php';

define('LOG_PATH','get-count.log');

/**s
 * initialize
 */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log = new Logger('get-count.php');
$log->pushHandler(new StreamHandler(__DIR__."/".LOG_PATH, Logger::INFO));

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
 * count
 * 
 */
$table_count = $parameter["ug_other_prefix"]."statistics";
$access_count_query = "SELECT count FROM ".$table_count." where name='count'";
$stmt = $wp_pdo->query($access_count_query);
foreach ($stmt as $k=>$count) {
  $access_count = $count[0] + 1;
}
$update_access_count_query = "UPDATE ".$table_count." SET count = ".$access_count.", update_date = NOW() where name = 'count';";
$stmt = $wp_pdo->query($update_access_count_query);
// echo $access_count."<br>\n";



