<?php
include("define.php");
include("block/common.php");
?>
<?php get_header(); ?>

<ol class="breadcrumb mb10 breadcrumb-101">
  <li><a href="/">Home</a></li>
  <li>Archives</li>
</ol>

  <div class="container mt70">
    <div class="row">
      <div class="col-sm-12 col-md-9">

        <div class="archives-page">
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
        </div>

      </div>




      <div class="col-md-3">
        <?php get_template_part('sidebar'); ?>
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
