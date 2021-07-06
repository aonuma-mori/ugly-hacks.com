<?php
/**
 * Twitter RSS
 */

$twitter = new ServiceTwitterRssController();
$twitter_rss = $twitter->getFreshRSS(0);
/* ファイルに一時保存する */
@file_put_contents("tw.txt", $twitter_rss);
var_dump($twitter_rss);

class ServiceTwitterRssController
{
  public $twitter_rss_url = "http://twitter-great-rss.herokuapp.com/feed/user?name=a141828410&url_id_hash=3d0bcd52ad998ad6ed1b72d816af4d04544cb26b";
  public $rss;
  public $tweets = [];

  public function getFreshRSS($index=NULL)
  {
    if (@file_get_contents($this->twitter_rss_url)) {
      $rss = file_get_contents($this->twitter_rss_url);
      $this->rss = simplexml_load_string($rss);
    } else {
      /* Defaultの文言追加 */
      $this->rss = "ツィートがありません。";
    }
    foreach($this->rss->channel as $v) {
      foreach ($v as $item) {
        $tweet = $item->description[0];
        /**
         * Filter
         * 画像(メディア)のツィートはいったん削除（スキップ）
         * @userへの返信はスキップ
         * url付きの投稿はスキップ
         */
        if (preg_match("/'http:\/\/pbs.twimg.com\/media\//",$tweet)) {  
          continue;
        } else if (preg_match("/@.*/",$tweet)) {  
          continue;
        } else if (preg_match("/href/",$tweet)) {  
          continue;
        } else {
          $tweet = preg_replace("/<img(.|\s)*?>/","",$tweet);
          array_push($this->tweets, $tweet);
        }
      }
    }
    unset(
      $this->tweets[0],
      $this->tweets[1],
      $this->tweets[2],
      $this->tweets[3]
    );
    $this->tweets = array_merge($this->tweets);

    if ($index == 0 || !empty($index)) {
      $this->tweets = $this->tweets[$index];
      //ファイル保存する、あるいはDB保存する
    } else {
      $this->tweets;
    }

    return $this->tweets;
  }
}