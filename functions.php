<?php
  // function add_theme_support('post-thumbnails');

  function related_post_output(){
    global $post;
    $tags = wp_get_post_tags($post->ID);
    $tagIDs = array();
    if ($tags) :
      $tagcount = count($tags);
      for ($i = 0; $i < $tagcount; $i++) {
        $tagIDs[$i] = $tags[$i]->term_id;
      }
      $args = array(
        'tag__in' => $tagIDs,
        'post__not_in' => array($post->ID),
        'posts_per_page' => 5
      );
      $related_posts = get_posts( $args );
      if ($related_posts ) :
?>
  <nav role="navigation" class="mod-navRelation">
    <h2 class="mod-navRelation-heading">関連記事</h2>
    <ul class="mod-navRelation-list">
<?php
    foreach ( $related_posts as $post ) :
      setup_postdata($post);
?>
      <li><a href="<?php the_permalink() ; ?>"><?php the_title(); ?></a></li>
<?php endforeach;
    wp_reset_postdata();
?>
    </ul>
  </nav>
<?php
  else :
    // no posts
  endif;
else:
  // no tags
endif;
}
