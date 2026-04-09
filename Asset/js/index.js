document.addEventListener("DOMContentLoaded", function () {

  /* =========================
     CATEGORY SLIDER
  ========================== */
  const slider = document.getElementById("slider");
  const leftBtn = document.getElementById("leftBtn");
  const rightBtn = document.getElementById("rightBtn");

  function getScrollAmount() {
    const card = document.querySelector(".category-card");
    if (!card) return 300;

    return window.innerWidth < 768
      ? card.offsetWidth
      : card.offsetWidth + 25;
  }

  if (slider && leftBtn && rightBtn) {

    rightBtn.addEventListener("click", () => {
      slider.scrollBy({
        left: getScrollAmount(),
        behavior: "smooth",
      });
    });

    leftBtn.addEventListener("click", () => {
      slider.scrollBy({
        left: -getScrollAmount(),
        behavior: "smooth",
      });
    });

    let startX = 0;

    slider.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
    });

    slider.addEventListener("touchend", (e) => {
      let endX = e.changedTouches[0].clientX;

      slider.scrollBy({
        left: startX > endX ? getScrollAmount() : -getScrollAmount(),
        behavior: "smooth",
      });
    });
  }

  /* =========================
     VIDEO MODAL
  ========================== */
  const videoModal = document.getElementById("videoModal");
  const iframe = document.getElementById("video");

  if (videoModal && iframe) {
    videoModal.addEventListener("show.bs.modal", function () {
      iframe.src = "https://www.youtube.com/embed/eONZdoyQn30";
    });

    videoModal.addEventListener("hidden.bs.modal", function () {
      iframe.src = "";
    });
  }

  /* =========================
     SWIPER SLIDER
  ========================== */
  if (typeof Swiper !== "undefined") {
    new Swiper(".mySlider", {
      slidesPerView: 4,
      spaceBetween: 30,
      loop: true,

      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },

      breakpoints: {
        0: { slidesPerView: 1 },
        576: { slidesPerView: 2 },
        768: { slidesPerView: 3 },
        992: { slidesPerView: 4 },
      },
    });
  }

  /* =========================
     TESTIMONIAL SLIDER
  ========================== */
  const slider24 = document.getElementById("sliderContainer");
  const btnNext = document.getElementById("nextBtn");
  const btnPrev = document.getElementById("prevBtn");

  if (slider24 && btnNext && btnPrev) {
    btnNext.onclick = function () {
      slider24.scrollBy({
        left: 350,
        behavior: "smooth",
      });
    };

    btnPrev.onclick = function () {
      slider24.scrollBy({
        left: -350,
        behavior: "smooth",
      });
    };
  }

});