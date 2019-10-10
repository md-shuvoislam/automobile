<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-4">
				<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
					<div class="sidebar-one">
						<?php dynamic_sidebar( 'footer-1' ); ?>
					</div>
				<?php endif; ?>
			</div><!--col end -->

			<div class="col-md-4">
				<?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
					<div class="sidebar-two">
						<?php dynamic_sidebar( 'footer-2' ); ?>
					</div>
				<?php endif; ?>
			</div><!--col end -->

			<div class="col-md-4">
				<?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
					<div class="sidebar-three">
						<?php dynamic_sidebar( 'footer-3' ); ?>
					</div>
				<?php endif; ?>
			</div><!--col end -->


		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

