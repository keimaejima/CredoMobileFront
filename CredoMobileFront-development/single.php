<?php get_header(); ?>

    <!-- Main -->
    <div id="main">
        <div id="content" class="container">
            <section>
              <?php the_post(); ?>
                <header>
                    <img src="http://credo.asia/wp-content/uploads/2015/05/code-459070_640.jpg">
                    <h2><?php the_title(); ?></h2>
                    <ul>
                      <li></li>
                      <li><?php the_time('Y//m/d'); ?></li>
                      <li>タグ</li>
                    </ul>
                    <p>ここに広告</p>
                </header>
                <p><?php the_content(); ?></p>
            </section>
            <p>次のページヘ</p>
            <p>ページ番号</p>
        </div>
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
      <?php related_post_output(); ?>
    </div>
    <!-- /other articles -->
<?php get_footer(); ?>
