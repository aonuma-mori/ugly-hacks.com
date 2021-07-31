<?php
function twpp_change_excerpt_more( $more ) {
  return '......';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );

/* アイキャッチ画像を有効にする。*/
// add_theme_support('post-thumbnails');

function my_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'my_theme_setup');

/* Sidebar */
if ( function_exists('register_sidebar') ) register_sidebar();


/* Media html tag */
function image_wrap($html, $id, $caption, $title, $align, $url, $size, $alt){
  $html = <<< EOM
  <!-- Button trigger modal -->
  <a data-bs-toggle="modal" data-bs-target="#modalid_{$id}">
    <img src="{$url}" width="100%" alt="{$title}">
  </a>
  <!-- Modal -->
  <div class="modal fade" id="modalid_{$id}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{$url}" width="100%" alt="{$title}">
        </div>
        <div class="modal-footer">
          <h5 class="modal-title" id="exampleModalLabel">{$title}</h5>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
EOM;
  $html = preg_replace("/\n/","", $html);
  $html = preg_replace("/\s+/"," ", $html);
  $html = preg_replace("/\s+/"," ", $html);
  $html = '<div id="imageblock" class="imageblock col-sm-12 col-md-12 col-lg-6">'."\n".$html."\n".'</div>'."\n";
	return $html;
}
add_filter('image_send_to_editor','image_wrap',10,8);


/* 新規記事の場合はデフォルトで指定のテキストを挿入する */
add_filter('the_editor_content', 'ogatism_default_content');
function ogatism_default_content($content) {
  if (empty($content)) {
    $str = <<<EOM

## foo

### bar

#### baz




---------------------------------
Reference:
- <a href="#" target="_blank">foo</a>
- <a href="#" target="_blank">bar</a>


EOM;

  return $str;
  } else {
    return $content;
  }
}


/* wordpress loop 順序変更 */
function twpp_change_sort_order( $query ) {
  if ( is_admin() || ! $query->is_main_query() ) {
    return;
  }
  /**
   * homeの順は更新順にする
   */
  if ( $query->is_home() ) {
    $query->set( 'order', 'DESC' );
    $query->set( 'orderby', 'modified' );
  }
}
add_action( 'pre_get_posts', 'twpp_change_sort_order' );
