<?php

/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!is_active_sidebar('right-sidebar')) {
    return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod('understrap_sidebar_position');
?>

<?php if ('both' === $sidebar_pos) : ?>
<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
	<?php else : ?>
	<div class="col-md-4 widget-area p-sidebar" id="right-sidebar" role="complementary">

		<?php endif; ?>
		<!-- おおよそ横幅に118%〜120%, 縦幅に125% -->
		<div class="container">
			<div class="row">
				<h2 class="p-cover__headline">お知らせ動画</h2>
				<div class="p-video pb-4 embed-responsive embed-responsive-16by9">
					<video src="<?php $upload_dir = wp_upload_dir();
                                            echo $upload_dir['baseurl']; ?>/2019/07/starry-sky.m4v" poster="<?php $upload_dir = wp_upload_dir();
                                                                                                                                                                            echo $upload_dir['baseurl']; ?>/2019/07/starry-sky_image.jpg" muted controls class="p-video__inner embed-responsive-item" allowfullscreen></video>
				</div>
			</div>
			<!-- END.row -->
		</div>
		<!-- END .container -->
		<div class="container">
			<div class="row">
				<h2 class="p-cover__headline">コンテンツ</h2>
				<ul class="col-12 px-0">

					<li class="d-flex space-between p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
                                                echo $upload_dir['baseurl']; ?>/2019/07/calendar.png" alt="">
						</div>
					</li>
					<li class="d-flex space-between p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames.</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
                                                echo $upload_dir['baseurl']; ?>/2019/07/baby.png" alt="">
						</div>
					</li>
					<li class="d-flex space-between p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames.</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
                                                echo $upload_dir['baseurl']; ?>/2019/07/dog.png" alt="">
						</div>
					</li>
					<li class="d-flex space-between p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames.</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
                                                echo $upload_dir['baseurl']; ?>/2019/07/chat.png" alt="">
						</div>
					</li>
				</ul>
				<?php dynamic_sidebar('right-sidebar'); ?>
			</div>
		</div>

	</div><!-- #right-sidebar -->
