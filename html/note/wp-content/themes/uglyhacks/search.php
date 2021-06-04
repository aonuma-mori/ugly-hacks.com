<?php
include("define.php");
include("block/common.php");
var_dump(WP_PLUGIN_DIR);
?>
<?php get_header(); ?>

<div class="container page-header">
	<p class="breadcrumb">
		<span class="page-out">
			<a href="/note/">Home</a>
		</span>&nbsp;>&nbsp;
		<span class="page-scope">Search</span>
	</p>
	<h2>Search</h2>
  <div class="page-header-text">
    <p>
    <?php
    if (get_search_query()) {
      echo "「".get_search_query()."」を検索しています。";
    }
    ?>
    </p>
  </div>
</div>

<div class="container article-block">
  <div class="row">
    <div class="col-sm-7 col-md-8 col-lg-9 main">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="article-cell">
          <?php
          $thumbnail_id = get_post_thumbnail_id();
          $eimg = wp_get_attachment_image_src( $thumbnail_id , 'small' );
          // var_dump($eimg[0]);
          // the_post_thumbnail('thumbnail');
          ?>
          <?php if ($eimg[0]) { ?>
          <div class="photo-frame">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo $eimg[0]; ?>" class="top-article-cell-photo">
            </a>
          </div>
          <?php } ?>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p><?php the_time('Y.n.j (D)'); ?>　
          <?php if (!empty(get_the_excerpt())) {
            $excerpt = preg_replace('/\A[\x00\s]++|[\x00\s]++\z/u', '', get_the_excerpt());
            $excerpt = str_replace('&times; Close ', '', $excerpt);
            $excerpt = trim($excerpt);
            echo $excerpt;
          } ?>
					</P>
        </div> 
				<br clear="both">   
      <?php endwhile; else: ?>
        <div>記事がありません。</div>
      <?php endif; ?>
    </div>
    <div class="col-sm-5 col-md-4 col-lg-3 sidebar">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
      <?php endif; ?>
    </div>
  </div>
</div>

<div class="container top-article-block">
  <div class="row">
    <div class="container cat-tag-index">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 top-categories">
          <?php
          $categories = get_categories();
          foreach($categories as $category) {
            echo '<li><a href="'.get_category_link($category->term_id).'">'.$category->name.'</a></li>';
          }
          ?>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 top-tags">
        <?php
        $tags = get_tags();
        foreach( $tags as $tag) { 
        echo '<li><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></li>';
        }
        ?>
    </div>
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


