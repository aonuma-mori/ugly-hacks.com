<?php
include("define.php");
include("block/common.php");
?>
<?php get_header(); ?>

<div class="container page-header">
	<p class="breadcrumb">
		<span class="page-out">
			<a href="/note/">Home</a>
		</span>&nbsp;>&nbsp;
		<span class="page-scope">
			Archives
    </span>
	</p>

	<div class="container article-block">
  <div class="row">
    <div class="col-sm-7 col-md-8 col-lg-9 main">
      <div class="single-article">
        <h2>Archives</h2>
        <div class="single-article-text">

        <?php
					/* All Categories */
					$args = array(
						'orderby' => 'order',
						'order' => 'ASC',
						'exclude' => '1'
					);
					$categories = '';
					foreach (get_categories($args) as $key => $value) {
						echo "<h3 class=\"archives_block_title fs18\">".$value->cat_name."</h3>";
						echo '<ul class="link_block">';
						query_posts('posts_per_page=-1');
						if ( have_posts() ) :
								while ( have_posts() ) : the_post();
								if (in_category(array($value->cat_name))) {
									$permalink = get_the_permalink();
									echo '<li>';
									echo '<a href="'.$permalink.'">';
									the_title();
									echo '</a>';
									echo '</li>';
								}
							endwhile;
						else:
							// get nothing
						endif;

						/* Set Query */
						wp_reset_query();
						echo '</ul>';
						echo '<br clear="both">';
					}
				?>

          <br clear="both">
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
