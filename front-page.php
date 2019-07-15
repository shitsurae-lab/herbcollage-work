<?php
/*
Template Name: Home
*/


/**
 *
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>
<div class="swiper-container container">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">
		<!-- Slides -->
		<div class="swiper-slide">
			<picture>
				<source media="(max-width:520px)" srcset="<?php $upload_dir = wp_upload_dir();
																									echo $upload_dir['baseurl']; ?>/2019/07/photo01-sm.jpg" sizes="100vw">
				<source srcset="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/photo01-md.jpg,
	                  <?php $upload_dir = wp_upload_dir();
										echo $upload_dir['baseurl']; ?>/2019/07/photo01-lg.jpg" sizes="(min-width:1200px) 100vw,
	                    2000px">
				<img src="<?php $upload_dir = wp_upload_dir();
									echo $upload_dir['baseurl']; ?>/2019/07/photo01-lg.jpg" alt="">
			</picture>
		</div>
		<div class="swiper-slide">
			<picture>
				<source media="(max-width:520px)" srcset="<?php $upload_dir = wp_upload_dir();
																									echo $upload_dir['baseurl']; ?>/2019/07/photo02-sm.jpg" sizes="100vw">
				<source srcset="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/photo02-md.jpg,
	                  <?php $upload_dir = wp_upload_dir();
										echo $upload_dir['baseurl']; ?>/2019/07/photo02-lg.jpg" sizes="(min-width:1200px) 100vw,
	                    2000px">
				<img src="<?php $upload_dir = wp_upload_dir();
									echo $upload_dir['baseurl']; ?>/2019/07/photo02-lg.jpg" alt="">
			</picture>
		</div>
		<div class="swiper-slide">
			<picture>
				<source media="(max-width:520px)" srcset="<?php $upload_dir = wp_upload_dir();
																									echo $upload_dir['baseurl']; ?>/2019/07/photo03-sm.jpg" sizes="100vw">
				<source srcset="<?php $upload_dir = wp_upload_dir();
												echo $upload_dir['baseurl']; ?>/2019/07/photo03-md.jpg,
	                  <?php $upload_dir = wp_upload_dir();
										echo $upload_dir['baseurl']; ?>/2019/07/photo03-lg.jpg" sizes="(min-width:1200px) 100vw,
	                    2000px">
				<img src="<?php $upload_dir = wp_upload_dir();
									echo $upload_dir['baseurl']; ?>/2019/07/photo03-lg.jpg" alt="">
			</picture>
		</div>
		<!-- END swiper_slide -->
	</div>
	<!-- END swiper-wrapper -->

	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>

	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>
<!-- END .swiper-container -->
<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part('global-templates/left-sidebar'); ?>

			<main class="site-main" id="main">

				<section class="p-cover pb-4">
					<h2 class="p-cover__headline">大好きな横浜のスポットをご紹介します。</h2>
					<div class="container p-cover__content">
						<div class="row">
							<div class="col-md-6">
								<img src="<?php $upload_dir = wp_upload_dir();
													echo $upload_dir['baseurl']; ?>/2019/07/thumbnail01.jpg" alt="">
							</div>
							<div class="col-md-6">
								<h3 class="dropCap">横浜って広い…広すぎ…</h3>
								<ul class="p-cover__recommend">
									<li>みなとみらい地区</li>
									<li>元町・中華街</li>
									<li>馬車道・関内</li>
									<li>横浜駅周辺</li>
									<li>他にもある!魅力ある横浜!!</li>
								</ul>
								<p class="text-left"><a class="btn btn-primary text-light" href="#">こちらを御覧ください »</a></p>
							</div>
						</div>
						<!-- END .row -->
					</div>
				</section>
				<section class="p-news pb-4">
					<h2 class="p-news__headline">お知らせ</h2>
					<div class="container">
						<div class="row">
							<div class="col-md-6 p-1">
								<div class="p-news__list d-flex justify-content-between">
									<div class="p-news__image">
										<img src="<?php $upload_dir = wp_upload_dir();
															echo $upload_dir['baseurl']; ?>/2019/07/event.jpg" alt="">
									</div>
									<div class="p-news__letter">
										<p>Pellentesque ut diam cursus, gravida nibh et, vulputate tellus. Nam elementum et ante vitae ullamcorper. </p>
									</div>
								</div>
							</div>
							<!-- END col-md-6 -->
							<div class="col-md-6 p-1">
								<div class="p-news__list d-flex justify-content-between">
									<div class="p-news__image">
										<img src="<?php $upload_dir = wp_upload_dir();
															echo $upload_dir['baseurl']; ?>/2019/07/gourmet.jpg" alt="">
									</div>
									<div class="p-news__letter">
										<p>Pellentesque ut diam cursus, gravida nibh et, vulputate tellus. Nam elementum et ante vitae ullamcorper. </p>
									</div>
								</div>
							</div>
							<!-- END col-md-6 -->
							<div class="col-md-6 p-1">
								<div class="p-news__list d-flex justify-content-between">
									<div class="p-news__image">
										<img src="<?php $upload_dir = wp_upload_dir();
															echo $upload_dir['baseurl']; ?>/2019/07/shopping.jpg" alt="">
									</div>
									<div class="p-news__letter">
										<p>Pellentesque ut diam cursus, gravida nibh et, vulputate tellus. Nam elementum et ante vitae ullamcorper. </p>
									</div>
								</div>
							</div>
							<!-- END col-md-6 -->
							<div class="col-md-6 p-1">
								<div class="p-news__list d-flex justify-content-between">
									<div class="p-news__image">
										<img src="<?php $upload_dir = wp_upload_dir();
															echo $upload_dir['baseurl']; ?>/2019/07/sightseeing.jpg" alt="">
									</div>
									<div class="p-news__letter">
										<p>Pellentesque ut diam cursus, gravida nibh et, vulputate tellus. Nam elementum et ante vitae ullamcorper. </p>
									</div>
								</div>
							</div>
							<!-- END col-md-6 -->
						</div>
						<!-- END .row -->
					</div>
					<!-- END .container -->
				</section>
				<section class="p-recommend pb-4">
					<h2 class="p-recommend__headline">オススメのご紹介</h2>
					<div class="container p-recommend__content">
						<div class="row">
							<div class="col-md-6">
								<img src="<?php $upload_dir = wp_upload_dir();
													echo $upload_dir['baseurl']; ?>/2019/07/image330x240.jpg" alt="">
							</div>
							<div class="col-md-6">
								<img src="<?php $upload_dir = wp_upload_dir();
													echo $upload_dir['baseurl']; ?>/2019/07/image330x240.jpg" alt="">
							</div>
							<div class="col-md-6">
								<img src="<?php $upload_dir = wp_upload_dir();
													echo $upload_dir['baseurl']; ?>/2019/07/image330x240.jpg" alt="">
							</div>
							<div class="col-md-6">
								<img src="<?php $upload_dir = wp_upload_dir();
													echo $upload_dir['baseurl']; ?>/2019/07/image330x240.jpg" alt="">
							</div>
						</div>
						<!-- END row -->
					</div>
					<!-- END container -->
				</section>
				<?php while (have_posts()) : the_post(); ?>
					<div class="entry-header">
						<?php
						the_title(
							sprintf('<h2 class="entry-title p-news__headline"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
							'</a></h2>'
						);
						?>
					</div>

					<?php get_template_part('loop-templates/content-header', 'page'); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop.
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part('global-templates/right-sidebar-check'); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer();
