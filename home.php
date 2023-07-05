<?php
/**
 * Home Blog template
 *
 * Post Listing
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

<header class="blog-wrapper" style="background-image: linear-gradient(180deg, rgba(243, 108, 42, 0.65), rgba(253, 162, 76, 0.65)), url(<?php the_field('background_image_blog_header', get_option('page_for_posts')); ?>);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <h1><?php the_field('hero_title_blog_header', get_option('page_for_posts')); ?></h1>


                </div>
                <!-- /.header-caption -->
                
            </div>
            <!-- /.col-md-12 -->
            
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="shape bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    
</header>

<div class="categories" style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.92)), url(<?php the_field('background_image_blog_category', get_option('page_for_posts')); ?>); ">
    <div class="shape top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-filters">
                    <ul>
                        <li><a href="<?php bloginfo('url'); ?>/blog/" class="active">All</a></li>
                        <?php wp_list_categories('title_li='); ?>
                    </ul>
                </div>
                <!-- /.blog-filters -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="shape bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>

</div>

<div id="blog-listing">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="blog-listing-in">
                        <div class="row">

                            <?php
                                $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // get current page number
                                $args = array(
                                    'posts_per_page' => 9, // the value from Settings > Reading by default
                                    'paged'          => $current_page // current page
                                );
                                query_posts( $args );
                                
                                $wp_query->is_archive = true;
                                $wp_query->is_home = false;
                                
                                while(have_posts()): the_post();
                                    ?>
                                                    
                                    <div class="col-md-4">
                                        <div class="blog-box">
                                            <div class="blog-photo">
                                                <a href="<?php echo get_permalink(); ?>">
                                                        <?php
                                                        $imageID = get_field('featured_image_blog');
                                                        $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                                        $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                        ?> 
                                                 
                                                        <div class="parent">
                                                            <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                        </div>
                                                </a>
                                            </div>
                                            <!-- /.blog-photo -->
                                            <div class="blog-content">
                                                <h2><?php the_title(); ?></h2>
                                                    <div class="author-date">
                                                        <?php the_author(); ?>
                                                        <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                                    </div>
                                                    


                                                    <?php the_field('excerpt_text'); ?>
                                                    <div class="read-more">
                                                        <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                    </div>
                                                    <!-- /.read-more -->
                                            </div>
                                            <!-- /.blog-content -->
                                        </div>
                                        <!-- /.blog-box -->
                                    </div>
                                    <!-- /.col-md-6 -->                           
                                
                                <?php
                            endwhile;
                            ?>

                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /#blog-listing-in -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="custom-pagination">
                        <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); // WP-PageNavi function ?>
                    </div>
                    <!-- /.custom-pagination -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#blog-listing -->


<?php
get_footer();
