<?php
require "config.php";
require "app.php";

/**
 * 最新のTweetを1件取り出す（テキストのみ）
 * service:: @twitter_rss.php
 */
$tw = @file_get_contents("tw.txt");
?>
<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
		<meta name="env" content="<?php echo $ug_meta_env; ?>">
    <meta name="post_id" content="<?php echo $parameter['ug_meta_post_id']; ?>">
    <title><?php echo $ug_meta_title; ?></title>
    <meta name="description" content="<?php echo $ug_meta_description; ?>">
    <meta name="robots" content="index,follow">
    <meta property="og:admins" content="<?php echo $ug_meta_og_admins; ?>">
    <meta property="og:title" content="<?php echo $ug_meta_title; ?>">
    <meta property="og:type" content="website">
    <meta property="og:description" content="<?php echo $ug_meta_description; ?>">
    <meta property="og:url" content="<?php echo $ug_meta_og_url; ?>">
    <meta property="og:image" content="<?php echo $ug_meta_og_image; ?>">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:site_name" content="<?php echo $ug_meta_title; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@a141828410">
    <meta name="twitter:description" content="@a141828410">
    <meta name="twitter:image" content="<?php echo $ug_meta_og_image; ?>">
    <link rel="canonical" href="<?php echo $ug_meta_og_url; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="/note/wp-content/themes/uglyhacks/assets/css/main.css" media="screen">
		<link rel="stylesheet" href="/assets/css/ug_main.css" media="screen">		
    <script type="text/javascript" src="/note/wp-content/themes/uglyhacks/assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/note/wp-content/themes/uglyhacks/assets/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="/note/wp-content/themes/uglyhacks/assets/js/main.js"></script>
    <link rel="icon" href="assets/image/favicons/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="assets/image/favicons/apple-touch-icon.png">
		<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
		
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4D688116ZM"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-4D688116ZM');
    </script>
    <!-- （他アナリティクス等を入れる箇所） -->
    </head>
  <body>
<!-- （googleアナリティクスを入れる箇所②） -->

<header>
  <div class="break-point-bar"></div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand site-title" href="<?php echo $parameter['ug_url']; ?>/"><h1 class="site-title">Uglyhacks</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>    
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo $parameter['ug_url']; ?>/note/">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $parameter['ug_url'].$parameter['ug_archives_page']; ?>">Archives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $parameter['ug_url'].$parameter['ug_profile_page'];?>">Profile</a>
          </li>
        </ul>
      </div>
      <form action="<?php echo $parameter['ug_url']; ?>/note" class="d-flex align-items-end pc searchform" role="search" method="get" id="searchform">
        <input name="s" id="s" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary" type="submit" name="search">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
        </button>
      </form>
    </div>
  </nav>
</header>

<main>
	<div class="bg-light p-3 p-sm-5 mb-4 border-top top-banner lazyload" id="top-banner">
		<div class="container" id="top-banner-text">
			<h1 class="subtitle display-4"><?php echo $parameter['ug_subtitle']; ?></h1>
			<p class="lead">
        <?php echo $tw; ?><span class="tw-icon">
        <?php //echo $parameter['ug_lead']; ?>
      </p>
      <br>
			<a class="btn btn-secondary btn-lg" href="/note/" role="button">Blog</a>
		</div>
	</div>

	<div class="container search-form">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
		</div>
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
				<form action="<?php echo $parameter['ug_url']; ?>/note" class="d-flex align-items-end sp text-right">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-secondary" type="submit">
						<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
							<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
						</svg>
					</button>
				</form> 
			</div>
		</div>	
	</div>

  <!-- http://twitter-great-rss.herokuapp.com/feed/user?name=a141828410&url_id_hash=3d0bcd52ad998ad6ed1b72d816af4d04544cb26b -->
  <div class="container twitter" id="twitter">
    <div class="row">

      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 block2 twitter-block" id="twitter-block">
        <div class="image-frame">
          <a href="https://twitter.com/a141828410" class="tw-account" target="_blank">
            <img src="assets/image/icon/moriria1.jpg" class="twitter-icon" alt="モリリa1@a141828410">
          </a>
        </div>
        <p>
          <?php echo $tw; ?><span class="tw-icon"><img src="assets/image/icon/tw.png"></span>
        </p>
			</div>

      <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 block2 text-block">
        皆様からのフィードバックに基づき、パソコン版とノートパソコン版の Google Meet をシンプルにして、より多くの動画フィードとコンテンツを表示できるようにしたほか、コントロールも見つけやすくなりました。
			</div>
    </div>
  </div>

	<!-- <div class="container home">
		<div class="row">
			<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
				hoge
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
				hoge
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
				hoge
			</div>
			<div class="col-sm-6 col-md-3 col-lg-3 col-xl-3">
				hoge
			</div>
		</div>
	</div> -->

</main>
    
    <div class="container subfooter">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
          <a href="https://blogmura.com/ranking/in?p_cid=11110730" target="_blank"><img src="https://b.blogmura.com/logo-blogmura-circle.svg" width="40" height="40" border="0" alt="ブログランキング・にほんブログ村へ" /></a>
        </div>
      </div> 
    </div> 
    
    <footer>
      <div class="copyright">
				<p class="text-center">(c) 2021 uglyhacks.com All rights reserved.</p>
      </div>
    </footer>
    
  </body>

  <script type="text/javascript" src="assets/js/top-vue-component.js"></script>
</html>






