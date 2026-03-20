<link rel="stylesheet" href="landing/css/cityslider.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<section>
    <div style="background: linear-gradient(to right, #f3f7ff, #e8f8fe) ;">
        <div class="container" style="padding-top: 40px; padding-bottom: 40px;">

            <p class=" sub-title text-center">Choose Your Location</p>
            <h2 class=" main-title text-center">Jobs by Cities</h2>

            <div class="swiper mySlider">

                <div class="swiper-wrapper">


                    <!-- CARD 1 -->
                    <div class="swiper-slide">

                        <div class="city-card">

                            <img src="https://images.unsplash.com/photo-1536421469767-80559bb6f5e1">

                            <div class="overlay"></div>

                            <div class="city-name">ATLANTA</div>

                            <div class="job-count">
                                <i class="bi bi-briefcase-fill"></i>
                                18 JOBS
                            </div>

                        </div>

                    </div>



                    <!-- CARD 2 -->
                    <div class="swiper-slide">

                        <div class="city-card">

                            <img src="https://images.unsplash.com/photo-1480714378408-67cf0d13bc1b">

                            <div class="overlay"></div>

                            <div class="city-name">BARRINGTON</div>

                            <div class="job-count">
                                <i class="bi bi-briefcase-fill"></i>
                                9 JOBS
                            </div>

                        </div>

                    </div>



                    <!-- CARD 3 -->
                    <div class="swiper-slide">

                        <div class="city-card">

                            <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df">

                            <div class="overlay"></div>

                            <div class="city-name">DURANT</div>

                            <div class="job-count">
                                <i class="bi bi-briefcase-fill"></i>
                                12 JOBS
                            </div>

                        </div>

                    </div>



                    <!-- CARD 4 -->
                    <div class="swiper-slide">

                        <div class="city-card">

                            <img src="https://images.unsplash.com/photo-1494526585095-c41746248156">

                            <div class="overlay"></div>

                            <div class="city-name">BESSEMER</div>

                            <div class="job-count">
                                <i class="bi bi-briefcase-fill"></i>
                                6 JOBS
                            </div>

                        </div>

                    </div>

                    <!-- CARD 5 -->

                    <div class="swiper-slide">

                        <div class="city-card">

                            <img src="https://images.unsplash.com/photo-1494526585095-c41746248156">

                            <div class="overlay"></div>

                            <div class="city-name">BESSEMER</div>

                            <div class="job-count">
                                <i class="bi bi-briefcase-fill"></i>
                                6 JOBS
                            </div>

                        </div>

                    </div>

                    <!-- CARD 6 -->

                    <div class="swiper-slide">

                        <div class="city-card">

                            <img src="https://images.unsplash.com/photo-1477959858617-67f85cf4f1df">

                            <div class="overlay"></div>

                            <div class="city-name">DURANT</div>

                            <div class="job-count">
                                <i class="bi bi-briefcase-fill"></i>
                                12 JOBS
                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>
    </div>

</section>



<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
    var swiper = new Swiper(".mySlider", {

        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,

        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        breakpoints: {

            0: {
                slidesPerView: 1
            },

            576: {
                slidesPerView: 2
            },

            768: {
                slidesPerView: 3
            },

            992: {
                slidesPerView: 4
            }

        }

    });
</script>