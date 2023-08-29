<?php
/**
 * Template Name: Industries Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header class="industry-header" style="background-image: linear-gradient(180deg, rgba(243, 108, 42, .55), rgba(243, 108, 42, .55)), url(<?php the_field('background_image_industry_header'); ?>);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <h1><?php the_field('title_industry'); ?></h1>

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

<div class="industry-body">
    <div class="container">
        <div class="row" id="industry-boxes">
            <?php if( have_rows('box_repeater') ): ?>
                <?php while( have_rows('box_repeater') ): the_row(); ?>
                    <div class="col-md-3">
                        <div class="industry-box">
                            <a href="<?php the_sub_field('link_to_page'); ?>">
                                <?php
                                $imageID = get_sub_field('box_image');
                                $image = wp_get_attachment_image_src( $imageID, 'industry-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 
                                <div class="parent">
                                    <img class="box-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    <div class="label">
                                        <p>
                                            <?php the_sub_field('box_label'); ?>

                                        </p>
                                        <span class="serv-more">Read more</span>
                                    </div>
                                </div>

                            </a>
                        </div>
                        <!-- /.service-box -->
                    </div>
                    <!-- /.col-md-4 -->                       
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>
