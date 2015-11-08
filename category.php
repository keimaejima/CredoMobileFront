<!-- Archives articles -->
    <section class="category_posts">
      <h1 class="archive_title">
          <?php printf('カテゴリー別アーカイブ: %s', single_cat_title('', false) ); ?>
      </h1>
      <hr>
      <?php /* The loop */ ?>
      <?php while ( have_posts() ): ?>
        <ul class="archive_posts_loop">
        <?php the_post(); ?>
        <li>
          <a class="article" href="<?php the_permalink(); ?>">
            <img src="" alt="" />
            <p><?php the_title(); ?></p>
            <small><?php the_time('Y/m/d'); ?></small>
          </a>
        </li>
      <?php endwhile; ?>
      <button type="button" name="more"></button>
    </section>
<!-- /Archives articles -->
