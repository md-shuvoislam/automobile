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
					<div class="single-page-box" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/3.jpg');">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda velit facilis aperiam illum quis id iste mollitia quisquam accusamus unde enim explicabo eos consectetur, delectus perspiciatis voluptates ipsam quaerat animi.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-page-box" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/3.jpg');">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni eveniet, qui pariatur eos, minus maxime esse sunt. Explicabo quaerat quas odio, ullam dolorum, similique cumque odit, recusandae eveniet, omnis quidem.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="single-page-box" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/3.jpg');">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda velit facilis aperiam illum quis id iste mollitia quisquam accusamus unde enim explicabo eos consectetur, delectus perspiciatis voluptates ipsam quaerat animi.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-page-box" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/3.jpg');">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni eveniet, qui pariatur eos, minus maxime esse sunt. Explicabo quaerat quas odio, ullam dolorum, similique cumque odit, recusandae eveniet, omnis quidem.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home-newslatter-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<?php echo do_shortcode('[mc4wp_form id="21"]'); ?>
				</div>
			</div>
		</div>
	</div>

</div><!-- #full-width-page-wrapper -->

<?php get_footer(); ?>
