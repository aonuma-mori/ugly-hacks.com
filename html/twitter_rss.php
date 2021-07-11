<?php
require 'config.php';
require_once 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/**
 * $log->info('Foo');
 * $log->notice('Foo');
 * $log->warning('Foo');
 * $log->error('Foo');
 * $log->critical('Foo');
 * $log->alert('Foo');
 * $log->emergency('Foo');
 */
$log = new Logger('twitter_rss');
$log->pushHandler(new StreamHandler(__DIR__.'/your.log', Logger::INFO));



/**
 * Twitter RSS
 */
$twitter = new ServiceTwitterRssController();
$twitter_rss = $twitter->getFreshRSS(0);
/* ファイルに一時保存してトップページで取り出す */
$old_twitter_rss = @file_get_contents("tw.txt");
if ($old_twitter_rss != $twitter_rss) {
  @file_put_contents("tw.txt", $twitter_rss);
  $log->info($twitter_rss);
} else {
  // $log->info('No updates');
  // nothing
}


$re = $twitter->fetchImagemedia();
// var_dump($re);




/**
 * 
 */
class ServiceTwitterRssController
{
  
  // public $twitter_rss_url = "https://twitter-great-rss.herokuapp.com/feed/user?name=GGM06605451&url_id_hash=197dd4a8ee90b6867995b397dd28e37501a406db";
  //public $twitter_rss_url = "https://twitter-great-rss.herokuapp.com/feed/user?name=aonuma_moriri&url_id_hash=197dd4a8ee90b6867995b397dd28e37501a406db";
  public $twitter_rss_url = "http://twitter-great-rss.herokuapp.com/feed/user?name=a141828410&url_id_hash=3d0bcd52ad998ad6ed1b72d816af4d04544cb26b";
  public $rss;
  public $tweets = [];
  public $images = [];

  /**
   * para 0で最新のツィート1件を取得する
   * 
   */
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
         * 画像投稿は削除
         * 
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

  /**
   * Tweetの画像投稿を取得する
   * @userへの返信はスキップ
   * url付きの投稿はスキップ
   * テキスト投稿スキップ
   * 
   */
  public function fetchImagemedia()
  {
    $tw = $this->fetchRSS();
    foreach($tw->channel as $v) {
      
      foreach ($v as $item) {
        $tweet = $item->description[0];
        /**
         * iconの除去
         * @userへの返信はスキップ
         */
        $tweet = preg_replace("/<img src='http:\/\/pbs.twimg.com\/profile_images\/.*\/.*_normal.jpg' width='16px' height='16px' \/>/","",$tweet);
        if (preg_match("/@.*/",$tweet)) {  
          continue;
        }
        $img_pattern = '/<img.*?src\s*=\s*[\"|\'](.*?)[\"|\'].*?>/i';
        $img = preg_match($img_pattern, $tweet, $images);
        if (!empty($images[0])) {
          array_push($this->images, $images[0]);
        }
      }
    }
    return $this->images;
  }

  /**
   * Twitter Great RSSからRSSを取り出す
   * 
   * Twitter Great RSS
   * @url: https://twitter-great-rss.herokuapp.com/
   */
  public function fetchRSS()
  {
    if (@file_get_contents($this->twitter_rss_url)) {
      $rss = file_get_contents($this->twitter_rss_url);
      $this->rss = simplexml_load_string($rss);
    } else {
      /* Defaultの文言追加 */
      $this->rss = "ツィートがありません。";
    }
    return $this->rss;
  }



}