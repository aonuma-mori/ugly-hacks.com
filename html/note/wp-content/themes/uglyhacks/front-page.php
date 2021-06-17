<?php
include("define.php");
include("block/common.php");
?>
    <?php get_header(); ?>

		<style type="text/css">
      /* .grid-item {
        width: 258px;
        word-wrap: break-word;
        border: 1px solid #888;
        padding: 20px;
      }
      .grid-item--width2 { width: 400px; } */
    </style>

		<div class="container top-article-block-masonry">
			<div class="row grid">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="top-article grid-item">
					<div class="top-article-cell">
						<div class="top-article-text">
						<h2>
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
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h2>
						<p>
							<?php if (!empty(get_the_excerpt())) {
								$excerpt = preg_replace('/\A[\x00\s]++|[\x00\s]++\z/u', '', get_the_excerpt());
								$excerpt = str_replace('&times; Close ', '', $excerpt);
								$excerpt = trim($excerpt);
								echo $excerpt;
							} ?>
							<br>
							<?php the_time('Y.n.j (D)'); ?>
						</P>
					</div>
						</div>
				</div>
					<?php endwhile; else: ?>
						<div>記事がありません。</div>
					<?php endif; ?>
					<?php if( function_exists("the_pagination") ) the_pagination(); ?>
			</div>


		<!-- <div class="container top-article-block">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 top-article">
					<div class="top-article-cell">
						<div class="top-article-text">
							<h2>hoge</h2>
							<p>
								hogehogehogoehoge
							</p>
						</div>
					</div>
				</div>
			</div>
		</div> -->

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
<script>
      $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 320
      });
    </script>	
</html>


