<?php
/**
 * Template Name: Single Industries Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header class="industry-single-header" style="background-image: linear-gradient(180deg, rgba(243, 108, 42, .55), rgba(243, 108, 42, .55)), url(<?php the_field('background_image_industry_single'); ?>);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <h1><?php the_title(); ?></h1>


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
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php if( have_rows('content_layout_industry_single') ): ?>
                    <?php while( have_rows('content_layout_industry_single') ): the_row(); ?>

                        <?php if( get_row_layout() == 'intro_text' ): ?>

                            <div class="content-block">
                                <?php the_sub_field('intro_content'); ?>
                            </div>
                            <!-- // content  -->

                        <?php elseif( get_row_layout() == 'full_width_content' ): ?>

                            <div class="content-block">
                                <?php the_sub_field('content_block'); ?>
                            </div>
                            <!-- // content  -->
                            
                        <?php elseif( get_row_layout() == 'full_width_image' ): ?>
                        
                            <div class="blog-photo">
                                <?php
                                $imageID = get_sub_field('featured_image');
                                $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                ?> 
                                <div class="parent">
                                    <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                </div>
                                <figcaption class="blog-photo--description"><?php the_sub_field('caption'); ?></figcaption>
                            </div>
                            <!-- /.blog-photo -->  

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

                        <?php elseif( get_row_layout() == 'content_left_image_right' ): ?>

                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="content-left">
                                            <?php the_sub_field('content_left'); ?>
                                        </div>
                                    </div>
                                    <!-- // blokc  -->
                                    <div class="col-lg-5">
                                        <div class="image-holder">
                                            <?php
                                            $imageID = get_sub_field('image_right');
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

                        <?php elseif( get_row_layout() == 'image_left_content_right' ): ?>

                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="image-holder">
                                            <?php
                                            $imageID = get_sub_field('image_left');
                                            $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                            ?> 

                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                        </div>
                                    </div>
                                    <!-- // col  -->                                
                                    <div class="col-lg-7">
                                        <div class="content-block content-right">
                                            <?php the_sub_field('content_right'); ?>
                                        </div>
                                    </div>
                                    <!-- // blokc  -->
                                </div>
                            </div>
                            <!-- // wrapper  -->
                        <?php elseif( get_row_layout() == 'content_left_content_right' ): ?>

                            <div class="content-wrapper ">
                                <div class="row ">

                                    <div class="col-lg-6 col-container">
                                        <div class="content-left-side col">
                                            <?php the_sub_field('content_left_side'); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-container">
                                        <div class="content-right-side col">
                                            <?php the_sub_field('content_right_side'); ?>
                                        </div>
                                    </div>
                                    <!-- // col  -->                                
                                    
                                    <!-- // blokc  -->
                                </div>
                            </div>
                            <!-- // wrapper  -->

                        <?php elseif( get_row_layout() == 'frame_left' ): ?>

                            <div class="content-wrapper ">
                                <div class="row ">

                                    <div class="col-lg-7 col-container">
                                        <div class="content-left-side col">
                                            <?php the_sub_field('frame_content_left'); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-5 col-container">
                                        <div class="content-right col">
                                            <?php the_sub_field('no_frame_right'); ?>
                                        </div>
                                    </div>
                                    <!-- // col  -->                                
                                    
                                    <!-- // blokc  -->
                                </div>
                            </div>
                            <!-- // wrapper  -->

                        <?php elseif( get_row_layout() == 'frame_right' ): ?>

                            <div class="content-wrapper ">
                                <div class="row ">

                                    <div class="col-lg-5 col-container">
                                        <div class="content-left col">
                                            <?php the_sub_field('no_frame_left'); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-7 col-container">
                                        <div class="content-right-side col">
                                            <?php the_sub_field('frame_content_right'); ?>
                                        </div>
                                    </div>
                                    <!-- // col  -->                                
                                    
                                    <!-- // blokc  -->
                                </div>
                            </div>
                            <!-- // wrapper  -->

                        <?php elseif( get_row_layout() == 'triple_content' ): ?>

                            <div class="content-wrapper">
                                <div class="row">

                                    <div class="col-lg-4 col-container">
                                        <div class="content-one col">
                                            <?php the_sub_field('content_one'); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-container">
                                        <div class="content-two col">
                                            <?php the_sub_field('content_two'); ?>
                                        </div>
                                    </div>
                                    <!-- // col  --> 
                                    
                                    <div class="col-lg-4 col-container">
                                        <div class="content-three col">
                                            <?php the_sub_field('content_three'); ?>
                                        </div>
                                    </div>
                                    
                                    <!-- // blokc  -->
                                </div>
                            </div>
                            <!-- // wrapper  -->

                        <?php elseif( get_row_layout() == 'quote_cta' ): ?>

                            <div class="quote-cta--single">
                                <span class="title"><?php the_sub_field('cta_title'); ?></span>
                                <a href="#bottom-form" class="btn-cta"><?php the_sub_field('button_label'); ?></a>
                            </div>
                            <!-- // single  -->    

                        
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>             

</div>
<!-- /.blog-detailed--body -->

<?php get_footer(); ?>