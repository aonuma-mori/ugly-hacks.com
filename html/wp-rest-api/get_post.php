<?php
/**
 * 投稿記事を取得する
 */

// https://ugryhacks.com/note/wp-json
$posts = file_get_contents("https://ugryhacks.com/note/wp-json/wp/v2/posts");
$posts = json_decode($posts);

foreach ($posts as $key => $item) {
  
  echo $key.": ".$item->id."<br>\n";
  echo $key.": ".$item->date."<br>\n";
  echo $key.": ".$item->date_gmt."<br>\n";
  echo $key.": ".$item->guid->rendered."<br>\n";
  echo $key.": ".$item->modified."<br>\n";
  echo $key.": ".$item->modified_gmt."<br>\n";
  echo $key.": ".urldecode($item->slug)."<br>\n";
  echo $key.": ".$item->modified."<br>\n";
  echo $key.": ".$item->status."<br>\n";
  echo $key.": ".$item->type."<br>\n";
  // echo $key.": ".$item->title."<br>\n";
  echo $key.": ".urldecode($item->author)."<br>\n";
  echo $key.": ".$item->status."<br>\n";
  echo $key.": ".urldecode($item->excerpt->rendered)."<br>\n";
  echo $key.": ".$item->featured_media."<br>\n";
  echo $key.": ".$item->comment_status."<br>\n";
  echo $key.": ".$item->ping_status."<br>\n";
  foreach ($item->categories as $k=>$val) {
    echo "    ".$k.": ".$val."<br>\n";
  }
    

  // excerpt->
  //categories
  //ping_status
  echo "---------------------------------------------"."<br>\n";

  // var_dump($item->excerpt->rendered);
  // author



  // echo $key.": ".urldecode($item->content)."<br>\n";
  
  
  
  var_dump($item);
  
  
}





echo "---------------";
var_dump($item);
