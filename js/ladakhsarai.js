//body fade in

setTimeout(function () {
  $("body").animate({ opacity: "1" });
}, 500);

//animation start here

wow = new WOW({
  animateClass: "animated",
  offset: 100,
  callback: function (box) {
  },
});
wow.init();



// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty('--vh', `${vh}px`);

// We listen to the resize event
window.addEventListener('resize', () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
});




//FORM

//    $(function () {
//        $(".afbutton").click(function () {
//            var name = $("#name").val();
//            var gyear = $("#gyear").val();
//            var email = $("#email").val();
//            var phone = $("#phone").val();
//            var clocation = $("#clocation").val();
// //           var clocation = $("#clocation").val();
//            var icname = $("#icname").val();
//            var designation = $("#designation").val();
// //           var message = $("#message").val();
//            if (name == "" || gyear == "" || email == "" || phone == "" || clocation == "" || icname == "" || designation == "") {
//                $("#errmsg").html('Please fill all required fields.');
//                $("#errmsg").addClass("text-danger")
//            } else {
//                $.ajax({
//                    url: "config.php?type=alumniForm",
//                    type: 'POST',
//                    data: $('form#alumniForm').serialize(),
//                    beforeSend: function () {
//                        $("#errmsg").html("Please Wait...");
//                        $("#btnsubmit").attr("disabled", true);
//                    },
//                    success: function () {
// //                       alert("Form submitted");
//                        setTimeout(function () {
//                            window.location = "thank-you";
//                        }, 1000);
//                        $('#alumniForm').trigger("reset");
//                    }
//                });
//                return false;
//            }
//        })
//    })


//main swiper


if ($("#mainswiper").length > 0) {
    const mainSwiper = new Swiper("#mainswiper", {
        //autoHeight: true,
        spaceBetween: 0,
        slidesPerView: 1,
        watchOverflow: true,
        effect: "fade",
        loop: true,
        speed: 1500,
          autoplay: {
            delay: 3000,
            autoplay: 3000,
            reverseDirection: false,
            disableOnInteraction: false,
          },
         navigation: {
           nextEl: ".ms-next",
           prevEl: ".ms-prev",
         },
        pagination: {
            el: ".ms-pagination",
            clickable: true,
        },
    });
}

//our properties swiper

if ($("#properties").length > 0) {
    const properties = new Swiper("#properties", {
        //autoHeight: true,
        spaceBetween: 30,
        slidesPerView: 1,
        watchOverflow: true,
//        effect: "fade",
        loop: true,
        speed: 1500,
//          autoplay: {
//            delay: 3000,
//            autoplay: 3000,
//            reverseDirection: false,
//            disableOnInteraction: false,
//          },
            breakpoints: {
              640: {
                spaceBetween: 0,
                slidesPerView: 1,
              },
              768: {
                //        slidesPerView: 1,
                spaceBetween: 0,
                slidesPerView: 1,
              },
              1024: {
                slidesPerView: 2,
                spaceBetween: 30,
              },
              1199: {
                slidesPerView: 4,
                spaceBetween: 30,
              },
            },
         navigation: {
           nextEl: ".properties-next",
           prevEl: ".properties-prev",
         },
//        pagination: {
//            el: ".properties-pagination",
//            clickable: true,
//        },
    });
}

//testimonial swiper

if ($("#testimonials").length > 0) {
    const testimonials = new Swiper("#testimonials", {
        //autoHeight: true,
        spaceBetween: 0,
        slidesPerView: 1,
        watchOverflow: true,
        centeredSlides: true,
        roundLengths: true,
        loop: true,
        breakpoints: {
            640: {
                spaceBetween: 0,
                slidesPerView: 1,
            },
            768: {
                //        slidesPerView: 1,
                spaceBetween: 0,
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1199: {
                slidesPerView: 1.8,
                spaceBetween: 40,
            },
        },
        navigation: {
            nextEl: ".testimonials-next",
            prevEl: ".testimonials-prev",
        },
        pagination: {
            el: ".testimonials-pagination",
            dynamicBullets: true
            //            clickable: true,
        },
    });
}

//timeline swiper slider start here

$(document).ready(function () {
    if ($(window).innerWidth() <= 1024) {
        toDO.destroy(true, true);
    } else if ($('#todo').length > 0) {
        var toDO = new Swiper('#todo', {
            autoHeight: true, //enable auto height
            simulateTouch: false,
            watchOverflow: true,
            direction: 'vertical',
            observer: true,
            slidesPerView: 1,
            spaceBetween: 0,
            speed: 1000,
            parallax: true,
            effect: "slide",
            mousewheelReleaseOnEdges: true,
            mousewheel: {
                releaseOnEdges: true,
            },
            touchReleaseOnEdges: true,
            pagination: {
                el: '.todo-pagination',
                type: "fraction",
            },
            navigation: {
                nextEl: ".todo-next",
                prevEl: ".todo-prev",
            },
        });
    }
});


//Glightbox 


var lightboxVideo = GLightbox({
    selector: '.lsvideo01'
});


//menu start here


const navbarMenu = document.getElementById("navbar");
const burgerMenu = document.getElementById("burger");
const overlayMenu = document.querySelector(".overlay");

// Show and Hide Navbar Function
const toggleMenu = () => {
   navbarMenu.classList.toggle("active");
   overlayMenu.classList.toggle("active");
};

// Collapsible Mobile Submenu Function
const collapseSubMenu = () => {
   navbarMenu
      .querySelector(".menu-dropdown.active .submenu")
      .removeAttribute("style");
   navbarMenu.querySelector(".menu-dropdown.active").classList.remove("active");
};

// Toggle Mobile Submenu Function
const toggleSubMenu = (e) => {
   if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 992) {
      e.preventDefault();
      const menuDropdown = e.target.parentElement;

      // If Dropdown is Expanded, then Collapse It
      if (menuDropdown.classList.contains("active")) {
         collapseSubMenu();
      } else {
         // Collapse Existing Expanded Dropdown
         if (navbarMenu.querySelector(".menu-dropdown.active")) {
            collapseSubMenu();
         }

         // Expanded the New Dropdown
         menuDropdown.classList.add("active");
         const subMenu = menuDropdown.querySelector(".submenu");
         subMenu.style.maxHeight = subMenu.scrollHeight + "px";
      }
   }
};

// Fixed Resize Window Function
const resizeWindow = () => {
   if (window.innerWidth > 992) {
      if (navbarMenu.classList.contains("active")) {
         toggleMenu();
      }
      if (navbarMenu.querySelector(".menu-dropdown.active")) {
         collapseSubMenu();
      }
   }
};

// Initialize Event Listeners
burgerMenu.addEventListener("click", toggleMenu);
overlayMenu.addEventListener("click", toggleMenu);
navbarMenu.addEventListener("click", toggleSubMenu);
window.addEventListener("resize", resizeWindow);
