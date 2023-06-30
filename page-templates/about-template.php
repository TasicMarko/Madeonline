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
                    <!-- <div class="wave"></div> -->

                </div>
                <!-- /.header-caption -->
            </div>
            <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</header>

<div id="about-main">
    <div class="container">
        
        <div class="about-items">

		<?php if( have_rows('content_blocks_about') ): ?>
			<?php while( have_rows('content_blocks_about') ): the_row(); ?>

				<section class="about-item">
					<div class="row">						
						<div class="col-lg-12">
							<div class="about-content">
								<?php the_sub_field('content_block'); ?>
							</div>
							<!-- /.about-content -->
						</div>
						<!-- /.col-lg-7 -->
					</div>
					<!-- /.row -->
				</section>
				<!-- /.about-item -->

								

			<?php endwhile; ?>
		<?php endif; ?>

        </div>
        <!-- /.about-items -->

        
    </div>
    <!-- /.container -->
</div>
<!-- /#about-main -->

<?php get_footer(); ?>
