<?php
/**
 * Template Name: Our Team Template
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
?>

<header class="team-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <h1><?php the_field('title_team'); ?></h1>

                </div>
                <!-- /.header-caption -->
                
            </div>
            <!-- /.col-md-12 -->
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="shape bottom image">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1000 100" style="enable-background:new 0 0 1000 100;" xml:space="preserve">
            <path class="shape-fill" d="M0,0l1000,0l0,33.5c-41.3-5-83.4-11.3-165.7-11.3c-167.2,0-167.2,14-334.3,14c-167.2,0-167.2-14-334.3-14
        C83.4,22.2,41.3,28.6,0,33.5"/>
        </svg>
        
    </div>
    
</header>

<div class="team" style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.01)), url(); ">
    
    <div class="team-photo">
            <?php
            $imageID = get_field('team_image');
            $image = wp_get_attachment_image_src( $imageID, 'full-image' );
            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
            ?> 
            <div class="parent">
                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
            </div>
        </div>
        <!-- /.blog-photo --> 
    

</div>

<div class="members" style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.01)), url(<?php the_field('background_image_clients_body'); ?>); ">
    <div class="shape top">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1000 100" style="enable-background:new 0 0 1000 100;" xml:space="preserve">
            <path class="shape-fill" d="M0,0l1000,0l0,33.5c-41.3-5-83.4-11.3-165.7-11.3c-167.2,0-167.2,14-334.3,14c-167.2,0-167.2-14-334.3-14
        C83.4,22.2,41.3,28.6,0,33.5"/>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="executives">
                <?php if( have_rows('executives') ): ?>
                    <?php while( have_rows('executives') ): the_row(); ?>
                        <div class="col-xl-4 col-md-6">
                            <div class="exec-box">
                                <div class="exec-basic">
                                    
                                    <?php
                                    $imageID = get_sub_field('executive_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 
                                    <div class="parent">
                                        <img class="box-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                                     
                                    </div>
                                    <div class="executive-info">
                                        <div class="exec-name">
                                            <?php the_sub_field('exec_name'); ?>
                                        </div>
                                        <div class="exec-title">
                                            <?php the_sub_field('exec_title'); ?>
                                        </div>
                                    </div>
                                    
                                       
                                </div>
                                <div class="executive-about">
                                    <?php the_sub_field('exec_about'); ?>
                                </div>
                                                                                        
                            </div>
                            <!-- /.service-box -->
                        </div>
                        <!-- /.col-md-4 -->                       
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- /.col-md-12 -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="employees">
                <?php if( have_rows('employees') ): ?>
                    <?php while( have_rows('employees') ): the_row(); ?>
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="empl-box">
                                <div class="empl-basic">
                                <?php
                                    $imageID = get_sub_field('employee_image');
                                    $image = wp_get_attachment_image_src( $imageID, 'full-image' );
                                    $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                    ?> 
                                    <div class="parent">
                                        <img class="box-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" />                                     
                                    </div>
                                    <div class="employee-info">
                                        <div class="empl-name">
                                            <?php the_sub_field('empl_name'); ?>
                                        </div>
                                        <div class="empl-title">
                                            <?php the_sub_field('empl_title'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="employee-about">
                                    <?php the_sub_field('empl_about'); ?>
                                </div>
                                       
                                                                                       
                            </div>
                            <!-- /.service-box -->
                        </div>
                        <!-- /.col-md-4 -->                       
                    <?php endwhile; ?>
                <?php endif; ?>
                <!-- /.col-md-12 -->
            </div>
        
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




<?php get_footer(); ?>