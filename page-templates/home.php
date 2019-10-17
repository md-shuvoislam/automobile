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
					<a href="" class="boxes">
						<div class="single-page-box">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.jpg" alt="">
						</div>
						<div class="box-content">
							<h3>ABOUT US</h3>
							<p>Unsere Werte. <br>Unser Fortschritt. <br>Unser Unternehmen.</p>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="" class="boxes">
						<div class="single-page-box">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.jpg" alt="">
						</div>
						<div class="box-content">
							<h3>Cars</h3>
							<p>In unserem breitgefächerten Angebot <br> werden Sie mit Sicherheit fündig.</p>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<a href="" class="boxes">
						<div class="single-page-box">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/3.jpg" alt="">
						</div>
						<div class="box-content">
							<h3>Cars</h3>
							<p>Für Individuelle Nachfragen <br> sind wir stets offen</p>
						</div>
					</a>
				</div>
				<div class="col-md-6">
					<a href="" class="boxes">
						<div class="single-page-box">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/4.jpg" alt="">
						</div>
						<div class="box-content">
							<h3>Contact</h3>
							<p>Wir beantworten gerne <br> Ihre Fragen</p>
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