$(document).ready(function(){
  $('.customer-logos').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      dots: false,
      pauseOnHover: false,
      responsive: [{
          breakpoint: 768,
          settings: {
              slidesToShow: 4
          }
      }
      , {
          breakpoint: 520,
          settings: {
              slidesToShow: 3
          }
      }]
  });
 
});


(function($) { 
    $(function() { 
  
      //  open and close nav 
      $('#navbar-toggle').click(function() {
        $('nav ul').slideToggle();
      });
  
  
      // Hamburger toggle
      $('#navbar-toggle').on('click', function() {
        this.classList.toggle('active');
      });
  
  
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.navbar-dropdown').slideToggle("slow");
  
        // Close dropdown when select another dropdown
        $('.navbar-dropdown').not($(this).siblings()).hide("slow");
        e.stopPropagation();
      });
  
  
      // Click outside the dropdown will remove the dropdown class
      $('html').click(function() {
        $('.navbar-dropdown').hide();
      });
    }); 
  })(jQuery); 

jQuery(document).ready(function(){
    jQuery("button").click(function(){
      jQuery("button").toggleClass("toggled");
      jQuery(".navigation").toggleClass("nav-open");
    });


    $(window).load(function () {
      $(".preloader").delay(500).fadeOut("slow");
      $("#overlayer").delay(500).fadeOut("slow");
    })


  });

  $(".popup--link").on('click', function () {
		$(".custom-model-main").addClass('model-open');
	});
	$(".close-btn, .bg-overlay").click(function () {
		$(".custom-model-main").removeClass('model-open');
	});

  
