<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Symbiotica_Starter_Theme
 */

get_header();
?>

<div id="blog-detailed">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">

                    <div class="blog-detailed--intro">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="blog-info">
                                    <span class="date"><?php echo get_the_date( 'F j, Y' ); ?></span>
                                    <span class="cat-link">
                                        Posted in
                            
                                        <?php
                                        global $post;
                                        $categories = get_the_category($post->ID);
                                        $cat_link = get_category_link($categories[0]->cat_ID);
                                        echo '<a href="'.$cat_link.'">'.$categories[0]->cat_name.'</a>' 
                                        ?> 
                                    </span>
                                    <div class="author">
                                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                                        <div class="author-content">
                                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                                            <p><?php the_author_description(); ?></p>
                                        </div>
                                        <!-- /.author-content -->
                                    </div>
                                </div>
                                <!-- /.blog-info -->
                                <h1><?php the_title(); ?></h1>
                            </div>
                            <!-- /.col-md-8 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.blog-detailed--intro -->
                                

                    <div class="blog-detailed--body">    

                        <?php if( have_rows('content_layout_blog') ): ?>
                            <?php while( have_rows('content_layout_blog') ): the_row(); ?>

                                <?php if( get_row_layout() == 'full_width_content' ): ?>

                                    <div class="blog-content">
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
						                        <img class="overlayimage" alt="overlay" src="<?php bloginfo('template_directory'); ?>/img/bg/frame.webp" />
                                            </div>
                                            <span class="blog-photo--description"><?php the_sub_field('caption'); ?></span>
                                        </div>
                                        <!-- /.blog-photo -->  

                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php endif; ?>    

                    </div>
                    <!-- /.blog-detailed--body -->

                </div>
            </div>
        
        </div>
        <!-- // container  -->

    </div>
    <!-- /.blog-detailed -->   

<?php
get_footer();
