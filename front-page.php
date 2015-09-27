<?php get_header(); ?>
<!-- <?php get_post(); ?> -->
    <!-- Main -->
    <article id="main">
        <div id="content" class="container">
            <section id="header-front">
              <?php the_post(); ?>
                <a class="article" href="<?php the_permalink(); ?>">
                    <!-- <img src="http://credo.asia/wp-content/uploads/2015/05/code-459070_640.jpg"> -->
                </a>
                <img src="http://credo.asia/wp-content/uploads/2015/05/code-459070_640.jpg">
                <section id="info-front">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <ul>
                      <li class="author"></li>
                      <li class="date"><?php the_time('Y/m/d'); ?></li>
                      <li class="tag">IT・テクノロジー</li>
                    </ul>
                </section>
    <!-- Advertisement -->
        <div class="advertisement">
          <p>広告</p>
        </div>
    <!-- /Advertisement -->
    <!-- New articles -->
        <section id="recent">
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
        <section id="popular">
          <p>人気記事</p>
        </section>
    </div>
  </article>
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
      <p>
        関連記事
      </p>
      <?php related_post_output(); ?>
    </div>
    <!-- /other articles -->
<?php get_footer(); ?>
