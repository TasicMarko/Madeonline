<?php
/**
 * The template for displaying the author pages
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

    <header class="blog-detailed--intro">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                <div class="blog-info">
                    <div class="author-single">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                        <div class="author-content">
                            <h4><?php the_author(); ?></h4>
                        </div>
                        <!-- /.author-content -->
                    </div>
                    
                    
                </div>
                <!-- /.blog-info -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
        <div class="blog-detailed-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1523 100" preserveAspectRatio="none">
                <path class="shape-fill" d="M0,6V0h1000v100L0,6z"></path>
            </svg>
        </div>
    </header>

    <div id="blog-listing">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12">
                    <div id="blog-listing-in">
                        <div class="row">


                            <?php while ( have_posts() ) : the_post(); ?>
                                                    
                                        <div class="col-lg-4 col-md-6 height">
                                            <div class="author-blog-box height-fit">
                                                <div class="blog-photo">
                                                    <a href="<?php echo get_permalink(); ?>">
                                                            <?php
                                                            $imageID = get_field('featured_image_blog');
                                                            $image = wp_get_attachment_image_src( $imageID, 'blog-image' );
                                                            $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true);
                                                            ?> 
                                                    
                                                            <div class="parent">
                                                                <img class="img-responsive" alt="<?php echo $alt_text; ?>" src="<?php echo $image[0]; ?>" /> 
                                                                <?php
                                                                    global $post;
                                                                    $categories = get_the_category($post->ID);
                                                                    // $cat_link = get_category_link($categories[0]->cat_ID);
                                                                    echo '<p>'.$categories[0]->cat_name.'</p>' 
                                                                    ?> 
                                                                
                                                            </div>
                                                    </a>
                                                </div>
                                                <!-- /.blog-photo -->
                                                <div class="author-blog-content">
                                                    <h2><?php the_title(); ?></h2>
                                                        
                                                        


                                                        <?php the_field('excerpt_text'); ?>
                                                        <div class="read-more">
                                                            <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                        </div>
                                                        <!-- /.read-more -->

                                                        <div class="single-author-date">
                                                            <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                                        </div>
                                                </div>
                                                <!-- /.blog-content -->
                                            </div>
                                            <!-- /.blog-box -->
                                        </div>
                                        <!-- /.col-md-6 -->                                              
                                
                            <?php endwhile; // end of the loop. ?> 
                    
                        </div>
                        <!-- /.custom-pager -->
                    </div>
                    <!-- /#articles -->
                </div>
                <!-- /.col-md-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#articles-list-->  

<?php
get_footer();
