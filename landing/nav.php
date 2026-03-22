<link rel="stylesheet" href="landing/css/nav.css">

<nav class="navbar navbar-expand-lg navbar-light custom-navbar py-3 sticky-top"
    style=" background: rgba(255, 255, 255, 0.6); ">
    <div class="container">

        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="Asset/Image/testimonials-4.jpg" width="35" class="me-2" alt="Logo" />
            <div>
                <span class="logo-main">Jobs</span>
                <span class="logo-bold">Portal</span>
                <div class="logo-sub">ONLINE JOBS FINDER</div>
            </div>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
            aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">

            <div class="offcanvas-header border-bottom d-lg-none justify-content-end">
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body d-flex flex-column flex-lg-row justify-content-between align-items-lg-center">

                <ul class="navbar-nav mx-auto">
                    <a class="nav-link" href="index.php">
                        Home
                    </a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            Jobs
                        </a>
                        <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
                            <li><a href="job.php">Browse Jobs</a></li>
                            <li><a href="job_single.php">Job Details</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            Employer
                        </a>
                        <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
                            <li><a href="employer.php">Employer List</a></li>
                            <li><a href="#">Employer Details</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            Candidate
                        </a>
                        <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
                            <li><a href="candidate.php">Candidate List</a></li>
                            <li><a href="#">Candidate Profile</a></li>
                            <li><a href="Candidate-Dashboard.php">Candidate Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            Blog
                        </a>
                        <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
                            <li><a href="#">Blog Grid</a></li>
                            <li><a href="#">Blog Details</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Contactus.php">Contact Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside">
                            Pages
                        </a>
                        <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
                            <li><a href="aboutus.php">About</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="nav-buttons d-flex align-items-center">
                    <a href="login.php" class="btn btn-outline-primary rounded-pill sign-btn">Sign in</a>
                    <a href="#" class="btn btn-success rounded-pill register-btn ms-lg-2">Register</a>

                    <div class="profile-wrapper ms-lg-3 " style="list-style: none;">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                                <img src="Asset/Image/testimonials-4.jpg" class="profile-img" alt="Profile" />
                            </a>
                            <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="editprofile.php">View Profile</a></li>
                                <li><a href="#">Bild Resume</a></li>
                                <li><a href="#">Dawnload CV</a></li>
                                <li><a href="#">Manage Resume</a></li>
                                <li><a href="#">My Messages</a></li>
                                <li><a href="#">My Followings</a></li>
                                <li><a href="#">Packages</a></li>
                                <li><a href="#">Payment History</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>

<script src="Asset/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    if (window.innerWidth >= 992) {
        document.querySelectorAll('.dropdown').forEach(drop => {
            drop.addEventListener('mouseenter', function() {
                let menu = this.querySelector('.dropdown-menu');
                if (menu) menu.classList.add('show');
            });
            drop.addEventListener('mouseleave', function() {
                let menu = this.querySelector('.dropdown-menu');
                if (menu) menu.classList.remove('show');
            });
        });
    }
});
</script>