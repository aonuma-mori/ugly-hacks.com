
<!-- トップページ -->
<?php
include("define.php");
include("block/common.php");
?>
<!DOCTYPE html>
<html>
  <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/<?php echo $blog_page_type; ?>#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
    <title><?php echo $blog_title; ?></title>
    <meta name="description" content="<?php echo $blog_description; ?>">

    <meta name="robots" content="index,follow">

    <meta property="og:admins" content="osamthing">
    <meta property="og:title" content="<?php echo $blog_title; ?>">
    <meta property="og:type" content="<?php echo $blog_page_type; ?>">
    <meta property="og:description" content="<?php echo $blog_description; ?>">
    <meta property="og:url" content="<?php echo $blog_permalink; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:site_name" content="<?php echo $blog_title; ?>">
    <meta name="twitter:card" content="Summary Card">
    <meta name="twitter:site" content="@a141828410">

    <link rel="canonical" href="<?php echo $blog_permalink; ?>">

    <link rel="stylesheet" href="（cssのURL）" media="screen">
    <script type="text/javascript" src="（jsのURL）"></script>

    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="（アップルタッチアイコンの画像URL）">

    <!-- （googleアナリティクスを入れる箇所①） -->
    <!-- （他アナリティクス等を入れる箇所） -->
  </head>
  <body>
    <!-- （googleアナリティクスを入れる箇所②） -->
    <header>
    </header>
    <main>
      <h1><a href="<?php echo $blog_home_url; ?>">uglyhacks</a></h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="article-contents mb30">
            <div class="fs18 index-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="fs11 text-right mr15"><?php the_time('Y.n.j D'); ?></div>
            <div class="fs13 wp-contents">
              <!-- icatch image -->
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bland-icon.png" class="float-left" style="margin:0 15px 0 0; width: 45px;"> -->

              <?php
              $thumbnail_id = get_post_thumbnail_id();
              $eimg = wp_get_attachment_image_src( $thumbnail_id , 'small' );
              // var_dump($eimg[0]);
              // the_post_thumbnail('thumbnail');
              ?>
              <?php if ($eimg[0]) { ?>
              <div class="trim-thumbnail float-left"><img src="<?php echo $eimg[0]; ?>" class="top-thumbnali"></div>
              <?php } ?>

              <?php if (!empty(get_the_excerpt())) {
                  $excerpt = preg_replace('/\A[\x00\s]++|[\x00\s]++\z/u', '', get_the_excerpt());
                  $excerpt = str_replace('&times; Close ', '', $excerpt);
                  $excerpt = trim($excerpt);
                  echo $excerpt;
              } ?>

            </div>
            <div class="top-post-meta">
              <div class="top-category"><?php the_category(); ?></div>
              <div class="top-tags"><?php the_tags("<span class='tag'><i class=\"fas fa-tag\"></i>","","</span>"); ?></div>
            </div>

          </div>
          <?php endwhile; else: ?>
              <div>記事がありません。</div>
          <?php endif; ?>

          <?php if( function_exists("the_pagination") ) the_pagination(); ?>
      </div>
    </main>
    <footer>
    </footer>
    <script type="text/javascript" src="（ここにjsのURL）"></script>
  </body>
</html>
