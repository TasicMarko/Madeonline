






        <section class="hero-section">
            <div class="hero-wrapper">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-xs-12 hero">
                        <div class="box">
                           <div class="wave -one"></div>
                           <div class="wave -two"></div>
                           <div class="wave -three"></div>
                        </div>
                        <div class="icon-hero">
                           <div class="icon-box hero-at">
                           <i class="fa fa-facebook-square fa-5x facebook-custom"></i>
                           </div>
                           <div class="icon-box hero-comment">
                           <i class="fa fa-at"></i>
                           </div>
                           <div class="icon-box hero-pen">
                           <i class="fa fa-pen"></i>
                           </div>
                           <div class="icon-box hero-code">
                           <i class="fa fa-pencil"></i>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-xs-12 hero-content">
                        <h1>
                          <?php echo $fields['hero_title']; ?>
                        </h1>
                        
                        <!-- Hero repeater -->
                           <?php if (have_rows('hero_repeater')) {
                                 while (have_rows('hero_repeater')) {
                                    the_row(); ?>

                        <p class="hero-title-below"><?php the_sub_field('text'); ?></p>
                                 
                           <?php } }?>
                        <!-- Hero repeater END -->

                        <p>
                        <?php echo $fields['hero_subtitle']; ?>
                        </p>
                        <div class="hero-cta">
                           <a href="">Let's Start</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
        </section>



