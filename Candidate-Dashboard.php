<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Job Seeker Dashboard</title>
    <link rel="stylesheet" href="Asset/bootstrap-5.3.7-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="candidate-dashboard/candidate-dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

</head>

<body>
    <?php
    include('landing/nav.php');
    ?>
    <div class="container mt-4 mb-5">
        <div class="row d-flex">

            <aside class="col-lg-3 d-none d-lg-block">
                <?php include('sidebar/sidebar.php'); ?>
            </aside>

            <main class="col-lg-9 col-12 main-content">

                <button class="btn btn-outline-primary d-lg-none mb-3" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                    <i class="fa-solid fa-bars me-2"></i> Menu
                </button>
                <!-- <main class="main-content"> -->

                <!-- <div class="mob-bar">
                    <div class="mob-ham" onclick="openSidebar()"><i class="bi bi-list"></i></div>
                    <div class="mob-title">Dashboard</div>
                </div> -->

                <!-- Stat Buttons -->
                <div class="row g-3 mb-5">
                    <div class="col-6 col-md-3">
                        <div class="stat-btn stat-purple">
                            <div class="stat-label fs-5">Profile Views</div>
                            <div class="stat-num">219</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-btn stat-orange">
                            <div class="stat-label fs-5">Followings</div>
                            <div class="stat-num">4</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-btn stat-blue">
                            <div class="stat-label fs-5">My CV List</div>
                            <div class="stat-num">1</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="stat-btn stat-teal">
                            <div class="stat-label fs-5">Messages</div>
                            <div class="stat-num">0</div>
                        </div>
                    </div>
                </div>

                <!-- Profile Banner -->
                <div class="profile-card">
                    <img class="banner-img"
                        src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?w=1000&q=80"
                        onerror="this.style.cssText='width:100%;height:165px;display:block;background:linear-gradient(105deg,#6366f1,#8b5cf6,#3b82f6,#14b8a6)'"
                        alt="banner" />
                    <div class="profile-info-row">
                        <div class="profile-avatar"><img src="asset/Image/user1.jpg" alt=""></div>
                        <div class="profile-details">
                            <div class="pname">Job Seeker</div>
                            <div class="ploc">Bainbridge Island, Washington, United States of America</div>
                            <div class="pcontact d-flex">
                                <p class="fs-6"><i class="bi bi-telephone-fill"></i> +1 234 567 890</p>
                                <p class="fs-6"><i class="bi bi-envelope-fill pe-2"></i>jobseeker123@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- My Applied Jobs -->
                <div class="s-card">
                    <div class="s-card-header">
                        <div class="s-card-title fs-4">My Applied Jobs</div>
                        <a href="#" class="s-view-all fs-6">View All</a>
                    </div>
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <span class="jtype jtype-full">Full Time</span>
                                <div class="jtitle fs-5">Project Manager</div>
                                <div class="jcompany fs-6">Kaneboe Station</div>
                                <div class="jsalary">Salary: USD5000 – USD6000/Monthly</div>
                                <div class="jdate">Applied: Oct 31, 2025</div>
                                <div class="jfooter">
                                    <div class="jbrand">
                                        <div class="jbrand-icon fs-4 p-3" style="background:#dcfce7;">🌿</div>
                                        Multimedia Design
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <span class="jtype jtype-full">Full Time</span>
                                <div class="jtitle fs-5">Project Manager</div>
                                <div class="jcompany fs-6">Kaneboe Station</div>
                                <div class="jsalary">Salary: USD5000 – USD6000/Monthly</div>
                                <div class="jdate">Applied: Oct 31, 2025</div>
                                <div class="jfooter">
                                    <div class="jbrand">
                                        <div class="jbrand-icon fs-4 p-3" style="background:#dcfce7;">🌿</div>
                                        Multimedia Design
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <span class="jtype jtype-full">Full Time</span>
                                <div class="jtitle fs-5">Project Manager</div>
                                <div class="jcompany fs-6">Kaneboe Station</div>
                                <div class="jsalary">Salary: USD5000 – USD6000/Monthly</div>
                                <div class="jdate">Applied: Oct 31, 2025</div>
                                <div class="jfooter">
                                    <div class="jbrand">
                                        <div class="jbrand-icon fs-4 p-3" style="background:#dcfce7;">🌿</div>
                                        Multimedia Design
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Active Package Details -->
                <div class="s-card">
                    <div class="s-card-header">
                        <div class="s-card-title fs-4">Active Package Details</div>
                    </div>
                    <div class="d-flex gap-3 flex-wrap">
                        <div class="pkg-box">
                            <div class="pkg-lbl">Package Name</div>
                            <div class="pkg-val">Basic Jobs View</div>
                        </div>
                        <div class="pkg-box">
                            <div class="pkg-lbl">Price</div>
                            <div class="pkg-val">USD 10</div>
                        </div>
                        <div class="pkg-box">
                            <div class="pkg-lbl">Applications</div>
                            <div class="pkg-val">02 / 20</div>
                        </div>
                        <div class="pkg-box">
                            <div class="pkg-lbl">Started On</div>
                            <div class="pkg-val">N/A</div>
                        </div>
                        <div class="pkg-box expire-box">
                            <div class="pkg-lbl">Expires On</div>
                            <div class="pkg-val expire-val">31 Dec, 2025</div>
                        </div>
                    </div>
                </div>

                <!-- Recommended Jobs -->
                <div class="s-card">
                    <div class="s-card-header">
                        <div class="s-card-title fs-4">Recommended Jobs</div>
                        <a href="#" class="s-view-all fs-6">View All</a>
                    </div>
                    <div class="row g-3">
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <span class="jtype jtype-full">Full Time</span>
                                <div class="jtitle fs-5">Project Manager</div>
                                <div class="jcompany fs-6">Kaneboe Station</div>
                                <div class="jsalary">Salary: USD5000 – USD6000/Monthly</div>
                                <div class="jdate">Closed on: Oct 31, 2025</div>
                                <div class="jfooter">
                                    <div class="jbrand">
                                        <div class="jbrand-icon fs-4 p-3" style="background:#dcfce7;">🌿</div>
                                        Multimedia Design
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <span class="jtype jtype-full">Full Time</span>
                                <div class="jtitle fs-5">Project Manager</div>
                                <div class="jcompany fs-6">Kaneboe Station</div>
                                <div class="jsalary">Salary: USD5000 – USD6000/Monthly</div>
                                <div class="jdate">Closed on: Oct 31, 2025</div>
                                <div class="jfooter">
                                    <div class="jbrand">
                                        <div class="jbrand-icon fs-4 p-3" style="background:#dcfce7;">🌿</div>
                                        Multimedia Design
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <span class="jtype jtype-full">Full Time</span>
                                <div class="jtitle fs-5">Project Manager</div>
                                <div class="jcompany fs-6">Kaneboe Station</div>
                                <div class="jsalary">Salary: USD5000 – USD6000/Monthly</div>
                                <div class="jdate">Closed on: Oct 31, 2025</div>
                                <div class="jfooter">
                                    <div class="jbrand">
                                        <div class="jbrand-icon fs-4 p-3" style="background:#dcfce7;">🌿</div>
                                        Multimedia Design
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- following jobs -->
                <div class="s-card">
                    <div class="s-card-header">
                        <div class="s-card-title fs-4">Recommended Jobs</div>
                        <a href="#" class="s-view-all fs-6">View All</a>
                    </div>
                    <div class="row g-3 text-center">
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <div>
                                    <div class="jtitle fs-5">Web Design Studio</div>
                                    <div class="jcompany fs-6">Information Technology
                                        Your Location Address USA</div>
                                    <h6 class="text-primary">8 Opens Jobs</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <div>
                                    <div class="jtitle fs-5">Web Design Studio</div>
                                    <div class="jcompany fs-6">Information Technology
                                        Your Location Address USA</div>
                                    <h6 class="text-primary">8 Opens Jobs</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="job-card ">
                                <div>
                                    <div class="jtitle fs-5">Web Design Studio</div>
                                    <div class="jcompany fs-6">Information Technology
                                        Your Location Address USA</div>
                                    <h6 class="text-primary">8 Opens Jobs</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- </main> -->


            </main>

        </div>
    </div>






    <!-- ══ MAIN ══ -->
    <?php include('sidebar/mobile_sidebar.php'); ?>

    <?php include('landing/footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>