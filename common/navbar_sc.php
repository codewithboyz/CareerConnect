<link rel="stylesheet" href="../../asset/css/navbar.css">
<?php include "../../variable/config.php"; ?>

<nav class="navbar navbar-expand-lg navbar-light custom-navbar py-3 sticky-top"
  style=" background: rgba(255, 255, 255, 0.6); ">
  <div class="container">

    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="../../asset/Image/testimonials-4.jpg" width="35" class="me-2" alt="Logo" />

      <div>
        <span class="logo-main">Jobs</span>
        <span class="logo-bold">Portal</span>
        <div class="logo-sub">ONLINE JOBS FINDER</div>
      </div>
    </a>

    <div class="d-flex align-items-center gap-3 order-lg-last">

      <ul class="navbar-nav profile-wrapper flex-row mb-0">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link p-0" data-bs-toggle="dropdown" data-bs-auto-close="outside">
            <img src="../../asset/Image/testimonials-4.jpg" class="profile-img shadow-sm" alt="Profile" />
          </a>
          <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg dropdown-menu-end mt-1"
            style="position: absolute !important; width: 200px;">
            <li><a href="<?php echo BASE_URL ?>index.php">Dashboard</a></li>
            <li><a href="editprofile.php">View Profile</a></li>
            <li><a href="build_resume.php">Build Resume</a></li>
            <li><a href="download_cv.php">Download CV</a></li>
            <li><a href="#">Manage Resume</a></li>
            <li><a href="#">My Messages</a></li>
            <li><a href="my_followings.php">My Followings</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>

      <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">

      <div class="offcanvas-header border-bottom d-lg-none justify-content-end">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

      <div class="offcanvas-body d-flex flex-column flex-lg-row align-items-lg-center">

        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>index.php">Home</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Jobs</a>
            <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
              <li><a href="<?php echo BASE_URL ?>screen\employee\job_screen.php">Browse Jobs</a></li>
              <li><a href="<?php echo BASE_URL ?>screen\employee\job_single.php">Job Details</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
              data-bs-auto-close="outside">Employer</a>
            <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
              <li><a href="<?php echo BASE_URL ?>screen\employee\employeer.php">Employer List</a></li>
              <li><a href="<?php echo BASE_URL ?>screen\employee\employee_single.php">Employer Single</a></li>
              <li><a href="<?php echo BASE_URL ?>screen\employee\employer-dashboard.php">Employer Dashboard</a></li>
              <li><a href="<?php echo BASE_URL ?>screen\employee\job_post.php">Post Job</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
              data-bs-auto-close="outside">Candidate</a>
            <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
              <li><a href="<?php echo BASE_URL ?>screen/candidate/candidate.php">Candidate List</a></li>
              <li><a href="#">Candidate Profile</a></li>
              <li><a href="<?php echo BASE_URL ?>screen/candidate/editprofile.php">Edit Profile</a></li>
              <li><a href="<?php echo BASE_URL ?>screen/candidate/Candidate-Dashboard.php">Candidate Dashboard</a></li>
              <li><a href="<?php echo BASE_URL ?>screen/candidate/public_profile.php">View Public Profile</a></li>
              <li><a href="<?php echo BASE_URL ?>screen/candidate/my_followings.php">My Following</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL ?>screen/admin/Contactus.php">Contact
              Us</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
              data-bs-auto-close="outside">Pages</a>
            <ul class="dropdown-menu custom-dropdown border-0 shadow-sm-lg">
              <li><a href="<?php echo BASE_URL ?>screen/admin/aboutus.php">About</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="<?php echo BASE_URL ?>screen/admin/page-404.php">404 Page</a></li>
            </ul>
          </li>
        </ul>

        <div class="nav-buttons d-flex align-items-center">
          <a href="login.php" class="btn btn-outline-primary rounded-pill sign-btn">Sign in</a>
          <a href="#" class="btn btn-success rounded-pill register-btn ms-lg-2 mt-3 mt-lg-0">Register</a>
        </div>

      </div>
    </div>
  </div>
</nav>