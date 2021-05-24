<?php
function twpp_change_excerpt_more( $more ) {
  return '......';
}
add_filter( 'excerpt_more', 'twpp_change_excerpt_more' );