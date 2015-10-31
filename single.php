<?php get_header(); ?>
    <!-- Header -->
    <!-- Main -->
    <article id="main">
    <!-- Content -->
        <div id="content" class="container">
          <section id="header">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
                    <div class="info">
                        <ul>
                          <li class="author"><?php the_author_posts_link(); ?></li>
                          <li class="date"><?php the_time('Y/m/d'); ?></li>
                          <li class="tag"><?php the_tags('タグ: ',' '); ?></li>
                        </ul>
                    </div>
                    <!-- Advertisement -->
                    <p>広告</p>
                    <!-- /Advertisement -->
                </section>
                <section id="sentence">
                  <?php the_content('続きを読む &rarr;'); ?>
                </section
                      <button class="nextpage"><span>次のページへ▶︎ 6つのクラスタに分類する</span></button>
                        <div class="pagenation">
                          <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                          </ul>
                        </div>
                </div>
              </article>
            <!-- whileを終了し、投稿がないなら以下を表示 -->
            <?php endwhile; else: ?>
                <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
        <!-- Content -->
        <!-- Contact -->
    <section id="contact_wrapper">
        <ul class="buttons-icon">
            <li>
                <input type="submit" id="social-facebook" name="social-facebook" class="social-icon facebook" value="f" />
            </li>
            <li>
                <input type="submit" id="soial-twitter" name="social-twitter" class="social-icon twitter" value="T" />
            </li>
            <li>
                <input type="submit" id="social-line" name="social-line" class="social-icon line" value="L" />
            </li>
            <li>
                <input type="submit" id="social-hatena" name="social-hatena" class="social-icon hatena" value="B!" />
            </li>
        </ul>
    </section>
    <section id="follow">
        <h3>いいねして記事の更新情報をチェック</h3>
        <div class="fb-like" data-href="http://credo.asia" data-width="200px" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        <div class="twitterfollow">
            <a href="https://twitter.com/credo_media" class="twitter-follow-button" data-show-count="false" data-lang="ja">@credo_mediaをフォロー</a>
            <script>
                ! function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                        p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');
            </script>
        </div>
    </section>
    <!-- /Contact -->
        <!-- Related Articles -->
            <?php related_post_output(); ?>
        <div class="cf"></div>
          <p>広告</p>
            <div class="fb-page" data-href="https://www.facebook.com/Credo-588011671280566/timeline/" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
    </article>
    <!-- other articles -->
    <!-- <div id="others"> -->
      <!-- <?php related_post_output(); ?> -->
    <!-- </div> -->
    <!-- /other articles -->
<?php get_footer(); ?>
