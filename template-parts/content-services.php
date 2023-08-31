

<section class="services">
    <div class="container">
        <div class="row">
            <div class="services-title-row">
                <p><?php echo $fields['services_above_title']; ?></p>
                <h2><?php echo $fields['services_title']; ?></h2>
            </div>
        </div>
        <div class="row parent">
            <div class="col-md-6 col-xs-12">
                <div id="phone-wrap" class="services-phone-wrapper">


                    <!-- Why repeater -->
                    <?php if (have_rows('services_repeater')) {
                        $i = 0;
                        $clas = "hide-phone";
                    while (have_rows('services_repeater')) {
                        $i++;        
                        the_row();
                        $logo_img = get_sub_field('logo_img'); 

                        if ($i > 1) { ?>
                            <img class="phone-img <?php echo $i; ?> <?php echo $clas; ?>" src="<?php echo $logo_img['url']  ?>" alt="phone img">
                       <?php }else { ?>
                        <img class="phone-img <?php echo $i ?>" src="<?php echo $logo_img['url']  ?>" alt="phone img">
                       <?php } ?>
                        

                    <?php } }?>
                    <!-- Why repeater END -->


                </div>
            </div>
            <div class="col-md-4 col-xs-12 service-wrap">
                <div class="services-wrapper">

                        <!-- Why repeater -->
                        <?php if (have_rows('services_repeater')) {
                            $i = 0;
                                while (have_rows('services_repeater')) {
                            $i++;        
                                    the_row();
                                $logo_img = get_sub_field('logo');     ?>

                        <div class="service-wrapper <?php echo $i; ?>">
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