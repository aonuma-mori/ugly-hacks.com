<?php
include("../config.php");
include("define.php");
include("block/common.php");
?>
<?php get_header(); ?>


<?php
  /**
   * カテゴリーを取得
   */
  $category = get_the_category();
  $cat = $category[0];
  $cat_name = $cat->name;
  $cat_id = $cat->cat_ID;
  $cat_slug = $cat->slug;
  $cat_link = esc_url(get_category_link($cat_id));

  // echo $cat_name;
  // echo $cat_link; 
?>

<div class="container page-header">
	<p class="breadcrumb">
		<span class="page-out">
			<a href="/note/">Home</a>
		</span>&nbsp;>&nbsp;
		<span class="page-scope">
    <a href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a>
    </span>&nbsp;>&nbsp;
    <span class="page-scope">
      <?php echo mb_substr(get_the_title(),0,12)."..."; ?>
    <span>
	</p>
</div>

<div class="container article-block">
  <div class="row">
    <div class="col-sm-7 col-md-8 col-lg-9 main">
      <div class="single-article">
        <h2><?php echo the_title(); ?></h2>
        <?php
          /* 許可されたIPアドレスのみ編集可能 */
          foreach ($parameter["ug_allow_ips"] as $allowip) {
            if ($_SERVER["REMOTE_ADDR"] == $allowip) {
              edit_post_link('EDIT POST' , '<p class="edit_post_link">' , '</p>');
              break;
            }
          }
          echo "<!--".$_SERVER["REMOTE_ADDR"]."-->";
        ?>
        <div class="single-article-text">
          <?php the_content(); ?>
          <br clear="both">
          <?php the_time('Y.n.j (D)'); ?>
        </div>
        <div class="post_meta clearfix">
          <div class="category"><?php the_category(); ?></div>
          <div class="tags"><?php the_tags("<span class='tag'>","","</span>"); ?></div>
        </div>
      </div>
    </div>
    <div class="col-sm-5 col-md-4 col-lg-3 sidebar">
      <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="trans-article">
    <?php if (get_previous_post()):?>
    <?php previous_post_link('←%link', '前の記事へ'); ?>
    <?php endif; ?>| 
    <?php if (get_next_post()):?>
    <?php next_post_link('%link→', '次の記事へ'); ?>
    <?php endif; ?>
  </div>
</div>




</main><!-- header-include -->

  <footer>
    <div class="copyright">
      <p class="text-center">(c) 2021 uglyhacks.com All rights reserved.</p>
    </div>
  </footer>

<script type="text/javascript" src="（ここにjsのURL）"></script>
</body>
</html>
