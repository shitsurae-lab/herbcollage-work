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
			<!-- おおよそ横幅に118%〜120%, 縦幅に125% -->
			<div class="container">
				<div class="row">


					<ul class="col-12 px-0">
						<?php dynamic_sidebar('right-sidebar'); ?>
					<?php endif; ?>
					<div class="p-video embed-responsive embed-responsive-16by9">
						<video src="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/starry-sky.m4v" poster="<?php $upload_dir = wp_upload_dir();
																																												echo $upload_dir['baseurl']; ?>/2019/07/starry-sky_image.jpg" muted controls class="p-video__inner embed-responsive-item" allowfullscreen></video>
					</div>
					<li class="d-flex p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/mail_circle.png" alt="">
						</div>
					</li>
					<li class="d-flex p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames.</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/info_circle.png" alt="">
						</div>
					</li>
					<li class="d-flex p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames.</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/light_meal.png" alt="">
						</div>
					</li>
					<li class="d-flex p-sidebar__list">
						<div class="p-sidebar__list--text">
							<p>malesuada fames.</p>
						</div>
						<div class="p-sidebar__list--image">
							<img src="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/chat_dazzle.png" alt="">
						</div>
					</li>
				</ul>
			</div>
		</div>

	</div><!-- #right-sidebar -->
