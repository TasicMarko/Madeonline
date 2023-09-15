<?php
/**
 * Template Name: Single Services Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header class="single-services-header" style="background-image: linear-gradient(180deg, rgba(243, 108, 42, .55), rgba(243, 108, 42, .55)), url(<?php the_field('background_image_services_single'); ?>);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="content-left">
                                <h1><?php the_field('hero_label'); ?></h1>
                                <?php the_field('hero_text'); ?>
                                <a href="#bottom-form" class="btn-cta"><?php the_field('hero_button_label'); ?></a>
                            </div>
                        </div>
                        <!-- // blokc  -->
                        <div class="col-md-6">
                            <div class="image-holder">
                                <?php
                                $imageID = get_field('hero_image');
                                $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 

                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                            </div>
                        </div>
                        <!-- // col  -->
                    </div>
                </div>
                <!-- // wrapper  -->
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
            

<div class="services-body">   
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php if( have_rows('content_layout_services_single') ): ?>
                    <?php while( have_rows('content_layout_services_single') ): the_row(); ?>

                        <?php if( get_row_layout() == 'full_width_content' ): ?>

                            <div class="content-block">
                                <?php the_sub_field('content_block'); ?>
                            </div>
                            <!-- // content  -->

                        

                        <?php elseif( get_row_layout() == 'accordion' ): ?> 

                            <div class="row blog-detailed--accordion-wrap">
                                <div class="col-xl-12">
                                    <h3><?php the_sub_field('accordion_title'); ?></h3>
                                    <div class="blog-detailed--accordion">

                                        <?php if( have_rows('accordion_list') ): ?>
                                            <?php while( have_rows('accordion_list') ): the_row(); ?>

                                                <div class="wrap">
                                                    <div class="question click">
                                                        <h4><?php the_sub_field('heading'); ?></h4><i class="fa fa-arrow-right" aria-hidden="true"></i><i class="fa fa-arrow-down" aria-hidden="true"></i>


                                                    </div>

                                                    <div class="answer">
                                                        <?php the_sub_field('content'); ?>
                                                    </div>
                                                </div>
                                                <!-- /.wrap -->

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                    </div>
                                    <!-- /.blog-detailed--accordion -->
                                </div>
                                <!-- /.col-xl-8 -->
                            </div>
                            <!-- /.row -->

                        

                        
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>             

</div>
<!-- /.blog-detailed--body -->

<?php get_footer(); ?>