<?php
// $ch = curl_init("https://ugryhacks.com/note/wp-json/wp/v2/posts");

$url = "https://ugryhacks.com/note/wp-json/wp/v2/posts";
$app_user = "ugryhacks";
$password = "XIUTR2hEyp29x1pZmMUs9q4L";
$post = <<<EOM
  "title": "投稿のテスト1",
  "content": "TEST<br/>TEST",
  "categories": [2],
  "status": "draft"
EOM;



/* CURL初期化 */
$c = curl_init();
/* アクセス先の指定 */
curl_setopt($c, CURLOPT_URL, $url);
/* 実行結果を文字列で返す */
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
/* サーバー証明書の検証 */
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, true);
/* URLの情報を取得 */
$re =  curl_exec($c);
var_dump(json_decode($re));
curl_close($c);


