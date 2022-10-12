$(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 3,
        },
      },
    ],
  });
});

(function ($) {
  $(function () {
    //  open and close nav
    $("#navbar-toggle").click(function () {
      $("nav ul").slideToggle();
    });

    // Hamburger toggle
    $("#navbar-toggle").on("click", function () {
      this.classList.toggle("active");
    });

    // If a link has a dropdown, add sub menu toggle.
    $("nav ul li a:not(:only-child)").click(function (e) {
      $(this).siblings(".navbar-dropdown").slideToggle("slow");

      // Close dropdown when select another dropdown
      $(".navbar-dropdown").not($(this).siblings()).hide("slow");
      e.stopPropagation();
    });

    // Click outside the dropdown will remove the dropdown class
    $("html").click(function () {
      $(".navbar-dropdown").hide();
    });
  });

  const items = document.querySelectorAll(".accordion button");

  function toggleAccordion() {
    const itemToggle = this.getAttribute("aria-expanded");

    for (i = 0; i < items.length; i++) {
      items[i].setAttribute("aria-expanded", "false");
    }

    if (itemToggle == "false") {
      this.setAttribute("aria-expanded", "true");
    }
  }

  items.forEach((item) => item.addEventListener("click", toggleAccordion));
})(jQuery);

jQuery(document).ready(function () {
  jQuery("button").click(function () {
    jQuery("button").toggleClass("toggled");
    jQuery(".navigation").toggleClass("nav-open");
  });

  $(window).load(function () {
    $(".preloader").delay(500).fadeOut("slow");
    $("#overlayer").delay(500).fadeOut("slow");
  });
});

$(".popup--link").on("click", function () {
  $(".custom-model-main").addClass("model-open");
});
$(".close-btn, .bg-overlay").click(function () {
  $(".custom-model-main").removeClass("model-open");
});

let container = document.querySelector(".imageslider");
let maskContainer = document.querySelector(".mask-container");
let maskImageContainer = document.querySelector(".mask-image-container");

let border = document.querySelector(".border");
let circle = document.querySelector(".circle");

circle.style.draggable = true;

circle.ondrag = function (event) {
  maskContainer.style.width = event.pageX + "px";
  border.style.left = event.pageX + "px";
  circle.style.left = event.pageX + "px";
};

circle.ondragend = function (event) {
  maskContainer.style.width = event.pageX + "px";
  border.style.left = event.pageX + "px";
  circle.style.left = event.pageX + "px";
};
