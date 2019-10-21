<?php
/**
 * Template Name: About Us
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
	<div class="about-middle-section aboutuspage">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-company-text">
					    <?php the_field('unsere_werte'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="counter-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo do_shortcode('[COUNTER_NUMBER id=46]'); ?>
				</div>
			</div>
		</div>
	</div>

	
	<div class="gallery-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php echo do_shortcode('[modula id="68"]'); ?>
				</div>
			</div>
		</div>
	</div>


	<div class="home-newslatter-area about-newslatter">
		<div class="container">
			<div class="row text-center">
				<div class="col-lg-6 col-md-12">
					<h2>Kontaktformular</h2>
					<p>Bei Fragen oder Anregungen sind wir für sie jederzeit erreichbar.</p>
					<?php echo do_shortcode('[mc4wp_form id="41"]'); ?>
				</div>
				<div class="col-lg-6 col-md-12">
					<h2>Unser Newsletter</h2>
					<p>Mit unserem Newsletter erhalten Sie immer die aktuellen Angebote und Neuigkeiten.</p>
					<?php echo do_shortcode('[mc4wp_form id="41"]'); ?>
				</div>
			</div>
		</div>
	</div>

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>