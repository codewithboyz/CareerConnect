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

</head>

<body>
    <?php
    include('landing/nav.php');
    ?>
    <div class="overlay" id="overlay" onclick="closeSidebar()"></div>

    <!-- ══ SIDEBAR ══ -->
    <aside class="sidebar" id="sidebar">
        <div class="otw-pill">
            <div>
                <div class="otw-text">Open to Work</div>
                <div class="otw-sub">Visible to recruiters</div>
            </div>
            <label class="switch">
                <input type="checkbox" checked>
                <span class="slider"></span>
            </label>
        </div>

        <!-- <div class="sidebar-user">
            <div class="name fs-4">Job Seeker</div>
            <div class="email">
                <p class="fs-6">jobseeker123@gmail.com</p>
            </div>
        </div> -->

        <nav class="sidebar-nav">
            <a href="#" class="active"><i class="bi bi-grid-fill"></i> Dashboard</a>
            <a href="#"><i class="bi bi-person"></i> Edit Profile</a>
            <a href="#"><i class="bi bi-file-earmark-text"></i> Build Resume</a>
            <a href="#"><i class="bi bi-download"></i> Download CV</a>
            <a href="#"><i class="bi bi-eye"></i> View Public Profile</a>
            <a href="#"><i class="bi bi-briefcase"></i> My Job Applications</a>
            <a href="#"><i class="bi bi-heart"></i> My Favourite Jobs</a>
            <a href="#"><i class="bi bi-bell"></i> Job Alerts</a>
            <a href="#"><i class="bi bi-file-earmark-person"></i> Manage Resume</a>
            <a href="#"><i class="bi bi-chat-dots"></i> My Messages</a>
            <a href="#"><i class="bi bi-people"></i> My Followings</a>
            <a href="#"><i class="bi bi-box-seam"></i> Packages</a>
            <a href="#"><i class="bi bi-credit-card"></i> Payment History</a>
            <a href="#" class="text-danger"><i class="bi bi-box-arrow-right text-danger"></i class="text-danger"> Logout</a>
        </nav>
    </aside>

    <!-- ══ MAIN ══ -->
    <main class="main-content">

        <div class="mob-bar">
            <div class="mob-ham" onclick="openSidebar()"><i class="bi bi-list"></i></div>
            <div class="mob-title">Dashboard</div>
        </div>

        <!-- Stat Buttons -->
        <div class="row g-3 mb-3">
            <div class="col-6 col-md-3">
                <div class="stat-btn stat-purple">
                    <div class="stat-label fs-4">Profile Views</div>
                    <div class="stat-num">219</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-btn stat-orange">
                    <div class="stat-label fs-4">Followings</div>
                    <div class="stat-num">4</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-btn stat-blue">
                    <div class="stat-label fs-4">My CV List</div>
                    <div class="stat-num">1</div>
                </div>
            </div>
            <div class="col-6 col-md-3">
                <div class="stat-btn stat-teal">
                    <div class="stat-label fs-4">Messages</div>
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
                <div class="s-card-title fs-4">My Followings</div>
                <a href="#" class="s-view-all fs-6">View All</a>
            </div>
            <div class="row gap-4 text-center p-2">
                <div class="col-12 col-md-4 following-job-card">

                    <div class="jtitle fs-5">Web Design Studio</div>
                    <div class="jcompany fs-6">Information Technology
                        Your Location Address USA</div>
                    <h6 class="text-primary">8 Opens Jobs</h6>

                </div>
                <div class="col-12 col-md-4 following-job-card">

                    <div class="jtitle fs-5">Multimedia Design</div>
                    <div class="jcompany fs-6">Manufacturing
                        Your Location Address USA</div>
                    <h6 class="text-primary">5 Opens Jobs</h6>

                </div>
                <div class="col-12 col-md-4 following-job-card">

                    <div class="jtitle fs-5">Connect People</div>
                    <div class="jcompany fs-6">Technology Services
                        Your Location Address USA</div>
                    <h6 class="text-primary">8 Opens Jobs</h6>

                </div>
            </div>
        </div>

    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <script>
        /* ── Sidebar open/close ── */
        function openSidebar() {
            document.getElementById('sidebar').classList.add('open');
            document.getElementById('overlay').classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            document.getElementById('sidebar').classList.remove('open');
            document.getElementById('overlay').classList.remove('open');
            document.body.style.overflow = '';
        }

        /* ── Hamburger button click ── */
        var hamBtn = document.querySelector('.mob-ham');
        if (hamBtn) {
            hamBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                openSidebar();
            });
        }

        /* ── Nav link click → close on mobile + active state ── */
        document.querySelectorAll('.sidebar-nav a').forEach(function(a) {
            a.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelectorAll('.sidebar-nav a').forEach(function(l) {
                    l.classList.remove('active');
                });
                this.classList.add('active');
                if (window.innerWidth <= 992) closeSidebar();
            });
        });

        /* ── Swipe left to close sidebar on mobile ── */
        var touchStartX = 0;
        document.getElementById('sidebar').addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].clientX;
        }, {
            passive: true
        });
        document.getElementById('sidebar').addEventListener('touchend', function(e) {
            var diff = touchStartX - e.changedTouches[0].clientX;
            if (diff > 60) closeSidebar(); /* swipe left 60px → close */
        }, {
            passive: true
        });
    </script>

</body>

</html>