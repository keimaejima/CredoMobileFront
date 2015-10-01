<?php get_header(); ?>
    <!-- Header -->
    <!-- Main -->
    <article id="main">
        <div id="content" class="container">
            <section id="header">
                <img src="http://credo.asia/wp-content/uploads/2015/05/code-459070_640.jpg">
                <h2>人工知能と上手く付き合っていくために人間に必要な要素を考える</h2>
                <div class="info">
                    <ul>
                        <li class="author"><?php the_author_posts_link(); ?></li>
                        <li class="date"><?php the_time('Y/m/d'); ?></li>
                        <li class="tag"><?php the_tags("タグ",'(っ´ω`)っ','<br />'); ?></li>
                    </ul>
                </div>
                <p>広告</p>
            </section>
            <section id="sentence">
                <p>まずはこちらの画像をご覧ください。</p>
                <p>この図では各職業を特徴毎にまとめて位置づけ、それぞれについてどのくらいの職業が人工知能に取って代わられてしまう可能性が高いか、その割合を書き記しています。</p>
                <p>前編『日本版・10年後なくなる可能性が高い職業とは(前編)』ではこうした俯瞰的な視点は持たず、具体的な職業名をあげながら人工知能との関連性を見ていきました。中でも、コックと航空管制官については詳しく検討しましたが、その他の職業についてはどうでしょうか？</p>
                <p>本来は、各職業について細かく見ていきたいところですが、調査対象になった職業全ての「将来」について見ていくことは非常に大変です。</p>
                <p>そこで後編では、これら職業を特徴によって6つのクラスタ(グループ)に分類しました。クラスタそれぞれについて分析を行い、これからの社会においてどのような能力が求められるのか、人工知能に代行され得ない能力とは何なのかを見ていきたいと思います。</p>
                <p>また前編にも添付致しましたが、推定結果をまとめたPDFを作成いたしました。ご覧頂ければ幸いです。</p>
            </section>
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
    <!-- /Content -->
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
    <!-- other articles -->
    <div id="others">
      <p>
        関連記事
      </p>
      <?php related_post_output(); ?>
    </div>
    <!-- /other articles -->
    <!-- Footer -->
    <?php get_footer(); ?>
    <!-- /Footer -->
