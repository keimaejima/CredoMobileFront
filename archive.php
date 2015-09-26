<!-- Archives articles -->
    <section class="category_posts">
      <h1 class="archive_title">
        <?php if ( is_day() ): ?>
          <?php printf('日別カーカイブ: %s', get_the_date('Y年m月d日') ); ?>
        <?php elseif ( is_month() ): ?>
          <?php printf('月別カーカイブ: %s', get_the_date('Y年m月') ); ?>
        <?php elseif ( is_year() ): ?>
          <?php printf('年別カーカイブ: %s', get_the_date('Y年') ); ?>
        <?php else : ?>
          <?php echo 'アーカイブ'; ?>
        <?php endif; ?>
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
