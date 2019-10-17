<?php
/**
 * Template Name: Cars
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
	<div class="about-middle-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="about-company-text">
						<h3>Unsere Werte.</h3>
						<p>are selling and negotiating now for a long time new high-quality cars. Owing to our long lasting experience in this branch it is possible for us to find the suitable vehicle for you with the best price at any time.

						We set great value on

						professional advice
						experienced personnel
						reliable transaction
						satisfied customers

						If these standards are important for you when buying a car, than you´re right here.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="cars-page-contact">
		<div class="container-fluid">
			<div class="row text-center">
				<div class="col-md-4">
					<a href="" class="boxes">
						<div class="single-page-box car-box-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cars-page-contact-bg.jpg" alt="">
						</div>
						<div class="car-box-content">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hand2.png" alt="">
							<h3>Wunschauto <br> Auswählen</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="" class="boxes">
						<div class="single-page-box car-box-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cars-page-contact-bg-2.jpg" alt="">
						</div>
						<div class="car-box-content">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail22.png" alt="">
							<h3>Kontakt <br> Aufnehmen</h3>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="" class="boxes">
						<div class="single-page-box car-box-img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cars-page-contact-bg-3.jpg" alt="">
						</div>
						<div class="car-box-content">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/car.png" alt="">
							<h3>Neuen Wagen <br> Direkt liefern lassen</h3>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="cars-area">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<?php echo do_shortcode('[WPCS_archive]'); ?>
				</div>
			</div>
		</div>
	</div>



	<div class="home-newslatter-area about-newslatter">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6">
					<h2>Kontaktformular</h2>
					<p>Bei Fragen oder Anregungen sind wir für sie jederzeit erreichbar.</p>
					<?php echo do_shortcode('[mc4wp_form id="41"]'); ?>
				</div>
				<div class="col-md-6">
					<h2>Unser Newsletter</h2>
					<p>Mit unserem Newsletter erhalten Sie immer die aktuellen Angebote und Neuigkeiten.</p>
					<?php echo do_shortcode('[mc4wp_form id="41"]'); ?>
				</div>
			</div>
		</div>
	</div>

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>