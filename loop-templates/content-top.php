<?php

/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php /*post_class(); */ ?> id="post-<?php /*the_ID(); */ ?>">

  <header class="entry-header">

    <?php /*the_title('<h1 class="entry-title">', '</h1>'); */ ?>

  </header>

  <!-- <?/*php echo get_the_post_thumbnail($post->ID, 'large'); */ ?> -->


  <div class="entry-header">
  </div>
  <!-- END .entry-header -->

  <?php
  the_title(
    sprintf('<h2 class="entry-title p-news__headline"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
    '</a></h2>'
  );
  ?>


  <div class="blog-inner row">
    <?php
    global $post;
    $args = array('posts_per_page' => 6);
    $myposts = get_posts($args);
    foreach ($myposts as $post) {
      setup_postdata($post);
      ?>
      <div class="blog-card col-md-4">
        <figure>
          <p class="photoThumb">
            <a href="<?php the_permalink() ?>">
              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('add_medium'); ?>
                  <?php //the_post_thumbnail('index_thumbnail');
                  ?>
                </a>
              <?php else : ?>
                <a href="<?php the_permalink(); ?>"><img src="/dist/images/noimage.gif" alt="no image"></a>
              <?php endif; ?>
            </a>
          </p>
          <figcaption>
            <dl>
              <dt><?php the_time('Y.m.d') ?> <span class="blog-cat"><?php the_category('｜') ?></span> </dt>
              <dd>
                <a href="<?php the_permalink() ?>">
                  <?php the_title(); ?>
                </a>
              </dd>
            </dl>
          </figcaption>
        </figure>
      </div>
    <?php
    }
    wp_reset_postdata();
    ?>
  </div>

  <?php
  wp_link_pages(
    array(
      'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
      'after'  => '</div>',
    )
  );
  ?>






</article><!-- #post-## -->
