<?php get_header(); ?>
<!-- <?php get_post(); ?> -->
    <!-- Main -->
    <div id="main">
        <div id="content" class="container">
            <section class="top_post">
              <?php the_post(); ?>
                <a class="article" href="<?php the_permalink(); ?>">
                    <!-- <img src="http://credo.asia/wp-content/uploads/2015/05/code-459070_640.jpg"> -->
                    <h2><?php the_title(); ?></h2>
                    <ul>
                      <li></li>
                      <li><?php the_time('Y/m/d'); ?></li>
                      <li>タグ</li>
                    </ul>
                </a>
            </section> -->
    <!-- Advertisement -->
        </div>
        <div class="advertisement">
        </div>
    <!-- /Advertisement -->
    <!-- New articles -->
        <section class="new_posts">
          <h3>最近の記事</h3>
          <hr>
          <?php /* The loop */ ?>
          <?php $items = get_posts('numberposts=4', 'offset=1') ?>
            <ul class="new_posts_loop">
            <?php foreach ($items as $post) : ?>

            <?php setup_postdata($post); ?>
              <li>
                <a class="article" href="<?php the_permalink(); ?>">
                  <img src="" alt="" />
                  <p><?php the_title(); ?></p>
                  <small><?php the_time('Y/m/d'); ?></small>
                </a>
              </li>
            <?php endforeach ; ?>
          <button type="button" name="more"></button> -->
        </section>
    <!-- /New articles -->
    </div>
    <!-- /Main -->
    <!-- Contact -->
    <div id="contact_wrapper">
        <p>SNSボタン</p>
        <ul class="contact">
            <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
            <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
            <li><a href="#" class="fa fa-hatebu"><span>Hatena Bookmark</span></a></li>
            <li><a href="#" class="fa fa-line"><span>Line</span></a></li>
        </ul>
    </div>
    <div id="follow">
        <p>ここにFacebook,twitterフォローボタン</p>
    </div>
    <!-- /Contact -->
    <!-- other articles -->
    <div id="others">
        <p>関連記事</p>
    </div>
    <!-- /other articles -->
<?php get_footer(); ?>
