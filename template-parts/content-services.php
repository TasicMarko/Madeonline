

<section class="services">
    <div class="container">
        <div class="row">
            <div class="services-title-row">
                <p><?php echo $fields['services_above_title']; ?></p>
                <h2><?php echo $fields['services_title']; ?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="services-phone-wrapper">
                    <img src="/wp-content/uploads/2023/07/Web-Development-Image-Bg.webp" alt="phone img">
                </div>
            </div>
            <div class="col-md-4 col-xs-12 service-wrap">
                <div class="services-wrapper">

                        <!-- Why repeater -->
                        <?php if (have_rows('services_repeater')) {
                                while (have_rows('services_repeater')) {
                                    the_row();
                                $logo_img = get_sub_field('logo_img');     ?>

                        <div class="service-wrapper">
                            <div class="services-box">
                                <div class="services-img-box">
                                    <img src="<?php echo $logo_img['url']  ?>" alt="logo">
                                </div>
                                <p><?php the_sub_field('title'); ?></p>
                                <i aria-hidden="true" class="fa fa-chevron-right"></i>
                            </div>
                            <div class="faq-answer-holder">
                                <p>
                                <?php the_sub_field('text'); ?>
                                </p>
                                <a href="<?php the_sub_field('link'); ?>">Read more</a>
                            </div>
                        </div>
                        
                 

                        <?php } }?>
                        <!-- Why repeater END -->


                </div>
            </div>
        </div>
    </div>
</section>