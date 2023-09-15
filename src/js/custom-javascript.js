




  ////////////////////////// FAQ questions code for toggle //////////////////////////////////

jQuery(document).ready(function(){


    jQuery(".services-box").click(function(){
        jQuery(this).parent(".service-wrapper").find(".faq-answer-holder").slideToggle();
        jQuery(this).parent(".service-wrapper").prevAll(".service-wrapper").find(".faq-answer-holder").slideUp();
        jQuery(this).parent(".service-wrapper").nextAll(".service-wrapper").find(".faq-answer-holder").slideUp();

        });




        /// Change services mobile img on click
        
        jQuery(".services-box").click(function(){
       
        /// Test
        var cls = jQuery(this).parent().attr('class').split(' ')[1];
       // console.log(jQuery(this).parents().eq(3).find(".phone-img." + cls).toggleClass("hide-phone"));

       
       if (jQuery(this).parents().eq(3).find(".phone-img." + cls).hasClass("hide-phone")){

        jQuery(this).parents().eq(3).find("#phone-wrap img").not("hide-phone").addClass("hide-phone");
        jQuery(this).parents().eq(3).find(".phone-img." + cls).removeClass("hide-phone");
        

       } else if (jQuery(this).parents().eq(3).find(".phone-img." + cls).not("hide-phone")) {

        // jQuery(this).parents().eq(3).find("#phone-wrap img").not("hide-phone").addClass("hide-phone");
       }
        
        //Test end
      
         });
        

         /// Change services mobile img on hover

         jQuery(".services-box").on('mouseover', function(){
      
          var cls = jQuery(this).parent().attr('class').split(' ')[1];
         // console.log(jQuery(this).parents().eq(3).find(".phone-img." + cls).toggleClass("hide-phone"));
  
         
         if (jQuery(this).parents().eq(3).find(".phone-img." + cls).hasClass("hide-phone")){
  
          jQuery(this).parents().eq(3).find("#phone-wrap img").not("hide-phone").addClass("hide-phone");
          jQuery(this).parents().eq(3).find(".phone-img." + cls).removeClass("hide-phone");
          
  
         } else if (jQuery(this).parents().eq(3).find(".phone-img." + cls).not("hide-phone")) {
  
          // jQuery(this).parents().eq(3).find("#phone-wrap img").not("hide-phone").addClass("hide-phone");
         }
        
           });




           /////// Burger menu 

           jQuery(".burger-menu ").on("click",".bar",function(){
  
            jQuery("#sidebar-menu-wrapper").slideToggle("linear");
            jQuery(".bar").toggleClass('change');
            // jQuery(".fish-navigation-mob li").slideRight();
          
           });
           /////// Burger menu end


//////////// Dropdown mob menu //////////////////

jQuery(".desk-nav .menu-item-has-children").append('<span class="chevron"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>'); 
           jQuery("#sidebar-menu-wrapper .menu-item-has-children").append('<span class="made-chevron"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>');

           jQuery(".dropdown-some").addClass("hide-nav");
           jQuery(".made-chevron").on("click",function(){
            // e.preventDefault();

            var $this = jQuery(this).prev(".dropdown-some");
            // jQuery(this).prev(".dropdown-some").slideToggle("linear");

            if ($this.hasClass("hide-nav")) {
              $this.removeClass("hide-nav");
              $this.toggle('slow');
            } else {
              $this.addClass("hide-nav");
              $this.slideUp('slow');
            }        
           });

//////////////// Dropdown mob menu END ////////






    jQuery(".wrap .question").click(function(){
      jQuery(this).parent(".wrap").find(".answer").slideToggle();
      jQuery(this).parent(".wrap").prevAll(".wrap").find(".answer").slideUp();
      jQuery(this).parent(".wrap").nextAll(".wrap").find(".answer").slideUp();
      
      });
      jQuery('.click').each(function () { 
    jQuery(this).click(function () {
      jQuery(this).toggleClass("rotate");
    });
  });

		// set up hover panels
		// although this can be done without JavaScript, we've attached these events
		// because it causes the hover to be triggered when the element is tapped on a touch device
		jQuery('.hover').hover(function(){
			jQuery(this).addClass('flip');
		},function(){
			jQuery(this).removeClass('flip');
		});


  });




  /////// Section horizontal sliding /////

  var controller = new ScrollMagic.Controller();

  jQuery(function () {
    //var tween = TweenMax.to(".block-list", 1, {className: "+=scrollend"});
    
    var $block_list = jQuery('.block-list'),
        $block_item = $block_list.find('.block-list__item'),
        block_list_width = $block_list.outerWidth(),
        block_item_width = $block_item.outerWidth(),
        total_width = block_item_width * $block_item.length,
        travel_distance = total_width - block_list_width + 20;
    
    var scene = new ScrollMagic.Scene({
      triggerElement: "#second", 
      duration: '200%',
      triggerHook: 0
    })
    .setPin('.block-list')
    //.setTween(tween)
    .addTo(controller);
    
    scene.on('progress', function(e) {
      var progress = e.progress,
          move = -travel_distance * progress + "px";
      $block_list.css({
        transform: "translateX(" + move + ")"
      });
    });
  });
  