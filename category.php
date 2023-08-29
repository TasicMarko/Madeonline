<?php get_header(); ?>

<header class="blog-wrapper" style="background-image: linear-gradient(180deg, rgba(243, 108, 42, 0.65), rgba(253, 162, 76, 0.65)), url(<?php the_field('background_image_blog_header', get_option('page_for_posts')); ?>);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-caption">
                    <h1><?php single_cat_title('Category: '); ?></h1>



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

<div class="categories" style="background-image: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(255, 255, 255, 0.01)), url(<?php the_field('background_image_blog_category', get_option('page_for_posts')); ?>); ">
    <div class="shape top">
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1000 100" style="enable-background:new 0 0 1000 100;" xml:space="preserve">
            <path class="shape-fill" d="M0,0l1000,0l0,33.5c-41.3-5-83.4-11.3-165.7-11.3c-167.2,0-167.2,14-334.3,14c-167.2,0-167.2-14-334.3-14
        C83.4,22.2,41.3,28.6,0,33.5"/>
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
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 1000 100" style="enable-background:new 0 0 1000 100;" xml:space="preserve">
            <path class="shape-fill" d="M0,0l1000,0l0,33.5c-41.3-5-83.4-11.3-165.7-11.3c-167.2,0-167.2,14-334.3,14c-167.2,0-167.2-14-334.3-14
        C83.4,22.2,41.3,28.6,0,33.5"/>
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
                                                <div class="blog-content--in">
                                                    <h2><?php the_title(); ?></h2>
                                                    <?php the_field('excerpt_text'); ?>
                                                    <div class="read-more">
                                                        <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                    </div>
                                                    <!-- /.read-more -->
                                                </div>
                                                <!-- /.blog-content--in -->
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

<?php get_footer(); ?>
