
<link rel="stylesheet" href="Asset/bootstrap-5.3.7-dist/css/bootstrap.min.css">
<style>
  /* Sidebar Card */
  .sidebar-card {
    background: #ffffff;
    border: 2px solid #f1f1f1;
    overflow-y: auto;
    border-radius: 10px;
  }

  /* Open to work box */
  .open-work {
    background: #eaf7ee;
    border: 1px solid #cdebd7;
  }

  /* Sidebar menu */
  .sidebar-menu li {
    margin-bottom: 5px;
  }

  .sidebar-menu li a {
    display: block;
    padding: 10px 12px;
    border-radius: 10px;
    color: #333;
    text-decoration: none;
    font-size: 14px;
    transition: 0.2s;
  }

  /* Hover */
  .sidebar-menu li a:hover {
    background: #f1f5f9;
    color: #2563eb;
  }

  /* Active */
  .sidebar-menu li.active a {
    background: #e7efff;
    color: #2563eb;
    font-weight: 500;
    border-left: 5px solid #2563eb;
  }

  /* Icons */
  .sidebar-menu i {
    width: 18px;
  }

  /* Toggle switch color */
  .form-check-input:checked {
    background-color: #22c55e;
    border-color: #22c55e;
  }

  /* .offcanvas {
    max-width: 270px !important;
  } */

  .offcanvas .sidebar-menu a {
    font-size: 15px;
  }
</style>
<?php


$current_page = basename($_SERVER['PHP_SELF']);
$dismiss_attr = isset($is_mobile) && $is_mobile ? 'data-bs-dismiss="offcanvas"' : '';
?>

<div class="sidebar-card p-3 shadow-sm">

  <div class="open-work d-flex justify-content-between align-items-center p-3 mb-3 rounded-3">
    <div>
      <h6 class="mb-0 fw-semibold">Open to Work</h6>
      <small class="text-muted">Visible to recruiters</small>
    </div>
    <div class="form-check form-switch m-0">
      <input class="form-check-input" type="checkbox" checked>
    </div>
  </div>

  <div class="mb-3">
    <h5 class="fw-bold mb-1">Job Seeker</h5>
    <small class="text-muted">jobseeker@jobsportal.com</small>
  </div>

  <ul class="list-unstyled sidebar-menu">
    <li class="<?= ($current_page == 'Candidate-Dashboard.php') ? 'active' : ''; ?>">
      <a href="Candidate-Dashboard.php" <?= $dismiss_attr; ?>><i class="fa fa-gauge me-2"></i>Dashboard</a>
    </li>
    <li class="<?= ($current_page == 'editprofile.php') ? 'active' : ''; ?>">
      <a href="editprofile.php" <?= $dismiss_attr; ?>><i class="fa fa-user-pen me-2"></i>Edit Profile</a>
    </li>
    <li class="<?= ($current_page == 'build_resume.php') ? 'active' : ''; ?>">
      <a href="build_resume.php" <?= $dismiss_attr; ?>><i class="fa fa-file-lines me-2"></i>Build Resume</a>
    </li>
    <li class="<?= ($current_page == 'download_cv.php') ? 'active' : ''; ?>">
      <a href="download_cv.php" <?= $dismiss_attr; ?>><i class="fa fa-download me-2"></i>Download CV</a>
    </li>
    <li class="<?= ($current_page == 'public_profile.php') ? 'active' : ''; ?>">
      <a href="public_profile.php" <?= $dismiss_attr; ?>><i class="fa fa-eye me-2"></i>View Public Profile</a>
    </li>
    <li class="<?= ($current_page == 'my_applications.php') ? 'active' : ''; ?>">
      <a href="my_applications.php" <?= $dismiss_attr; ?>><i class="fa fa-briefcase me-2"></i>My Job Applications</a>
    </li>
    <li class="<?= ($current_page == 'favourite_jobs.php') ? 'active' : ''; ?>">
      <a href="favourite_jobs.php" <?= $dismiss_attr; ?>><i class="fa fa-heart me-2"></i>My Favourite Jobs</a>
    </li>
    <li class="<?= ($current_page == 'job_alerts.php') ? 'active' : ''; ?>">
      <a href="job_alerts.php" <?= $dismiss_attr; ?>><i class="fa fa-bell me-2"></i>Job Alerts</a>
    </li>
    <li class="<?= ($current_page == 'manage_resume.php') ? 'active' : ''; ?>">
      <a href="manage_resume.php" <?= $dismiss_attr; ?>><i class="fa fa-file me-2"></i>Manage Resume</a>
    </li>
    <li class="<?= ($current_page == 'messages.php') ? 'active' : ''; ?>">
      <a href="messages.php" <?= $dismiss_attr; ?>><i class="fa fa-envelope me-2"></i>My Messages</a>
    </li>
    <li class="<?= ($current_page == 'followings.php') ? 'active' : ''; ?>">
      <a href="followings.php" <?= $dismiss_attr; ?>><i class="fa fa-users me-2"></i>My Followings</a>
    </li>
    <li class="<?= ($current_page == 'packages.php') ? 'active' : ''; ?>">
      <a href="packages.php" <?= $dismiss_attr; ?>><i class="fa fa-box me-2"></i>Packages</a>
    </li>
    <li class="<?= ($current_page == 'payment_history.php') ? 'active' : ''; ?>">
      <a href="payment_history.php" <?= $dismiss_attr; ?>><i class="fa fa-credit-card me-2"></i>Payment History</a>
    </li>
    <li>
      <a href="logout.php" <?= $dismiss_attr; ?>><i class="fa fa-right-from-bracket me-2"></i>Logout</a>
    </li>
  </ul>

</div>