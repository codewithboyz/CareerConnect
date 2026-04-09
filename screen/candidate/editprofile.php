<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Job Seeker Profile</title>

    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/editprofile.css">
    

<body>
    <?php include "../../common/navbar_sc.php"; ?>
    <div class="container">

        <div class="row ">
            <!-- SIDEBAR -->
            <aside class="col-lg-3 d-none d-lg-block">
                <?php include "../../common/slidebar.php"; ?>
            </aside>
            <!-- MAIN CONTENT -->
            <div class="col-lg-9 p-4">

                <!-- PROFILE HEADER -->
                <div class="card profile-card p-4 mb-4">

                    <div class="profile-wrapper">

                        <!-- LEFT: IMAGE -->
                        <div class="profile-left">
                            <img src="../../asset/image/user1.jpg" alt="user">

                            <div class="update-photo">
                                <i class="bi bi-upload"></i> Update Photo
                            </div>
                        </div>

                        <!-- RIGHT: CONTENT -->
                        <div class="profile-right">

                            <span class="profile-badge">Candidate Profile</span>

                            <h1 class="profile-name">Job Seeker</h1>

                            <p class="profile-desc">
                                Keep your information fresh so hiring teams understand your intent,
                                availability and the type of roles you're excited about.
                            </p>

                            <div class="profile-tags">
                                <span><i class="bi bi-briefcase"></i> Product Design Lead</span>
                                <span><i class="bi bi-geo-alt"></i> Remote · USA</span>
                                <span><i class="bi bi-clock"></i> Updated 2 days ago</span>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- PERSONAL INFO -->
                <div class="card info-card p-4 mb-4">

                    <!-- HEADER -->
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">

                        <div>
                            <p class="section-label">PROFILE</p>
                            <h3 class="section-title">Personal Information</h3>
                            <p class="section-subtitle">
                                These details power your public profile and application cards.
                            </p>
                        </div>

                        <button class="btn upload-btn">
                            <i class="bi bi-upload"></i> Upload resume
                        </button>

                    </div>

                    <!-- FORM -->
                    <div class="row g-4 mt-3">

                        <div class="col-md-6 col-lg-3">
                            <label>Full name</label>
                            <input type="text" class="form-control custom-input" value="Jordan Blake">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Professional title</label>
                            <input type="text" class="form-control custom-input" value="Lead Product Designer">
                        </div>

                        <div class="col-md-6 col-lg-3 position-relative">
                            <label>Email address</label>
                            <input type="email" class="form-control custom-input pe-5" value="you@company.com">
                            <i class="bi bi-envelope-fill input-icon"></i>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Phone</label>
                            <input type="text" class="form-control custom-input" value="+1 234 567 890">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Primary location</label>
                            <input type="text" class="form-control custom-input" value="Seattle, USA">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Preferred locations</label>
                            <input type="text" class="form-control custom-input" value="Remote · San Francisco · B">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Website</label>
                            <input type="text" class="form-control custom-input" value="https://www.personal-site.">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Portfolio / Case study</label>
                            <input type="text" class="form-control custom-input" value="https://dribbble.com/jorda">
                        </div>

                        <div class="col-12">
                            <label>About you</label>
                            <textarea class="form-control custom-input" rows="4">
Summarize your superpowers, recent wins, and what you're looking for next.
            </textarea>
                        </div>

                    </div>

                </div>

                <!-- PROFESSIONAL SNAPSHOT -->
                <div class="card info-card p-4 mb-4">

                    <!-- HEADER -->
                    <div class="mb-3">
                        <p class="section-label">CAREER</p>
                        <h3 class="section-title">Professional Snapshot</h3>
                        <p class="section-subtitle">
                            Showcase your current standing and ideal role.
                        </p>
                    </div>

                    <div class="row g-4">

                        <div class="col-md-6 col-lg-3">
                            <label>Experience level</label>
                            <input type="text" class="form-control custom-input" value="10+ years">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Current company</label>
                            <input type="text" class="form-control custom-input" value="Skyline Digital">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Notice period</label>
                            <input type="text" class="form-control custom-input" value="2 weeks">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Desired employment</label>
                            <input type="text" class="form-control custom-input" value="Full-time">
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <label>Salary expectation</label>
                            <input type="text" class="form-control custom-input" value="USD 120k – 150k / year">
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <label>Work preference</label>
                            <input type="text" class="form-control custom-input" value="Remote friendly">
                        </div>

                        <div class="col-lg-4">
                            <label>Target roles</label>
                            <textarea class="form-control custom-input" rows="2">
Principal Product Designer, Product Design Manager, Design Lead
            </textarea>
                        </div>

                    </div>

                </div>

                <!-- SKILLS -->
                <div class="card info-card p-4 mb-4">

                    <!-- HEADER -->
                    <div class="mb-3">
                        <p class="section-label">SKILLS</p>
                        <h3 class="section-title">Skills & Tools</h3>
                        <p class="section-subtitle">
                            Highlight stacks, frameworks, and certifications.
                        </p>
                    </div>

                    <!-- SKILL TAGS -->
                    <div id="skillsContainer" class="skills-container mt-3">
                        <span class="skill-pill">Product Strategy</span>
                        <span class="skill-pill">Design Systems</span>
                        <span class="skill-pill">Figma</span>
                        <span class="skill-pill">React</span>
                        <span class="skill-pill">UX Research</span>
                    </div>

                    <!-- ADD SKILL BOX -->
                    <div class="add-skill-box mt-3" onclick="activateInput()">
                        <span id="addText">+ Add skill</span>
                        <input type="text" id="skillInput" class="skill-input">
                    </div>

                </div>

                <!-- EXPERIENCE -->
                <div class="card info-card p-4 mb-4">

                    <!-- HEADER -->
                    <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">

                        <div>
                            <p class="section-label">EXPERIENCE</p>
                            <h3 class="section-title">Experience & Education</h3>
                            <p class="section-subtitle">
                                Keep your latest role and flagship education updated.
                            </p>
                        </div>

                        <button class="btn add-entry-btn">
                            <i class="bi bi-plus-circle"></i> Add entry
                        </button>

                    </div>

                    <!-- FORM -->
                    <div class="row g-4 mt-3">

                        <div class="col-md-6 col-lg-3">
                            <label>Company</label>
                            <input type="text" class="form-control custom-input" value="Skyline Digital">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Role</label>
                            <input type="text" class="form-control custom-input" value="Lead Product Designer">
                        </div>

                        <div class="col-md-6 col-lg-3 position-relative">
                            <label>Start date</label>
                            <input type="text" class="form-control custom-input pe-5" placeholder="--------, ----">
                            <i class="bi bi-calendar input-icon"></i>
                        </div>

                        <div class="col-md-6 col-lg-3 position-relative">
                            <label>End date</label>
                            <input type="text" class="form-control custom-input pe-5" placeholder="--------, ----">
                            <i class="bi bi-calendar input-icon"></i>
                        </div>

                        <div class="col-lg-6">
                            <label>Key highlights</label>
                            <textarea class="form-control custom-input" rows="3">
Scaled design system, mentored 6 designers, partnered with research to ship 4 product lines.
            </textarea>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Education</label>
                            <input type="text" class="form-control custom-input" value="Stanford · BSc Human Com">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Graduation year</label>
                            <input type="text" class="form-control custom-input" value="2014">
                        </div>

                    </div>

                </div>


                <!-- SOCIAL LINKS -->
                <div class="card info-card p-4 mb-4">

                    <!-- HEADER -->
                    <div class="mb-3">
                        <p class="section-label">LINKS</p>
                        <h3 class="section-title">Social & Contact Links</h3>
                        <p class="section-subtitle">
                            Share channels where hiring teams can follow your work.
                        </p>
                    </div>

                    <!-- FORM -->
                    <div class="row g-4 mt-2">

                        <div class="col-md-6 col-lg-3">
                            <label>LinkedIn</label>
                            <input type="text" class="form-control custom-input" value="https://www.linkedin.com/">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Dribbble</label>
                            <input type="text" class="form-control custom-input" value="https://dribbble.com/user">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>GitHub / Code</label>
                            <input type="text" class="form-control custom-input" value="https://github.com/username">
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <label>Twitter / X</label>
                            <input type="text" class="form-control custom-input" value="https://twitter.com/username">
                        </div>

                    </div>

                </div>

                <!-- BUTTONS -->
                <div class="text-end">
                    <button class="btn btn-light">Cancel</button>
                    <button class="btn btn-primary">Save Changes</button>
                </div>

            </div>
        </div>

    </div>
    <?php include "../../common/mobile_sidebar.php"; ?>
    <?php include "../../common/footer_sc.php"; ?>
</body>

</html>