<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Dashboard</title>
    <link rel="stylesheet" href="../../asset/css/employer-dashboard.css">
    <?php include "../../common/header_sc.php"; ?>

</head>

<body>
    <?php
    include '../../common/navbar_sc.php';
    ?>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4 class="p-3">CareerConnect</h4>
        <a href="#" class="emplink"><i class="bi bi-grid-fill pe-2"></i>Dashboard</a>
        <a href="#" class="emplink"><i class="fa-solid fa-user-pen pe-2"></i>Edit Account Details</a>
        <a href="#" class="emplink"><i class="fa-solid fa-building pe-2"></i>Company Public Profile</a>
        <a href="#" class="emplink"><i class="fa-solid fa-plus pe-2"></i>Post Jobs</a>
        <a href="#" class="emplink"><i class="fa-solid fa-briefcase pe-2"></i>Manage Jobs</a>
        <a href="#" class="emplink"><i class="fa-solid fa-envelope pe-2"></i>Company Message</a>
        <a href="#" class="emplink"><i class="fa-solid fa-users pe-2"></i>Company Followers</a>
        <a href="#" class="text-danger"><i class="fa-solid fa-right-from-bracket pe-2 "></i>Logout</a>
    </div>

    <div class="main">

        <!-- Top -->
        <div class="d-flex align-items-center mb-3">
            <i class="fa fa-bars menu-btn me-3" id="menuBtn"></i>

        </div>
        <div class="row g-4 mb-5">

            <div class="col-sm-6 col-lg-3">
                <div class="stats-card bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Posts</h6>
                            <h3>3</h3>
                        </div>
                        <i class="fa fa-file-alt fa-2x"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="stats-card bg-success text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Vacancy</h6>
                            <h3>5</h3>
                        </div>
                        <i class="fa fa-briefcase fa-2x"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="stats-card bg-warning text-dark">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Total Applications</h6>
                            <h3>3</h3>
                        </div>
                        <i class="fa fa-users fa-2x"></i>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="stats-card bg-danger text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6>Followers</h6>
                            <h3>99</h3>
                        </div>
                        <i class="fa fa-heart fa-2x"></i>
                    </div>
                </div>
            </div>

        </div>
        <!-- ================= FRONTEND ================= -->
        <div class="card card-box p-3 mb-4">
            <h5>Frontend Developers</h5>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Experience</th>
                        <th>Skills</th>
                        <th>Salary</th>
                        <th>CV</th>
                        <th>GitHub</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td data-label="Name">Rahul Sharma</td>
                        <td data-label="Email">rahul@gmail.com</td>
                        <td data-label="Experience">2 Years</td>
                        <td data-label="Skills">React</td>
                        <td data-label="Salary">₹5 LPA</td>
                        <td data-label="CV"><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                        <td data-label="GitHub"><a href="#" class="btn btn-sm btn-dark">GitHub</a></td>
                        <td data-label="Status"><span class="badge bg-warning text-dark">Pending</span></td>
                        <td data-label="Action">
                            <button class="btn btn-success btn-sm">Accept</button>
                            <button class="btn btn-danger btn-sm">Reject</button>
                            <button class="btn btn-primary btn-sm">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ================= BACKEND ================= -->
        <div class="card card-box p-3 mb-4">
            <h5>Backend Developers</h5>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Experience</th>
                        <th>Skills</th>
                        <th>Salary</th>
                        <th>CV</th>
                        <th>GitHub</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td data-label="Name">Anita Das</td>
                        <td data-label="Email">anita@gmail.com</td>
                        <td data-label="Experience">3 Years</td>
                        <td data-label="Skills">PHP, Laravel</td>
                        <td data-label="Salary">₹6 LPA</td>
                        <td data-label="CV"><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                        <td data-label="GitHub"><a href="#" class="btn btn-sm btn-dark">GitHub</a></td>
                        <td data-label="Status"><span class="badge bg-success">Shortlisted</span></td>
                        <td data-label="Action">
                            <button class="btn btn-success btn-sm">Accept</button>
                            <button class="btn btn-danger btn-sm">Reject</button>
                            <button class="btn btn-primary btn-sm">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ================= FULLSTACK ================= -->
        <div class="card card-box p-3 mb-4">
            <h5>Fullstack Developers</h5>

            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Experience</th>
                        <th>Skills</th>
                        <th>Salary</th>
                        <th>CV</th>
                        <th>GitHub</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td data-label="Name">Arjun Sen</td>
                        <td data-label="Email">arjun@gmail.com</td>
                        <td data-label="Experience">4 Years</td>
                        <td data-label="Skills">MERN</td>
                        <td data-label="Salary">₹8 LPA</td>
                        <td data-label="CV"><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                        <td data-label="GitHub"><a href="#" class="btn btn-sm btn-dark">GitHub</a></td>
                        <td data-label="Status"><span class="badge bg-warning text-dark">Pending</span></td>
                        <td data-label="Action">
                            <button class="btn btn-success btn-sm">Accept</button>
                            <button class="btn btn-danger btn-sm">Reject</button>
                            <button class="btn btn-primary btn-sm">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    <?php
    include('../../common/footer_sc.php');
    ?>
    

</body>

</html>