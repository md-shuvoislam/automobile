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
    <div class="about-middle-section contactuspages">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-company-text">
                       <?php the_field('unsere_werte_contact'); ?>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h2 class="tab-detail-title">Unsere Kontaktdaten</h2>
                            <div class="row">
                                <div class="col-md-3">
                                    <i class="fa fa-map-marker"></i>
                                    <p><?php the_field('location'); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-phone"></i>
                                    <p><?php the_field('telephone'); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-envelope"></i>
                                    <p><?php the_field('email'); ?></p>
                                </div>
                                <div class="col-md-3">
                                    <i class="fa fa-life-ring"></i>
                                    <p><?php the_field('web'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h2 class="tab-detail-title">Wenn Sie Fragen oder Anregungen haben schreiben sie uns gerne über unser Kontaktformular.</h2>
                            <?php echo do_shortcode('[contact-form-7 id="7" title="Contact form 1"]'); ?>
                        </div>
                        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                            <?php echo do_shortcode('[wpgmza id="1"]'); ?>
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