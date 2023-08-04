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

<div class="blog-detailed--intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1><?php the_title(); ?></h1>
                <div class="blog-info">
                    <div class="author">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
                        <div class="author-content">
                            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
                        </div>
                        <!-- /.author-content -->
                    </div>
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
                    
                </div>
                <!-- /.blog-info -->
                
            </div>
            <!-- /.col-md-8 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="blog-detailed-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1523 100" preserveAspectRatio="none">
            <path class="shape-fill" d="M0,6V0h1000v100L0,6z"></path>
        </svg>
    </div>
    
</div>
            

<div class="blog-detailed--body">   
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <?php if( have_rows('content_layout_blog') ): ?>
                    <?php while( have_rows('content_layout_blog') ): the_row(); ?>

                        <?php if( get_row_layout() == 'intro_text' ): ?>

                            <div class="blog-content">
                                <?php the_sub_field('intro_content'); ?>
                            </div>
                            <!-- // content  -->

                        <?php elseif( get_row_layout() == 'full_width_content' ): ?>

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

                        <?php elseif( get_row_layout() == 'table' ): ?>

                            <table style="width:100%" class="single-table">
                                <thead>
                                    <tr role="row">
                                    <?php
                                        // check if the repeater field has rows of data
                                        if(have_rows('table_head_cells')):
                                            // loop through the rows of data
                                            while(have_rows('table_head_cells')) : the_row();
                                                $hlabel = get_sub_field('table_cell_label_thead');
                                                ?>  
                                                <th tabindex="0" rowspan="1" colspan="1"><strong><?php echo $hlabel; ?></strong></th>
                                            <?php endwhile;
                                        else :
                                            echo 'No data';
                                        endif;
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ( have_posts() ) : the_post(); ?>
                                    <?php 
                                    // check for rows (parent repeater)
                                    if( have_rows('table_body_row') ): ?>
                                        <?php 
                                        // loop through rows (parent repeater)
                                        while( have_rows('table_body_row') ): the_row(); ?>
                                                <?php 
                                                // check for rows (sub repeater)
                                                if( have_rows('table_body_cells') ): ?>
                                                    <tr>
                                                        <?php 
                                                        // loop through rows (sub repeater)
                                                        while( have_rows('table_body_cells') ): the_row();
                                                            ?>
                                                            <td><?php the_sub_field('table_cell_label_tbody'); ?></td>
                                                        <?php endwhile; ?>
                                                    </tr>
                                                <?php endif; //if( get_sub_field('') ): ?>
                                        <?php endwhile; // while( has_sub_field('') ): ?>
                                    <?php endif; // if( get_field('') ): ?>
                                    <?php endwhile; // end of the loop. ?>
                                    
                                </tbody>
                            </table> 

                        <?php elseif( get_row_layout() == 'video' ): ?>                              

                            <div class="blog-video">
                                <?php the_sub_field('embedded_code'); ?>
                            </div>
                            <!-- // video  -->
                        
                        <?php elseif( get_row_layout() == 'featured_article' ): ?>    
                            <?php
                                $post_objects = get_sub_field('featured_article_list');

                                if( $post_objects ): ?>
                                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                                        <?php setup_postdata($post); ?>
                                            
                                        <div class="featured-article">
                                            <div class="blog-box">
                                                <div class="blog-photo">
                                                    <a href="<?php echo get_permalink(); ?>" target="_blank">
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
                                                        <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                                        <div class="read-more">
                                                            <a href="<?php echo get_permalink(); ?>">Read More</a>
                                                        </div>
                                                        <!-- /.read-more -->
                                                    </div>
                                                    <!-- /.blog-content--in -->
                                                </div>
                                                <!-- /.blog-content -->
                                            </div>
                                        </div>
                                        <!-- /.featured-article -->
                                            
                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>

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

<div id="advanced-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Recent Posts</h2>
                    <div class="advanced-posts-list">
                        <div class="row">

                            <?php
                            $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) ); ?>  
                            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

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
                                            <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
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
                                <!-- /.col-md-4 -->

                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>    
                            <?php wp_reset_query(); ?>

                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.sidebar-posts-list -->
                </div>
                <!-- // col-lg-8  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // advanced-posts  -->
    <div id="advanced-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Related Posts</h2>
                    <div class="advanced-posts-list">
                        <div class="row">

                        <?php
                            $categories =   get_the_category();
                            // print_r($categories);
                            $rp_query   =  new WP_Query ([
                                'posts_per_page'        =>  3,
                                'post__not_in'          =>  [ $post->ID ],
                                'cat'                   =>  !empty($categories) ? $categories[0]->term_id : null,

                            ]);

                            if ( $rp_query->have_posts() ) {
                                while( $rp_query->have_posts() ) {
                                    $rp_query->the_post();
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
                                            <a href="<?php echo get_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
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
                                <!-- /.col-md-4 -->

                                <?php
                                    }

                                    wp_reset_postdata();

                                }

                            ?>

                        </div>
                        <!-- /.row -->

                    </div>
                    <!-- /.sidebar-posts-list -->
                </div>
                <!-- // col-lg-8  -->
            </div>
            <!-- // row  -->
        </div>
        <!-- // container  -->
    </div>
    <!-- // advanced-posts  -->



<?php
get_footer();
