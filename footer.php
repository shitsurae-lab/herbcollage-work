<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">




	<footer class="site-footer p-footer" id="colophon">
		<div class="<?php echo esc_attr($container); ?>">
			<div class="row">

				<div class="col-md-4">
					<h3>About us</h3>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
					</p>
				</div>

				<div class="col-md-4">
					<h3>Our Location </h3>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3250.5863495243143!2d139.6458334147722!3d35.440275650757165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60185ce14a3612c7%3A0xe06c0bc64c29d9c5!2z44CSMjMxLTA4NjEg56We5aWI5bed55yM5qiq5rWc5biC5Lit5Yy65YWD55S6IOWFg-eUuumAmuOCig!5e0!3m2!1sja!2sjp!4v1563236565288!5m2!1sja!2sjp" style="" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-4">
					<h3>Contact Us</h3>
					<ul>
						<li>Phone : 045 - 123 - 4567</li>
						<li>E-mail : info@example.com</li>
						<li>Fax : 045 - 123 - 4567</li>
					</ul>
					<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
					</p>
					<ul class="sm">
						<li><a href="#"><img src="<?php $upload_dir = wp_upload_dir();
																			echo $upload_dir['baseurl']; ?>/2019/07/twitter_icon_rounded.png" alt="twitter"></a></li>
						<li><a href="#"><img src="<?php $upload_dir = wp_upload_dir();
																			echo $upload_dir['baseurl']; ?>/2019/07/facebook_icon.png" alt="facebook"></a></li>
						<li><a href="#"><img src="<?php $upload_dir = wp_upload_dir();
																			echo $upload_dir['baseurl']; ?>/2019/07/instagram_icon.png" alt="Instagram"></a></li>
					</ul>
				</div>

			</div><!-- row end -->
		</div><!-- container end -->
	</footer><!-- #colophon -->



</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
