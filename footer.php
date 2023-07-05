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
                <div class="col-md-4">
                        <div class="footer-left">
                            <div class="container">
                                <div class="row">
                                    <div class="footer-logo">
                                        <img src="/wp-content/uploads/2022/07/cropped-Made-Online-Main-Logo-1.webp" alt="">
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
                    <div class="col-md-4">
                        <div class="footer-middle">
                            <div class="container">
                                <div class="row">
                                    <div class="info-block">
                                        <p><strong><?php the_field('contact_footer', 'options'); ?></strong></p>
                                        <div class="contact-block">
                                            <p><i class="fa-solid fa-location-dot"></i><?php the_field('location_one_footer', 'options'); ?></p>
                                            <p><i class="fa-solid fa-location-dot"></i><?php the_field('location_two_footer', 'options'); ?></p>

                                            <p><a href="tel:<?php the_field('phone_number_footer', 'options'); ?>"><i class="fa-solid fa-phone"></i> <?php the_field('phone_number_footer', 'options'); ?></a></p>
                                            <p><a href="mailto:<?php the_field('email_address_footer', 'options'); ?>"><i class="fa-solid fa-envelope"></i> <?php the_field('email_address_footer', 'options'); ?></a></p>
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
                    <div class="col-md-4">
                        <div class="footer-right">
                            <div class="container">
                                <div class="row">

                                    <div class="footer-socials">
                                        <p><strong><?php the_field('follow_us_footer', 'options'); ?></strong></p>

                                        <ul>

                                            <?php if( have_rows('social_networks_general', 'options') ): ?>
                                                <?php while( have_rows('social_networks_general', 'options') ): the_row(); ?>

                                                <li>
                                                    <a href="<?php the_sub_field('link_to_network'); ?>" target="_blank" aria-label="Follow Us"><?php the_sub_field('icon_code'); ?></a>
                                                    
                                                </li>
                                                

                                                <?php endwhile; ?>
                                            <?php endif; ?>

                                        </ul>
                                        <!-- <a href="https://clutch.co/profile/made-online">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="800" height="800" viewBox="0 0 800 800">
                                                <title>Clutch Logo-01</title>
                                                <g>
                                                    <path d="M556.408,556.282a211.05,211.05,0,0,1-142.588,52.88c-120.869,0-209.632-88.763-209.632-210.577s85.93-206.8,
                                                    209.632-206.8a216.239,216.239,0,0,1,143.532,51.936l26.441,22.663L700.885,149.293l-29.273-27.385A378.942,378.942,0,0,0,
                                                    413.82,25.591c-217.186,0-374.883,156.752-374.883,372.05S200.411,774.413,413.82,774.413A379.044,379.044,0,0,0,673.5,
                                                    676.207l28.329-26.441L582.848,532.674Z" fill="#17313b"></path>
                                                    <circle cx="408.155" cy="399.53" r="125.591" fill="#ef4335"></circle>
                                                </g>
                                            </svg>
                                        </a> -->
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
