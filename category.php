<?php get_header(); ?>




<!-- Archives articles -->
<section id="recent" class="article_list">
  <h3 class="archive_title">
    <?php printf('カテゴリー別アーカイブ: %s', single_cat_title('', false) ); ?>
  </h3>
  <ul class="archive_posts_loop">

    <hr>
    <?php /* The loop */ ?>

    <?php while ( have_posts() ): ?>
      <?php the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>" title="">
          <span class="thum">
            <?php
            if(has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo '<img src="'.get_template_directory_uri().'/images/no_image.JPG" width="160" height="120"/>';
            }?>
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
    <?php endwhile; ?>
    <button type="button" name="more"></button>
  </section>
  <!-- /Archives articles -->

  <?php get_footer(); ?>
