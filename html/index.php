<!DOCTYPE html>
<html lang="ja">
  <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="email=no,telephone=no,address=no">
		<meta name="env" content="sand">
    <title>Ugryhacks (アグリーハックス)</title>
    <meta name="description" content="WEB制作に関連する話題を扱う技術ブログです。PHP,Python,AWS,GCP,Javascript,Vue.jsなどモダンなWEB開発を中心に記事を書いております。">
    <meta name="robots" content="index,follow">
    <meta property="og:admins" content="osamthing">
    <meta property="og:title" content="Ugryhacks (アグリーハックス)">
    <meta property="og:type" content="website">
    <meta property="og:description" content="WEB制作に関連する話題を扱う技術ブログです。PHP,Python,AWS,GCP,Javascript,Vue.jsなどモダンなWEB開発を中心に記事を書いております。">
    <meta property="og:url" content="http://localhost:8000/note">
    <meta property="og:image" content="http://localhost:8000/note/wp-content/themes/uglyhacks/assets/img/og-uglyhacks.png">
    <meta property="og:locale" content="ja_JP">
    <meta property="og:site_name" content="Ugryhacks (アグリーハックス)">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@a141828410">
    <meta name="twitter:description" content="@a141828410">
    <meta name="twitter:image" content="http://localhost:8000/note/wp-content/themes/uglyhacks/assets/img/og-uglyhacks.png">
    <link rel="canonical" href="http://localhost:8000/note">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/note/wp-content/themes/uglyhacks/assets/css/main.css" media="screen">
		
    <script type="text/javascript" src="/note/wp-content/themes/uglyhacks/assets/js/main.js"></script>
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="（アップルタッチアイコンの画像URL）">

		<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
		
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
            <a class="nav-link active" aria-current="page" href="http://localhost:8000/note">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/note/?page_id=59">Archives</a>
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
      <form action="http://localhost:8000/note" class="d-flex align-items-end pc searchform" role="search" method="get" id="searchform">
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
		})
		</script>

		<div class="container search-form">
			<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
			</div>
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
					<form action="http://localhost:8000/note" class="d-flex align-items-end sp text-right">
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

		<div class="container top-article-block">
			<div class="row">

						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=54">
								局所的統計の使い道 &#8211; あなたのチンポは大きいのか小さいのか							</a>
						</h2>
						<p>2021.6.2 (水)							母集団が多ければ多いほどその統計的データは現実に漸近するということは誰でも高等学校の数学で習う筈だ。地球上で生きている人間すべてを母集団にすることができれば髪の毛が黒い人間の割合は正確に算出できるというわけだ。しかしそ......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=49">
								ECCUBE4でデバックする							</a>
						</h2>
						<p>2021.5.31 (月)							開発環境ではデバッカーが使えるので、それのデバック情報を出力する方法です。 Controllerで利用する場合 dump($hoge); コントローラでダンプを出力したい場合には、dumpメソッドを使用します。 Twig......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=45">
								ECCUBE4のログイン周りの解析							</a>
						</h2>
						<p>2021.5.31 (月)							/mypage/login のURLでログイン画面になります。 Routuingは以下のファイルで行っています。で、そのまんまコントローラになっています。 /src/Eccube/Controller/Mypage/My......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=43">
								精神性と身体性							</a>
						</h2>
						<p>2021.5.29 (土)							よく美術大学や文化系のアホどもの考え方にありがちなのが、精神性を重んじることでスポーツをしない輩です。正直スポーツをしない人間に精神性を重んじることができるだろうか。運動神経が鈍いということはすなわち精神性も同様に未熟で......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=39">
								哲学 &#8211; Philosophy &#8211; は終焉したのか							</a>
						</h2>
						<p>2021.5.29 (土)							大学で哲学を専攻したところで就職先もなければ身につける技術もない。知識の宝庫といわれる哲学なのに最終的には役に立つ知識すらないといった学問が哲学です。通常ここにはアイロニーや逆説が含まれていて、「にもかかわらず哲学は」と......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=34">
								モテるための指南書  No.1 &#8211; 悟りの境地と二律背反							</a>
						</h2>
						<p>2021.5.28 (金)							いわゆるコンプレックス産業の中にはモテるための情報が商材として売られている。売る方と買う方の需要と供給が一致しているのである。モテるための指南書は、SMSやインターネットを中心に無料から数十万円のものまで様々ではあるがそ......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																								<div class="photo-frame">
                  <a href="http://localhost:8000/note/?p=30">
                    <img src="http://localhost:8000/note/wp-content/uploads/2021/05/スクリーンショット-2021-05-27-19.48.26.png" class="top-article-cell-photo">
                  </a>
                </div>
															<a href="http://localhost:8000/note/?p=30">
								Navbar (ナビゲーションバー)							</a>
						</h2>
						<p>2021.5.25 (火)							https://getbootstrap.jp/docs/5.0/components/navbar/						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																								<div class="photo-frame">
                  <a href="http://localhost:8000/note/?p=28">
                    <img src="http://localhost:8000/note/wp-content/uploads/2021/05/Gerhard-Richter-Betty.jpg" class="top-article-cell-photo">
                  </a>
                </div>
															<a href="http://localhost:8000/note/?p=28">
								日本語WEBフォントは何がベストか？							</a>
						</h2>
						<p>2021.5.25 (火)							font-family: 'Noto Sans JP', sans-serif; ですね。 CDNはこれ。 https://fonts.googleapis.com/css2?family=Noto+Sans+JP&am......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=26">
								Githubアカウントを複数個で使い分ける設定							</a>
						</h2>
						<p>2021.5.25 (火)							Githubで複数アカウントを使い分けたい場合、.ssh/configの設定がときおりよくわからなくなるので備忘録。 通常SSHの場合は以下のアクセスとなる。 git@github.com:USER_NAME/REPOS......						</P>
					</div>
				</div>
			</div>
						<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
				<div class="top-article-cell">
					<div class="top-article-text">
						<h2>
																							<a href="http://localhost:8000/note/?p=24">
								markdown test							</a>
						</h2>
						<p>2021.5.25 (火)							test						</P>
					</div>
				</div>
			</div>
			              </div>

			<div class="container cat-tag-index">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 top-categories">
						<li><a href="http://localhost:8000/note/?cat=6">Philosophy</a></li><li><a href="http://localhost:8000/note/?cat=9">WEB制作</a></li><li><a href="http://localhost:8000/note/?cat=2">テストカテゴリー</a></li><li><a href="http://localhost:8000/note/?cat=1">未分類</a></li><li><a href="http://localhost:8000/note/?cat=5">社会</a></li>					</div>
					<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 top-tags">
						<li><a href="http://localhost:8000/note/?tag=bootstrap5">Bootstrap5</a></li><li><a href="http://localhost:8000/note/?tag=ec-cube4">EC-CUBE4</a></li><li><a href="http://localhost:8000/note/?tag=git">Git</a></li><li><a href="http://localhost:8000/note/?tag=philosophy">Philosophy</a></li><li><a href="http://localhost:8000/note/?tag=symfony3">Symfony3</a></li><li><a href="http://localhost:8000/note/?tag=%e6%ad%a6%e8%a1%93%e3%83%bb%e6%a0%bc%e9%97%98%e6%8a%80">武術・格闘技</a></li>					</div>
				</div>
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


