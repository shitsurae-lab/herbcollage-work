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
		<?php endif; ?>
		<ul>
			<li><img src="https://placehold.jp/350x190.png
" alt=""></li>
			<li> <img src="http://placehold.jp/24/434A52
/ffffff/350x85.png?text=Banner01"></li>
			<li>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lacinia nulla purus. Integer imperdiet, sem vel pulvinar vehicula, nisl nunc elementum tortor, eu dignissim dui nibh ut massa. Nulla efficitur est purus, sed semper risus euismod eu. Nunc condimentum dui nec orci ornare, at rhoncus enim mollis. Nullam convallis libero quis tempor cursus. Donec laoreet egestas urna id volutpat. Nullam sit amet gravida eros, et imperdi</p>
			</li>
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


		<?php dynamic_sidebar('right-sidebar'); ?>

	</div><!-- #right-sidebar -->
