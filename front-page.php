<?php get_header(); ?>
<!-- Header -->
<!-- Main -->
<article id="main">
  <div id="content" class="container">
    <a href="<?php the_permalink(); ?>">
      <section id="header-front" style="">
        <?php the_post(); ?>
        <section id="info-front">
          <h3><?php the_title(); ?></h3>
          <ul>
            <li class="author"><?php the_author(); ?></li>
            <li class="date"><?php  ('Y/m/d'); ?></li>
            <li class="tag"><?php the_tags(); ?></li>
          </ul>
        </section>
      </section>
    </a>
    <!-- Advertisement -->
    <p>広告</p>
    <!-- /Advertisement -->
    <!-- New articles -->
    <section id="recent" class="article_list">
      <h3>最新の記事ぴよよよよよよよよy</h3>
      <hr>
      <?php /* The loop */ ?>
      <?php $items = get_posts('numberposts=10', 'offset=1') ?>
      <ul class="new_posts_loop">
        <?php foreach ($items as $post) : ?>
          <?php setup_postdata($post); ?>
          <li>
            <a href="<?php the_permalink(); ?>" title="">
              <span class="thum">
                <?php
                if(is_home()) {
                  if(has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    echo '<img src="'.get_template_directory_uri().'/images/no_image.JPG" width="160" height="120"/>';
                  }
                } ?>
              </span>
              <div class="info">
                <h4><a href='#' title=""><?php the_title(); ?></a></h4>
                <ul>
                  <li class="author"><?php the_author(); ?></li>
                  <li class="date"><?php the_time('Y/m/d'); ?></li>
                  <li class="tag"><?php the_tags(); ?></li>
                </ul>
              </div>
            </a>
          </li>
        <?php endforeach ; ?>
        <div class="cf">ちんこ</div>
        <div class="fr_btn">もっと記事をみる。</div>
      </section>
      <!-- /New articles -->
      <!-- Popular articles -->
      <section id="popular" class="article_list">
        <h3>人気の記事</h3>
        <ul>
          <li>
            <span class="thum">
              <a href="http://github.com" title="">
                <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/github-mark@1200x630.png">
              </a>
            </span>
            <div class="info">
              <h4>
                <a href="#" title="">Github -Where Software is Built-</a>
              </h4>
              <ul>
                <li class="author">Chris Wanstrath</li>
                <li class="date">2008/04/10</li>
                <li class="tag">IT・テクノロジー</li>
              </ul>
            </div>
          </li>
          <li>
            <span class="thum">
              <a href="http://github.com" title="">
                <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/img1.jpg">
              </a>
            </span>
            <div class="info">
              <h4>
                <a href="#" title="">Kingdom Hearts 3</a>
              </h4>
              <ul>
                <li class="author">Square Enix</li>
                <li class="date">2016/xx/xx</li>
                <li class="tag">IT・テクノロジー</li>
              </ul>
            </div>
          </li>
          <li>
            <span class="thum">
              <a href="http://github.com" title="">
                <?php
                if(is_home()) {
                  if(has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    echo '<img src="'.get_template_directory_uri().'/images/no_image.jpg" width="160" height="120"/>';
                  }
                } ?>
              </a>
            </span>
            <div class="info">
              <h4>
                <a href="#" title="">MetalGearSolid 5 -The Phantom Pain-</a>
              </h4>
              <ul>
                <li class="author">Kojima Hideo</li>
                <li class="date">2015/09/02</li>
                <li class="tag">IT・テクノロジー</li>
              </ul>
            </div>
          </li>
          <li>
            <span class="thum">
              <a href="http://github.com" title="">
                <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/ps4.jpg">
              </a>
            </span>
            <div class="info">
              <h4>
                <a href="#" title="">Playstation 4</a>
              </h4>
              <ul>
                <li class="author">Sony Computer Entertainment</li>
                <li class="date">2014/02/22</li>
                <li class="tag">うんこ</li>
              </ul>
            </div>
          </li>
        </ul>
      </section>
      <?php related_post_output(); ?>
    </div>
    <div class="cf"></div>
    <p>広告</p>
    <div class="fb-page" data-href="https://www.facebook.com/Credo-588011671280566/timeline/" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
  </article>


  <!-- /Contact -->
  <!-- other articles -->
  <!-- <div id="others"> -->
  <!-- <?php related_post_output(); ?> -->
  <!-- </div> -->
  <!-- /other articles -->
  <?php get_footer(); ?>
