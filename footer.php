<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Symbiotica_Starter_Theme
 */

?>

   

<footer id="page-footer">
    <div class="container">
        <div class="row">
            <div class="footer-info">
                <div class="col-lg-4 col-xs-12">
                        <div class="footer-left">
                            <div class="container">
                                <div class="row">
                                    <div class="footer-logo">
                                        <img src="/wp-content/uploads/2022/07/cropped-Made-Online-Main-Logo-1.webp" alt="Made Online Logo">
                                    </div>
                                    <!-- /.footer-logo -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.footer-top -->
                    <div class="col-lg-5 col-xs-12">
                        <div class="footer-middle">
                            <div class="container">
                                <div class="row">
                                    <div class="info-block">
                                        <p><strong><?php the_field('contact_footer', 'options'); ?></strong></p>
                                        <div class="contact-block">
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('location_one_footer', 'options'); ?></p>
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('location_two_footer', 'options'); ?></p>

                                            <p><a href="tel:<?php the_field('phone_number_footer', 'options'); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('phone_number_footer', 'options'); ?></a></p>
                                            <p><a href="mailto:<?php the_field('email_address_footer', 'options'); ?>"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> <?php the_field('email_address_footer', 'options'); ?></a></p>
                                        </div>
                                        <!-- /.contact-block -->
                                    </div>
                                    <!-- /.info-block -->
                                </div>
                                <!-- /.col-xl-5 col-lg-4 col-md-6 -->
                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.container -->
                    </div>
                    <!-- /.footer-middle -->
                    <div class="col-lg-3 col-xs-12">
                        <div class="footer-right">
                            <div class="container">
                                <div class="row">

                                    <div class="footer-socials">
                                        <p><strong><?php the_field('follow_us_footer', 'options'); ?></strong></p>
                                        <ul>

                                        <?php if( have_rows('social_networks_general', 'options') ): ?>
                                            <?php while( have_rows('social_networks_general', 'options') ): the_row();
                                            $logo_img = get_sub_field('icon_image');
                                            ?>


                                            <li>
                                                <!-- <a href="<?php the_sub_field('link_to_network'); ?>" target="_blank" aria-label="Follow Us"><?php the_sub_field('icon_code'); ?></a> -->
                                                <a href="<?php the_sub_field('link_to_network'); ?>" target="_blank" aria-label="Follow Us"> 
                                                    <img src="<?php  echo $logo_img['url']; ?>">
                                                    
                                                </a>

                                                
                                            </li>
                                            

                                            <?php endwhile; ?>
                                        <?php endif; ?>

                                        </ul>
                                        

                                        
                                        


                                       
                                    </div>
                                    <!-- /.footer-socials -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
        </div>
    </div>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="#FB7B11"></use>
            <use xlink:href="#gentle-wave" x="48" y="3" fill="#F26B38"></use>
            <use xlink:href="#gentle-wave" x="48" y="5" fill="#FB882C"></use>
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#F36833"></use>
        </g>
    </svg>
    <div class="page-end">
        <p><strong><?php the_field('bottom_copy_footer', 'options'); ?></strong></p>
    </div>
</footer>
<!-- /#page-footer -->

</body>
</html>
