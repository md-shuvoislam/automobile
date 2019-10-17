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
    <div class="contact-box-area">
        <div class="container">
            <div class="row text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <div class="col-md-4">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-page-user.png" alt="">
                                <h3>Kontakt <br> Daten</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pfad-5.png" alt="">
                            </a>
                        </li>
                    </div>
                    <div class="col-md-4">
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-page-envalop.png" alt="">
                                <h3>Kontakt <br> Formular</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pfad-5.png" alt="">
                            </a>
                        </li>
                    </div>
                    <div class="col-md-4">
                        <li class="nav-item">
                            <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/contact-page-map.png" alt="">
                                <h3>Unser <br> Standort</h3>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Pfad-5.png" alt="">
                            </a>
                        </li>
                    </div>
                </ul>
                <!-- Tab panes -->
            </div>
        </div>
    </div>
    <div class="tabs-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h2 class="tab-detail-title">Unsere Kontaktdaten</h2>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-map-marker"></i>
                                    <p>1-A Automobile Vorbächstraße 21 77796 Mühlenbach</p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-phone"></i>
                                    <p>+49 - (0)7832/ 91390</p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-envelope"></i>
                                    <p>info@1-a-automobile.de</p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-life-ring"></i>
                                    <p>www.1-a-automobile.de</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h2 class="tab-detail-title">Wenn Sie Fragen oder Anregungen haben schreiben sie uns gerne über unser Kontaktformular.</h2>
                            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.534298975426!2d90.42364631536283!3d23.763980894173418!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c789ec66c97d%3A0x2f16afa340df57a2!2sA-WEB!5e0!3m2!1sen!2sbd!4v1571123453659!5m2!1sen!2sbd" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
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
</div>
<!-- #full-width-page-wrapper -->
<?php get_footer(); ?>