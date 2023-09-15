<?php
/**
 * Template Name: Services Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header class="services-header" style="background-image: linear-gradient(180deg, rgba(243, 108, 42, .55), rgba(243, 108, 42, .55)), url(<?php the_field('background_image_services_header'); ?>);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <h1><?php the_field('title_services'); ?></h1>

                </div>
                <!-- /.header-caption -->
                
            </div>
            <!-- /.col-md-12 -->
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="shape bottom">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1000 100" style="enable-background:new 0 0 1000 100;" xml:space="preserve">
            <path class="shape-fill" d="M0,0l1000,0l0,33.5c-41.3-5-83.4-11.3-165.7-11.3c-167.2,0-167.2,14-334.3,14c-167.2,0-167.2-14-334.3-14
        C83.4,22.2,41.3,28.6,0,33.5"/>
        </svg>
    </div>
    
</header>

<div id="services-main">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="services-items">

                    <?php if( have_rows('services_content') ): ?>
                        <?php while( have_rows('services_content') ): the_row(); ?>

                            <?php if( get_row_layout() == 'full_width_content' ): ?>

                                <div class="services-content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- // content  -->

                            <?php elseif( get_row_layout() == 'services' ): ?>
                                <div class="service-box">                                    
                                    <?php if( have_rows('service_box') ): ?>
                                        <?php while( have_rows('service_box') ): the_row(); ?>
                                            <div class="col-md-6 col-lg-4 service">
                                                
                                                <div class="service-info">
                                                    <?php the_sub_field('service_info'); ?>
                                                </div>  
                                                <div class="service-flip">
                                                    <div class="service-front">
                                                        <?php
                                                        $imageID = get_sub_field('service_icon');
                                                        $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                        ?> 
                                                        <div class="parent">
                                                            <img class="box-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                                                         
                                                        </div>
                                                        <h2> 
                                                            <?php the_sub_field('service_name'); ?>
                                                        </h2>
                                                        <p>
                                                            <?php the_sub_field('service_short'); ?>

                                                        </p>
                                                    </div> 
                                                    <div class="service-back">
                                                        <h2> 
                                                            <?php the_sub_field('clients_service'); ?>
                                                        </h2>
                                                        <div class="image-holder">
                                                            <?php
                                                            $imageID = get_sub_field('clients');
                                                            $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                            ?> 

                                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                        </div>
                                                        <a href="<?php the_sub_field('button_link'); ?>" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                                                    </div> 
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>                          
                            <?php endif; ?>                                                    
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <!-- /.about-items -->
            </div>
        </div> 
    </div>
    <!-- /.container -->
</div>
<!-- /#about-main -->


<?php get_footer(); ?>