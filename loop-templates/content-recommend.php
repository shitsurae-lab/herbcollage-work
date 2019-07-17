<?php

/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


  <div class="container p-single__content">
    <div class="row">
      <div class="col-12 col-md-10">
        <header class="entry-header">

          <?php the_title('<h1 class="entry-title p-single__headline">', '</h1>'); ?>

          <div class="entry-meta">
            <?php understrap_posted_on(); ?>

          </div><!-- .entry-meta -->
        </header><!-- .entry-header -->
        <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

        <div class="entry-content">

          <?php
          $image = get_field('photo');
          $size = 'full'; //(thumbnail , medium , large ,full or custom size)

          if ($image) {
            echo wp_get_attachment_image($image, $size);
          }
          ?>

          <p><?php the_field('text'); ?></p>
        </div>
        <!-- END .col-10 -->
      </div>
      <!-- END .row -->
    </div>
    <!-- END container -->

    <?php the_content(); ?>

    <?php
    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
        'after'  => '</div>',
      )
    );
    ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php understrap_entry_footer(); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->
