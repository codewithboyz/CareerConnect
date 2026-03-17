<link rel="stylesheet" href="Asset/css/nav.css" />
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3"
    style="background-color: #f8f9fa; margin: 0; padding: 0;">
    <div class=" container">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="Asset/Image/testimonials-4.jpg" width="35" class="me-2" />
            <div>
                <span class="logo-main">Jobs</span>
                <span class="logo-bold">Portal</span>
                <div class="logo-sub">ONLINE JOBS FINDER</div>
            </div>
        </a>

        <!-- Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-dropdown="home">Home</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a href="#home1">Home 1</a></li>
                        <li><a href="#home2">Home 2</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-dropdown="jobs">Jobs</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a href="#">Browse Jobs</a></li>
                        <li><a href="#">Job Details</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-dropdown="employer">Employer</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a href="#">Employer List</a></li>
                        <li><a href="#">Employer Details</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-dropdown="candidate">Candidate</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a href="#">Candidate List</a></li>
                        <li><a href="#">Candidate Profile</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-dropdown="blog">Blog</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a href="#">Blog Grid</a></li>
                        <li><a href="#">Blog Details</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-dropdown="pages">Pages</a>
                    <ul class="dropdown-menu custom-dropdown">
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Buttons -->
            <div class="nav-buttons d-flex align-items-center">
                <a href="#" class="btn btn-outline-primary sign-btn">Sign in</a>

                <a href="#" class="btn btn-success register-btn ms-2">Register</a>

                <img src="Asset/Image/testimonials-4.jpg" class="profile-img ms-3" />
            </div>
        </div>
    </div>
</nav>


<script>
const dropdownLinks = document.querySelectorAll(".dropdown");

dropdownLinks.forEach(drop => {

    drop.addEventListener("mouseenter", () => {
        drop.querySelector(".custom-dropdown").style.display = "block";
    });

    drop.addEventListener("mouseleave", () => {
        drop.querySelector(".custom-dropdown").style.display = "none";
    });

});
</script>