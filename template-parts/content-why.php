


<section class="why-section">
    <div class="why-shape">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
    </svg>
    </div>
    <div class="why-shape why-shape-reverse">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
    </svg>
    </div>
    <div class="why-overlay" style="background-image:url(/wp-content/uploads/2023/07/Why-We-Rock.webp);"></div>
    <div class="container">
        <div class="row">
        <div class="why-wrapper col-lg-8 col-md-12 col-xs-12">
            <p class="above-title">
            <?php echo $fields['why_above_title']; ?>
            </p>
            <h2>
            <?php echo $fields['why_title']; ?>
            </h2>
            <p>
            <?php echo $fields['why_subtitle']; ?>
            </p>
        </div>
        <div class="why-scores col-lg-8 offset-lg-2 col-xs-12">
            <div class="row">
                
                        <!-- Why repeater -->
                        <?php if (have_rows('why_repeater')) {
                                 while (have_rows('why_repeater')) {
                                    the_row(); ?>

                    <div class="col-md-3 col-sm-6 col-xs-12 why-box">
                        <p class="why-bold"><?php the_sub_field('nums'); ?></p>
                        <p class="why-text"><?php the_sub_field('texts'); ?></p>
                    </div>
                           <?php } }?>
                        <!-- Why repeater END -->
    
            </div>
        </div>
        </div>
    </div>
    <div class="why-shape why-shape-white">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
        <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
	c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
	c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
    </svg>
    </div>
</section>