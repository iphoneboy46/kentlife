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
  if (bannerHome) {
    var swiper = new Swiper(bannerHome.querySelector(".mySwiperBannerHome"), {
      grabCursor: true,
      effect: "creative",
      speed: 1000,
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
  if (homeNewSl) {
    var swiper = new Swiper(homeNewSl.querySelector(".mySwiperHomeNews"), {
      slidesPerView: "auto",
      speed: 1000,
      centeredSlides: true, loop: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }

  const homeKh = document.querySelector(".home-kh");
  if (homeKh) {
    var swiperLfTop = new Swiper(homeKh.querySelector(".mySwiperLfTop"), {
      slidesPerView: "auto",
      speed: 800,
      pagination: {
        el: homeKh.querySelector(".swiper-pagination"),
        type: "progressbar",
      },
    });



    swiperLfTop.on("slideChange", () => {
      const activeIndex = swiperLfTop.activeIndex;

      const itemBoxs = homeKh.querySelectorAll(".home-kh-lf-bottom-item");

      const itemBoxActive = homeKh.querySelector(".actived");

      if (itemBoxActive) {
        itemBoxActive.classList.remove("actived");
      }

      itemBoxs[activeIndex].classList.add("actived");

      const numberTop = homeKh.querySelector(".home-kh-lf-pagi-num.top");
      var numberPage =  + swiperLfTop.realIndex + 1;
      numberTop.innerHTML = "0"  + numberPage

    });


    var swiperKhSl = new Swiper(homeKh.querySelector(".mySwiperHomeKhSl"), {
      slidesPerView: 1,
      speed: 800,

      breakpoints: {
        
        460: {
          slidesPerView: 1.5,
          
        },
      },
    });

    swiperLfTop.controller.control = swiperKhSl;
    swiperKhSl.controller.control = swiperLfTop;

    const itemBoxs = homeKh.querySelectorAll(".home-kh-lf-bottom-item");
    itemBoxs.forEach((itemBox, index) => {
      itemBox.addEventListener("click", () => {
        const itemBoxActive = homeKh.querySelector(".actived");
        itemBoxActive.classList.remove("actived");
        itemBox.classList.add("actived");
        swiperLfTop.slideTo(index);
      })
    })

 

  }
  const contactSl = document.querySelector(".contact-sl");
  console.log(contactSl);
  if(contactSl){
    var swiper = new Swiper(contactSl.querySelector(".mySwiperContact"), {
      effect: "coverflow",
      grabCursor: true,
      // centeredSlides: true,
      slidesPerView:3,
      loop:true,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 2,
        slideShadows: false,
      },
      pagination: {
        el: contactSl.querySelector(".swiper-pagination"),
      },
    });
  }
}