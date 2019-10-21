<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>
<div class="wrapper" id="hoem">
	<div class="home-middle-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<a href="<?php the_field('box_one_link_to_page'); ?>" class="boxes">
						<div class="single-page-box">
							<img src="<?php the_field('box_one_image'); ?>" alt="">
						</div>
						<div class="box-content">
							<h3><?php the_field('box_one_title'); ?></h3>
							<p><?php the_field('box_one_text'); ?></p>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="<?php the_field('box_two_link_to_page'); ?>" class="boxes">
						<div class="single-page-box">
							<img src="<?php the_field('box_two_image'); ?>" alt="">
						</div>
						<div class="box-content">
							<h3><?php the_field('box_two_title'); ?></h3>
							<p><?php the_field('box_two_text'); ?></p>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<a href="<?php the_field('box_three_link_to_page'); ?>" class="boxes">
						<div class="single-page-box">
							<img src="<?php the_field('box_three_image'); ?>" alt="">
						</div>
						<div class="box-content">
							<h3><?php the_field('box_three_title'); ?></h3>
							<p><?php the_field('box_three_text'); ?></p>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="<?php the_field('box_four_link_to_page'); ?>" class="boxes">
						<div class="single-page-box">
							<img src="<?php the_field('box_four_image'); ?>" alt="">
						</div>
						<div class="box-content">
							<h3><?php the_field('box_four_title'); ?></h3>
							<p><?php the_field('box_four_text'); ?></p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="home-newslatter-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Unser Newsletter</h2>
					<p>Mit unserem Newsletter erhalten Sie immer die aktuellen Angebote und Neuigkeiten.</p>
					<?php echo do_shortcode('[mc4wp_form id="41"]'); ?>
				</div>
			</div>
		</div>
	</div>

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>