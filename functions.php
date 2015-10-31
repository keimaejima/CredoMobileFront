<?php

  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(160, 120, true);

  add_action( 'wp_enqueue_scripts', 'my_script_output');
  function my_script_output() {
    wp_enqueue_script( 'jquery' );
  }
  add_action( 'wp_enqueue_scripts', 'my_script_output2');
  function my_script_output2() {
    wp_enqueue_script( 'my-script', "http://tomorrowgaarusa.frenchkiss.jp/hottocafemichikusa/wp-content/themes/CredoMobileFront/navbutton.js", array( 'jquery') );
}
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
  <section id="popular" class="article_list">
    <h3 class="article_list_heading">関連記事</h3>
    <ul class="article_list_ul">
<?php
    foreach ( $related_posts as $post ) :
      setup_postdata($post);
?>

<li>
    <span class="thum">
          <a href="<?php the_permalink(); ?>">
      <?php
if(has_post_thumbnail()) {
the_post_thumbnail();
} else {
echo '<img src="'.get_template_directory_uri().'/images/no_image.JPG" width="160" height="120"/>';
}
?>
</span>
</a>
      <div class="info">
        <h4>
<a href="#" title=""><?php the_title(); ?></a>
</h4>
        <ul>
          <li class="author"><?php the_author(); ?></li>
          <li class="date"><?php the_time('Y/m/d'); ?></li>
          <li class="tag"><?php the_tags(); ?></li>
        </ul>
    </div></a>
</li>

<?php endforeach;
    wp_reset_postdata();
?>
    </ul>
<?php
  else :
    // no posts
  endif;
else:
  // no tags
endif;
}
