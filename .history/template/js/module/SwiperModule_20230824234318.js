export default function SwiperModule() {
    const eleFree = document.querySelectorAll(".free-slide");

    if (eleFree) {
      eleFree.forEach((ele, i) => {
        var swiper2 = new Swiper(ele.querySelector(".swiper"), {
          slidesPerView: "auto",
          lazy: !0,
          pagination: {
            el: ele.querySelector(".swiper-pagination"),
            clickable: !0,
          },
          loop: ele.querySelector(".swiper").classList.contains("--loop"),
          navigation: {
            nextEl: ele.querySelector(".next"),
            prevEl: ele.querySelector(".prev"),
          },
          speed: 1000,
          autoplay: {
            delay: 5000,
            disableOnInteraction: false,
          },
        });
        if (!ele.querySelector(".swiper").classList.contains("--auto")) {
          swiper2.autoplay.stop();
        }
      });
    }

    const bannerHome = document.querySelector(".banner-home");
    if(bannerHome){
      var swiper = new Swiper(bannerHome.querySelector(".mySwiperBannerHome"), {
        grabCursor: true,
        effect: "creative",
        speed:1000,
        pagination: {
          el: bannerHome.querySelector(".swiper-pagination"),
          clickable: !0,
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        creativeEffect: {
          prev: {
            shadow: true,
            translate: ["-20%", 0, -1],
          },
          next: {
            translate: ["100%", 0, 0],
          },
        },
      });
    }


    const homeNewSl = document.querySelector(".home-news-sl");
    if(homeNewSl){
      var swiper = new Swiper(homeNewSl.querySelector(".mySwiperHomeNews"), {
        slidesPerView:"auto",
        speed:800,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    }
}