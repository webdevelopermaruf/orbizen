
$(function () {

    "use strict";


    var testim = new Swiper(".testimonials-dm .process-swiper", {
        slidesPerView: 2,
        spaceBetween: 30,
        // centeredSlides: true,
        speed: 1500,
        autoplay: {
            delay: 5000,
        },
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            type: "progressbar",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 1,
            },
            1024: {
                slidesPerView: 2,
            },
        }
    });

});



$(function () {
    var width = $(window).width();
    if (width > 991) {

        /* ===============================  isotope Masonery  =============================== */

        $('.gallery').isotope({
            itemSelector: '.items'
        });

    }
});



// video auto play on scroll

  // document.addEventListener('DOMContentLoaded', () => {
  //   const videos = document.querySelectorAll('.video');
  //   const mute_btn = document.querySelector('.mute_btn');


  //   if (mute_btn) {
  //       mute_btn.addEventListener("click", () => {
  //         if(mute_btn.classList.contains("deacative")){
  //           mute_btn.classList.remove('deactive')
  //         }else{
  //           mute_btn.classList.add("deactive")
  //         }
           
  //       });
  //     } else {
  //       mute_btn.classList.remove("deactive")
  //       console.log('Mute button not found');
  //     }
    
   

  //   // Use Intersection Observer to detect when video enters and leaves the viewport
  //   const observer = new IntersectionObserver((entries, observer) => {
  //     entries.forEach(entry => {
  //       if (entry.isIntersecting) {
  //         // Video is in the viewport, play it
  //         entry.target.play();
  //       } else {
  //         // Video is out of the viewport, pause it
  //         entry.target.pause();
  //       }
  //     });
  //   }, {
  //     threshold: 0.5 // Trigger when 50% of the video is in the viewport
  //   });

  //   videos.forEach(video => {
  //     observer.observe(video);
  //   });
  // });

  
  document.addEventListener('DOMContentLoaded', () => {
    const videos = document.querySelectorAll('.video');
    const mute_btn = document.querySelector('.mute_btn');

    if (mute_btn) {
        mute_btn.addEventListener("click", () => {
            // Toggle the 'deactive' class on the button
            if (mute_btn.classList.contains("deactive")) {
                mute_btn.classList.remove('deactive');
                // Unmute all videos
                videos.forEach(video => {
                    video.muted = false; // Unmute
                });
            } else {
                mute_btn.classList.add("deactive");
                // Mute all videos
                videos.forEach(video => {
                    video.muted = true; // Mute
                });
            }
        });
    } else {
        console.log('Mute button not found');
    }

    // Use Intersection Observer to detect when video enters and leaves the viewport
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Video is in the viewport, play it
                entry.target.play();
            } else {
                // Video is out of the viewport, pause it
                entry.target.pause();
            }
        });
    }, {
        threshold: 0.5 // Trigger when 50% of the video is in the viewport
    });

    videos.forEach(video => {
        observer.observe(video);
    });
});

