<link rel="stylesheet" href="landing/css/Categoriwise_job.css">

<section class="category-section">

    <div class="container">

        <div class="text-center mb-5">
            <p class="sub-title">Find Your Path</p>
            <h2 class="main-title">Browse Jobs By Categories</h2>
        </div>

        <div class="slider-container">

            <button class="arrow left " id="leftBtn">&#10094;</button>

            <div class="slider" id="slider">

                <div class="category-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/128/2910/2910768.png">
                    </div>
                    <h5>Database Administration</h5>
                </div>

                <div class="category-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png">
                    </div>
                    <h5>Business Management</h5>
                </div>

                <div class="category-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/128/4140/4140048.png">
                    </div>
                    <h5>Admin</h5>

                </div>

                <div class="category-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/128/1055/1055687.png">
                    </div>
                    <h5>Information Technology</h5>

                </div>

                <div class="category-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/128/6062/6062646.png">
                    </div>
                    <h5>Software Development</h5>
                </div>

                <div class="category-card">
                    <div class="icon-box">
                        <img src="https://cdn-icons-png.flaticon.com/128/3135/3135715.png">
                    </div>
                    <h5>Marketing</h5>

                </div>

            </div>

            <button class="arrow right" id="rightBtn">&#10095;</button>

        </div>

        <div class="text-center">
            <button class="view-btn btn-primaty">View All Categories</button>
        </div>

    </div>

</section>

<script>
const slider = document.getElementById("slider");
const leftBtn = document.getElementById("leftBtn");
const rightBtn = document.getElementById("rightBtn");

function getScrollAmount() {

    const card = document.querySelector(".category-card");

    if (window.innerWidth < 768) {
        return card.offsetWidth;
    } else {
        return card.offsetWidth + 25;
    }

}

rightBtn.addEventListener("click", () => {
    slider.scrollBy({
        left: getScrollAmount(),
        behavior: "smooth"
    });
});

leftBtn.addEventListener("click", () => {
    slider.scrollBy({
        left: -getScrollAmount(),
        behavior: "smooth"
    });
});

/* swipe */

let startX = 0;

slider.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
});

slider.addEventListener("touchend", (e) => {

    let endX = e.changedTouches[0].clientX;

    if (startX > endX) {
        slider.scrollBy({
            left: getScrollAmount(),
            behavior: "smooth"
        });
    } else {
        slider.scrollBy({
            left: -getScrollAmount(),
            behavior: "smooth"
        });
    }

});
</script>