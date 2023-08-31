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
        speed:800,
        creativeEffect: {
          prev: {
           
            translate: [0, 0, -100],
          },
          next: {
            translate: ["100%", 0, 0],
          },
        },
      });
    }
}