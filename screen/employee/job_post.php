<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job | Jobs Portal</title>
    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/job_post.css">
    
    <style>
        
    </style>
</head>

<body>

    <!-- = = =  navber section  = = = -->
        <?php include "../../common/navbar_sc.php"; ?>

    <main class="container py-5">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-between align-items-end">
                <div>
                    <span class="badge-custom mb-2">Northwind Commerce</span>
                    <h2 class="fw-bold h3 mb-1">Create a new opportunity</h2>
                    <p class="text-muted small mb-0">Share role details, requirements, and perks so the right candidates
                        can find you faster.</p>
                </div>
                <button class="btn btn-outline-secondary btn-sm px-3">Back to Dashboard</button>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-3">
                <div class="card sidebar-card border-0 shadow-sm p-4">
                    <div class="text-center mb-4">
                        <h6 class="fw-bold mb-0">Northwind Commerce</h6>
                        <p class="text-muted small mb-2">jobs@northwind.com</p>
                        <span class="badge-premium">Premium Employer</span>
                    </div>

                    <div class="side-menu mt-4">
                        <a href="#"><i class="fa-solid fa-table-cells-large"></i> Dashboard</a>
                        <a href="#"><i class="fa-regular fa-pen-to-square"></i> Edit Account Details</a>
                        <a href="#"><i class="fa-regular fa-building"></i> Company Public Profile</a>
                        <a href="#" class="active"><i class="fa-solid fa-plus"></i> Post a job</a>
                        <a href="#"><i class="fa-solid fa-briefcase"></i> Manage Jobs</a>
                        <a href="#"><i class="fa-solid fa-box"></i> Packages</a>
                        <a href="#"><i class="fa-regular fa-credit-card"></i> Payment History</a>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-9">
                <div class="card border-0 shadow-sm p-4 main-form-card">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="fw-bold mb-0">Job overview</h5>
                        <span class="text-muted tiny-text">Fields marked * are required</span>
                    </div>

                    <section class="mb-5">
                        <p class="fw-bold small mb-3">Role basics</p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label custom-label">Job title *</label>
                                <input type="text" class="form-control custom-input"
                                    placeholder="e.g. Senior Product Designer">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label custom-label">Department</label>
                                <input type="text" class="form-control custom-input" placeholder="Design Systems">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label custom-label">Location *</label>
                                <input type="text" class="form-control custom-input"
                                    placeholder="Hybrid - Seattle, USA">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label custom-label">Employment type</label>
                                <select class="form-select custom-input">
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label custom-label">Salary range</label>
                                <input type="text" class="form-control custom-input" placeholder="$90k - $120k / year">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label custom-label">Seniority</label>
                                <select class="form-select custom-input">
                                    <option>Lead / Principal</option>
                                </select>
                            </div>
                        </div>
                    </section>

                    <section class="mb-5">
                        <p class="fw-bold small mb-3">Candidate preferences</p>
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label custom-label">Experience</label>
                                <select class="form-select custom-input">
                                    <option>5+ years</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label custom-label">Open roles</label>
                                <input type="number" class="form-control custom-input" value="1">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label custom-label">Visa sponsorship</label>
                                <select class="form-select custom-input">
                                    <option>Not available</option>
                                </select>
                            </div>
                        </div>
                    </section>

                    <section class="mb-5">
                        <p class="fw-bold small mb-3">Role description</p>
                        <div class="mb-3">
                            <label class="form-label custom-label">Summary *</label>
                            <textarea class="form-control custom-input" rows="3"
                                placeholder="Describe the mission for this role..."></textarea>
                        </div>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label custom-label">Responsibilities</label>
                                <textarea class="form-control custom-input" rows="3"
                                    placeholder="Use bullet points or short sentences"></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label custom-label">Must-have skills</label>
                                <textarea class="form-control custom-input" rows="3"
                                    placeholder="List skills separated by commas"></textarea>
                            </div>
                        </div>
                    </section>

                    <div class="d-flex justify-content-end gap-2 border-top pt-4">
                        <button class="btn btn-outline-primary px-4 py-2 border-2">Save Draft</button>
                        <button class="btn btn-primary px-4 py-2">Publish Job</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "../../common/footer_sc.php"; ?>
    <script>
        document.getElementById('jobForm').addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Job Published Successfully!');
        });
    </script>
</body>

</html>