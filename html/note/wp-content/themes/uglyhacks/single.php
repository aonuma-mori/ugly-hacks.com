<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h1 class="h1 article-title"><?php the_title(); ?></h1>
    <div class="text-right fs11 mb10 mr10"><?php the_time('Y.n.j (D)'); ?></div>
    <div class="fs13 wp-contents">
      <?php the_content(); ?>
      <br clear="both">
    </div>
    <div class="post_meta clearfix">
      <div class="category"><?php the_category(); ?></div>
      <div class="tags"><?php the_tags("<span class='tag'>","","</span>"); ?></div>
    </div>
<?php endwhile; else: ?>
    <div>記事がありません。</div>
<?php endif; ?>