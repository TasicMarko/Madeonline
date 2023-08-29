<?php
/**
 * Template Name: About Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header class="about-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <h1><?php the_field('title_about'); ?></h1>

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

<div id="about-main">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="about-items">

                    <?php if( have_rows('content_blocks_about') ): ?>
                        <?php while( have_rows('content_blocks_about') ): the_row(); ?>

                            <?php if( get_row_layout() == 'intro_text' ): ?>

                                <div class="about-content">
                                    <?php the_sub_field('intro_content'); ?>
                                </div>
                                <!-- // content  -->

                            <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                                <div class="about-content">
                                    <?php the_sub_field('content_block'); ?>
                                </div>
                                <!-- // content  -->

                            <?php elseif( get_row_layout() == 'full_width_image' ): ?>

                                <div class="about-photo">
                                    <?php
                                    $imageID = get_sub_field('featured_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 
                                    <div class="parent">
                                        <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                    </div>
                                    <figcaption class="about-photo--description"><?php the_sub_field('caption'); ?></figcaption>
                                </div>
                                <!-- /.blog-photo -->  
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
