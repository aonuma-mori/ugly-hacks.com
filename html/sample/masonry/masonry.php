<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>masonry</title>
    <style type="text/css">
      .grid-item {
        width: 258px;
        word-wrap: break-word;
        border: 1px solid #888;
        padding: 20px;
      }
      .grid-item--width2 { width: 400px; }
    </style>
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  </head>
  <body>
    <div class="grid">
      <?php
      $count = 0;
      while($count<=50){
        $str = "abcdefghijklmnopqrstuvwxyzあいうえおかきくけこさしすせそたちつてとなにぬねのはひふへほまみいむめもやゆよわいうえを";
        $str = mb_substr($str, 0,mt_rand(10,50));
        echo '<div class="grid-item">('.$count.')'.$str.'</div>';
        $count++;
      }


      ?>
      <div class="grid-item">...</div>
      <div class="grid-item grid-item--width2">...</div>
    </div>
  </body>
    <script>
    $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: 300
    });
    </script>
</html>



