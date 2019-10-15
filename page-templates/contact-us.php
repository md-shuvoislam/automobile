<?php
/**
 * Template Name: Contact Us
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
						<p>are selling and negotiating now for a long time new high-quality cars. Owing to our long lasting experience in this branch it is possible for us to find the suitable vehicle for you with the best price at any time. <br>
						
						We set great value on <br>

						professional advice <br>
						experienced personnel <br>
						reliable transaction <br>
						satisfied customers <br>

						If these standards are important for you when buying a car, than you´re right here.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-box-area">
		<div class="container">
			<div class="row text-center">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
				    	<i class="fa fa-user-o"></i>
						<h3>Kontakt Daten</h3>
						<i class="fa fa-chevron-down"></i>
				    </a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
				    	<i class="fa fa-envelope-open"></i>
						<h3>Kontakt Formular</h3>
						<i class="fa fa-chevron-down"></i>
				    </a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">
				    	<i class="fa fa-map-marker"></i>
						<h3>Unser Standort</h3>
						<i class="fa fa-chevron-down"></i>
				    </a>
				  </li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
				  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, sed fugiat sequi nisi iure perferendis beatae, nihil repellat, excepturi eum laborum neque possimus. Commodi corporis atque doloribus, maiores harum, ut.</div>
				  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit saepe consequuntur dolorum vero repudiandae sunt, autem, dignissimos facere, incidunt exercitatisicing elit. Suscipit saepe consequuntur dolorum vero repudiandae sunt, autem, dignissimos facere, incidunt exercitationem, magnam molestiae. Vero libero recusandae, ab nemo repellat deserunt commodi!</div>
				  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla nihil iusto facere blanditiis, perspiciatis aspernatur. Autem accusantium nostrum, temporibus praesentium fugiat necessitatibus voluptate! Consequatur fugit, quis tempsantium nostrum, temporibus praesentium fugiat necessitatibus voluptate! Consequatur fugit, quis tempsantium nostrum, temporibus praesentium fugiat necessitatibus voluptate! Consequatur fugit, quis temporibus blanditiis ipsam libero.</div>
				</div>
			</div>
		</div>
	</div>


	<div class="home-newslatter-area contact-newslatter">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h2>Unser Newsletter</h2>
					<p>Mit unserem Newsletter erhalten Sie immer die aktuellen Angebote und Neuigkeiten.</p>
					<?php echo do_shortcode('[mc4wp_form id="41"]'); ?>
				</div>
			</div>
		</div>
	</div>

</div><!-- #full-width-page-wrapper -->
<?php get_footer(); ?>