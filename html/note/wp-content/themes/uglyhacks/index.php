
<!-- トップページ -->
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
          <a class="navbar-brand site-title" href="<?php echo $blog_home_url; ?>"><h1 class="site-title">Uglyhacks</h1></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown link
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <form class="d-flex align-items-end pc">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary" type="submit">
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
		})
		</script>

    <form class="d-flex align-items-end sp">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>
    </form> 


		

		<div class="container top-article-block">
			<div class="row">

			<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
					<!-- <img src="/note/wp-content/themes/uglyhacks/assets/img/dummy.jpg" class="top-article-cell-photo"> -->
						<div class="top-article-text">
							<h2>Githubアカウントを複数個で使い分ける設定</h2>
							<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
					<img src="/note/wp-content/themes/uglyhacks/assets/img/dummy.jpg" class="top-article-cell-photo">
						<div class="top-article-text">
							<h2>Githubアカウントを複数個で使い分ける設定</h2>
							<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>
			
				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2 top-article">
					<div class="top-article-cell">
						<h2>Githubアカウントを複数個で使い分ける設定</h2>
						<p>あいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえおあいうえお</P>
					</div>
				</div>

			</div>
		</div>


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
      <div class="copyright">
				<p class="text-center">(c) 2021 uglyhacks.com All rights reserved.</p>
      </div>
    </footer>
    <script type="text/javascript" src="（ここにjsのURL）"></script>
  </body>
	
</html>


