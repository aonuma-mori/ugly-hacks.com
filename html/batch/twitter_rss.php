<?php
require '../config.php';
require_once '../vendor/autoload.php';

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
$log->pushHandler(new StreamHandler(__DIR__.'/tweets_update.log', Logger::INFO));


/**
 * Twitter RSS
 */
$twitter = new ServiceTwitterRssController();


/**
 * ファイルに一時保存してトップページで1件だけ取り出す
 * （トップページバナー内）
 */
$twitter_rss = $twitter->getNewestRSS(0);
$old_twitter_rss = @file_get_contents("tweets_newest.json");

if ($old_twitter_rss != $twitter_rss) {
  @file_put_contents("tweets_newest.json", $twitter_rss);
  $log->info($twitter_rss);
} else {
  // $log->info('No updates');
  // nothing
}

/**
 * ファイルに一時保存してトップページで5件だけ取り出す(1件offset)
 * （トップページ）
 */
$offset=2;
$number=10;
$twitter->fetchNumbersRSS($offset,$number);


$re = $twitter->fetchImagemedia();
// var_dump($re);




/**
 * ServiceTwitterRssController
 */
class ServiceTwitterRssController
{
  
  // public $twitter_rss_url = "https://twitter-great-rss.herokuapp.com/feed/user?name=GGM06605451&url_id_hash=197dd4a8ee90b6867995b397dd28e37501a406db";
  //public $twitter_rss_url = "https://twitter-great-rss.herokuapp.com/feed/user?name=aonuma_moriri&url_id_hash=197dd4a8ee90b6867995b397dd28e37501a406db";
  public $twitter_rss_url = "http://twitter-great-rss.herokuapp.com/feed/user?name=a141828410&url_id_hash=3d0bcd52ad998ad6ed1b72d816af4d04544cb26b";
  public $rss;


  public $tweets = [];

  /* fetchNumbersRSS */
  public $tweets_numbers = [];
  public $tweets_numbers_josn = "tweets_numbers.json";

  public $images = [];

  /**
   * テキストのtweetの最新1件を取得する
   * 
   */
  public function getNewestRSS($index=NULL)
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

    $old_twitter_rss = @file_get_contents("tweets_newest.json");

    if ($old_twitter_rss != $this->tweets) {
      @file_put_contents("tweets_newest.json", json_encode($this->tweets,JSON_UNESCAPED_UNICODE));
      // $log->info($this->tweets);
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
   * Twitter Great RSSからRSSをオフセット&件数で取り出す
   * 
   * @para1 int $offset
   * @para1 int $number
   * Twitter Great RSS
   * @url: https://twitter-great-rss.herokuapp.com/
   */
  public function fetchNumbersRSS($offset=0,$number=10)
  {
    $tw = $this->fetchRSS();
    foreach($tw->channel as $v) {
      $i=-5;
      foreach ($v as $item) {
        $datetime = date('Y.m.d H:i',strtotime($item->pubDate[0]));
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
          $tweet_rss['num'] = $i;
          $tweet_rss['tw'] = $tweet;
          $tweet_rss['date'] = $datetime;
          array_push($this->tweets_numbers, $tweet_rss);
          $i++;
        }
      }
    }
    unset(
      $this->tweets_numbers[0],
      $this->tweets_numbers[1],
      $this->tweets_numbers[2],
      $this->tweets_numbers[3]
    );
    /* off set */
    $this->tweets_numbers = array_slice($this->tweets_numbers, $offset, $number);
    var_dump($this->tweets_numbers);
    $tweets = json_encode($this->tweets_numbers,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
    var_dump($tweets);
    @file_put_contents($this->tweets_numbers_josn, $tweets);

    return $tweets;
  }

  /**
   * Twitter Great RSSからRSSを取り出す
   * 
   * 基本的にはこのmethodから実行してTweetの情報を取得します。
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