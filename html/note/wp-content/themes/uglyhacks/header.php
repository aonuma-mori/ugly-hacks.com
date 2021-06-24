<?php
include("define.php");
include("block/common.php");
?>
<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/<?php echo $blog_page_type; ?>#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
		<meta name="env" content="<?php echo WP_ENV; ?>">
    <meta name="post_id" content="<?php echo $post_id; ?>">
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
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@a141828410">
    <meta name="twitter:description" content="@a141828410">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">
    <link rel="canonical" href="<?php echo $blog_permalink; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BLOG_CSS_PATH; ?>" media="screen">
		
    <script type="text/javascript" src="/note/wp-content/themes/uglyhacks/assets/js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/note/wp-content/themes/uglyhacks/assets/js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="<?php echo BLOG_JS_PATH; ?>"></script>
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="（アップルタッチアイコンの画像URL）">

		<?php if (WP_ENV == 'prod') : ?>
			<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
		<?php else : ?>
			<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
		<?php endif; ?>

    <!-- （googleアナリティクスを入れる箇所①） -->
    <!-- （他アナリティクス等を入れる箇所） -->
    </head>
  <body>
<!-- （googleアナリティクスを入れる箇所②） -->
<header>
  <div class="break-point-bar"></div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand site-title" href="/"><h1 class="site-title">Uglyhacks</h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo $blog_home_url; ?>">Home</a>
          </li>
          <li class="nav-item">
            <?php
              if (WP_ENV == "sand") {
                $archives_path = "/note/?page_id=59";
              } else {
                $archives_path = "/note/archivepage/";
              }
            ?>
            <a class="nav-link" href="<?php echo $archives_path; ?>">Archives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Frequently index
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="https://ugryhacks.com/note/docker/">Docker</a></li>
              <li><a class="dropdown-item" href="https://ugryhacks.com/note/laravel/">Laravel</a></li>
              <li><a class="dropdown-item" href="https://ugryhacks.com/note/profile/">Profile</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <form action="<?php echo $blog_home_url; ?>" class="d-flex align-items-end pc searchform" role="search" method="get" id="searchform">
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
		<!-- <div id="app-1">{{ message }}</div>  -->
		<script>
		var app1 = new Vue({
			el: '#app-1',                        /* #app-1 要素に対して Vue を適用する */
			data: { message: 'Hello world!' }    /* message という名前のデータを定義する */
		});

		</script>

		<div class="container search-form">
			<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
			</div>
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
					<form action="<?php echo $blog_home_url; ?>" class="d-flex align-items-end sp text-right">
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
