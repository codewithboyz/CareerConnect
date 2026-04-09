<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder</title>
    <?php include "../../common/header_sc.php"; ?>
    <link rel="stylesheet" href="../../asset/css/build_resume.css">


    <style>
        
    </style>
</head>

<body>

    <?php include "../../common/navbar_sc.php"; ?>
    <div class="container mt-4 mb-5">
        <div class="row">

            <aside class="col-lg-3 d-none d-lg-block">
                <?php include "../../common/slidebar.php"; ?>
            </aside>

            <main class="col-lg-9 col-12">

                <button class="btn btn-outline-primary d-lg-none mb-3" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
                    <i class="fa-solid fa-bars me-2"></i> Menu
                </button>

                <div class="d-flex flex-column gap-4">

                    <div class="card rounded-5 border-0 shadow p-3">
                        <div class="card-body">
                            <h3 class="card-title">Build Your Resume</h3>
                            <p class="card-text">Craft a polished CV with guided sections, ATS-friendly formatting, and
                                reusable snippets.</p>
                            <div class="d-flex flex-column flex-md-row gap-3">
                                <button type="button" class="btn btn-outline-primary"><i class="fa-solid fa-eye"></i>
                                    Preview current</button>
                                <a href="#" class="btn btn-primary "><i class="fa-solid fa-wand-magic-sparkles"></i>
                                    Start builder</a>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-5 border-0 shadow p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="card-title fw-bold">Attached CV</h3>
                                <div class="p-1">
                                    <a href="" class="btn btn-primary py-2 rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="fa-solid fa-plus text-white"></i></a>
                                </div>
                            </div>
                            <div class="mt-4 table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">CV Title</th>
                                            <th scope="col">Default CV</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>My Resume</td>
                                            <td><span class="badge text-bg-success">Default</span>
                                            </td>
                                            <td>2025-03-09 06:19:47</td>
                                            <td>
                                                <div class="d-flex gap-1 action">
                                                    <div class="icon p-2"><i
                                                            class="fa-solid fa-download text-primary"></i></div>
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#editCVModal"><i
                                                                class="fa-solid fa-pencil"></i></a></div>
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#deleteModal"><i
                                                                class="fa-solid fa-xmark text-danger"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-5 border-0 shadow p-3 mb-4">
                        <div class="card-body">

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h3 class="card-title fw-bold m-0">Projects</h3>
                                <div class="p-1">
                                    <a href="#" class="btn btn-primary py-2 rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#addProjectModal">
                                        <i class="fa-solid fa-plus text-white"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="row g-3 mt-1">
                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card card-hovers border-0 rounded-4 shadow h-100 overflow-hidden">
                                        <div class="img-wrapper">
                                            <img src="https://sharjeelanjum.com/html/jobs-portal/images/blog/1.jpg"
                                                class="card-img-top object-fit-cover" alt="Project Image"
                                                style="height: 200px;">
                                        </div>
                                        <div class="card-body p-4 d-flex flex-column">
                                            <h5 class="card-title fw-bold">Jobs Portal</h5>
                                            <p class="card-text text-muted mb-1"><i
                                                    class="fa-regular fa-calendar-days me-2"></i>31 Jan, 2025 - 31
                                                Jan, 2025</p>
                                            <p class="card-text flex-grow-1">This is just for testing</p>
                                            <hr>
                                            <div class="d-flex gap-3">
                                                <a class="text-primary fw-medium text-decoration-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#editProjectModal">
                                                    <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                                </a>
                                                <a class="text-danger fw-medium text-decoration-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#deleteProjectModal">
                                                    <i class="fa-solid fa-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card card-hovers border-0 rounded-4 shadow h-100 overflow-hidden">
                                        <div class="img-wrapper">
                                            <img src="https://sharjeelanjum.com/html/jobs-portal/images/blog/2.jpg"
                                                class="card-img-top object-fit-cover" alt="Project Image"
                                                style="height: 200px;">
                                        </div>
                                        <div class="card-body p-4 d-flex flex-column">
                                            <h5 class="card-title fw-bold">Jobs Portal</h5>
                                            <p class="card-text text-muted mb-1"><i
                                                    class="fa-regular fa-calendar-days me-2"></i>31 Jan, 2025 - 31
                                                Jan, 2025</p>
                                            <p class="card-text flex-grow-1">This is just for testing</p>
                                            <hr>
                                            <div class="d-flex gap-3">
                                                <a class="text-primary fw-medium text-decoration-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#editProjectModal">
                                                    <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                                </a>
                                                <a class="text-danger fw-medium text-decoration-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#deleteProjectModal">
                                                    <i class="fa-solid fa-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-6 col-lg-4">
                                    <div class="card card-hovers border-0 rounded-4 shadow h-100 overflow-hidden">
                                        <div class="img-wrapper">
                                            <img src="https://sharjeelanjum.com/html/jobs-portal/images/blog/1.jpg"
                                                class="card-img-top object-fit-cover" alt="Project Image"
                                                style="height: 200px;">
                                        </div>
                                        <div class="card-body p-4 d-flex flex-column">
                                            <h5 class="card-title fw-bold">Jobs Portal</h5>
                                            <p class="card-text text-muted mb-1"><i
                                                    class="fa-regular fa-calendar-days me-2"></i>31 Jan, 2025 - 31
                                                Jan, 2025</p>
                                            <p class="card-text flex-grow-1">This is just for testing</p>
                                            <hr>
                                            <div class="d-flex gap-3">
                                                <a class="text-primary fw-medium text-decoration-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#editProjectModal">
                                                    <i class="fa-solid fa-pen-to-square me-1"></i> Edit
                                                </a>
                                                <a class="text-danger fw-medium text-decoration-none" href="#"
                                                    data-bs-toggle="modal" data-bs-target="#deleteProjectModal">
                                                    <i class="fa-solid fa-trash me-1"></i> Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card rounded-5 border-0 shadow p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="card-title fw-bold">Experience</h3>
                                <div class="p-1">
                                    <a href="" class="btn btn-primary py-2 rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#addExperienceModal"><i
                                            class="fa-solid fa-plus text-white"></i></a>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3 mt-3">
                                <div class="card w-100 p-3 shadow-sm border rounded-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h5 class="card-title fw-semibold">UI UX Designer</h5>
                                        <div class="d-flex gap-1">
                                            <div class="icon2 p-2 px-2"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#editExperienceModal"><i
                                                        class="fa-solid fa-pencil"></i></a></div>
                                            <div class="icon2 p-2 px-2"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#deleteExperienceModal"><i
                                                        class="fa-solid fa-xmark text-danger"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-3 px-3 text-muted">
                                        <span><i class="fa fa-map-marker"></i> Lahore - Pakistan</span>
                                        <span><i class="fa fa-building"></i> Amoka Int</span>
                                        <span><i class="fa-solid fa-briefcase"></i> From 13 Dec, 2009 - 07 Feb,
                                            2012</span>
                                        <p>Proactive and disciplined, I excel in ensuring maximum accessibility and
                                            elevating customer experiences
                                            throughout the development process. Let's redefine digital interactions
                                            together.</p>
                                    </div>
                                </div>

                                <div class="card w-100 p-3 shadow-sm border rounded-4">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <h5 class="card-title fw-semibold">UI UX Designer</h5>
                                        <div class="d-flex gap-1">
                                            <div class="icon2 p-2 px-2"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#editExperienceModal"><i
                                                        class="fa-solid fa-pencil"></i></a></div>
                                            <div class="icon2 p-2 px-2"><a href="" data-bs-toggle="modal"
                                                    data-bs-target="#deleteExperienceModal"><i
                                                        class="fa-solid fa-xmark text-danger"></i></a></div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap gap-3 px-3 text-muted">
                                        <span><i class="fa fa-map-marker"></i> Lahore - Pakistan</span>
                                        <span><i class="fa fa-building"></i> Amoka Int</span>
                                        <span><i class="fa-solid fa-briefcase"></i> From 13 Dec, 2009 - 07 Feb,
                                            2012</span>
                                        <p>Proactive and disciplined, I excel in ensuring maximum accessibility and
                                            elevating customer experiences
                                            throughout the development process. Let's redefine digital interactions
                                            together.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card rounded-5 border-0 shadow p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <h3 class="card-title fw-bold m-0">Education</h3>
                                <div class="p-1">
                                    <a href="#" class="btn btn-primary py-2 rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#addEducationModal">
                                        <i class="fa-solid fa-plus text-white"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-3 mt-3">
                                <div class="card w-100 p-2 shadow-sm border rounded-4">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start mb-2">
                                            <h5 class="card-title fw-bold m-0 text-dark">Matriculation/O-Level - Matric
                                                in Science</h5>

                                            <div class="d-flex gap-2 align-items-center">
                                                <a href="#" class="icon2 p-2 text-secondary text-decoration-none"
                                                    data-bs-toggle="modal" data-bs-target="#editEducationModal">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                                <a href="#" class="icon2 p-2 text-danger text-decoration-none"
                                                    data-bs-toggle="modal" data-bs-target="#deleteEducationModal">
                                                    <i class="fa-solid fa-xmark fs-5"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-muted mb-3 fs-6">
                                            2005 - Hafizabad - Pakistan
                                        </div>
                                        <div class="d-flex flex-wrap gap-4 text-muted" style="font-size: 0.95rem;">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="fa-solid fa-graduation-cap text-secondary"></i>
                                                <span>Matric</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="fa-solid fa-location-dot text-secondary"></i>
                                                <span>Hafizabad - Pakistan</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="fa-regular fa-building text-secondary"></i>
                                                <span>Govt School</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card rounded-5 border-0 shadow p-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="card-title fw-bold">Skills</h3>
                                <div class="p-1">
                                    <a href="" class="btn btn-primary py-2 rounded-3" data-bs-toggle="modal"
                                        data-bs-target="#addSkills"><i class="fa-solid fa-plus text-white"></i></a>
                                </div>
                            </div>
                            <div class="mt-4 table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Skill Name</th>
                                            <th scope="col">Experience</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Adobe Photoshop</td>
                                            <td>14 Years</td>
                                            <td>
                                                <div class="d-flex gap-1 action">
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#editSkillModal"><i
                                                                class="fa-solid fa-pencil"></i></a></div>
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#deleteSkillModal"><i
                                                                class="fa-solid fa-xmark text-danger"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Adobe Photoshop</td>
                                            <td>14 Years</td>
                                            <td>
                                                <div class="d-flex gap-1 action">
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#editSkillModal"><i
                                                                class="fa-solid fa-pencil"></i></a></div>
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#deleteSkillModal"><i
                                                                class="fa-solid fa-xmark text-danger"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Adobe Photoshop</td>
                                            <td>14 Years</td>
                                            <td>
                                                <div class="d-flex gap-1 action">
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#editSkillModal"><i
                                                                class="fa-solid fa-pencil"></i></a></div>
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#deleteSkillModal"><i
                                                                class="fa-solid fa-xmark text-danger"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Adobe Photoshop</td>
                                            <td>14 Years</td>
                                            <td>
                                                <div class="d-flex gap-1 action">
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#editSkillModal"><i
                                                                class="fa-solid fa-pencil"></i></a></div>
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#deleteSkillModal"><i
                                                                class="fa-solid fa-xmark text-danger"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Adobe Photoshop</td>
                                            <td>14 Years</td>
                                            <td>
                                                <div class="d-flex gap-1 action">
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#editSkillModal"><i
                                                                class="fa-solid fa-pencil"></i></a></div>
                                                    <div class="icon p-2"><a href="" data-bs-toggle="modal"
                                                            data-bs-target="#deleteSkillModal"><i
                                                                class="fa-solid fa-xmark text-danger"></i></a></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!-- Modal for Add CV -->
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Add CV</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">CV Title</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter CV title">
                                        </div>
                                        <label for="message-text" class="col-form-label">Upload CV File</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            <div class="form-check input-group mt-3">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="checkDefault">
                                                <label class="form-check-label" for="checkDefault">
                                                    Default checkbox
                                                </label>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add CV</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit CV Modal -->
                    <div class="modal fade" id="editCVModal" tabindex="-1" aria-labelledby="editCVModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Edit CV</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">CV Title</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="My Resume">
                                        </div>
                                        <label for="message-text" class="col-form-label">Upload New CV File
                                            (Optional)</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" id="inputGroupFile02">
                                            <div class="form-check input-group mt-3">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="checkDefault" checked>
                                                <label class="form-check-label" for="checkDefault">
                                                    Default checkbox
                                                </label>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Update CV</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Delete CV Modal -->
                    <!-- Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Delete CV</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete your CV
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- addProjectModal -->

                    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Project</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Project Title</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter project title">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-6">
                                                    <label for="projectStartDate" class="form-label">Start Date</label>
                                                    <input type="date" class="form-control" id="projectStartDate">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="projectEndDate" class="form-label">End Date</label>
                                                    <input type="date" class="form-control" id="projectEndDate">
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="projectOngoing">
                                                        <label class="form-check-label" for="projectOngoing">
                                                            Currently ongoing
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3">Enter Project Description</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="projectImage" class="form-label">Project Image</label>
                                                    <input type="file" class="form-control" id="projectImage">
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add Project</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Project Modal -->

                    <div class="modal fade" id="editProjectModal" tabindex="-1" aria-labelledby="editProjectModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Project</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Project Title</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                value="Jobs Portal" placeholder="Enter project title">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-6">
                                                    <label for="projectStartDate" class="form-label">Start Date</label>
                                                    <input type="date" class="form-control" id="projectStartDate"
                                                        value="2026-01-31">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="projectEndDate" class="form-label">End Date</label>
                                                    <input type="date" class="form-control" id="projectEndDate"
                                                        value="2026-01-31">
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="projectOngoing" checked>
                                                        <label class="form-check-label" for="projectOngoing">
                                                            Currently ongoing
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="4">This is just for testing</textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="projectImage" class="form-label">Project Image</label>
                                                    <input type="file" class="form-control" id="projectImage">
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Update Project</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Project Modal -->

                    <div class="modal fade" id="deleteProjectModal" tabindex="-1"
                        aria-labelledby="deleteProjectModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Delete Project</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete your Project
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Experience Modal -->

                    <div class="modal fade" id="addExperienceModal" tabindex="-1"
                        aria-labelledby="addExperienceModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Experience</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Job Title</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter job title">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-6">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control" id="location"
                                                        placeholder="City - Country">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="company" class="form-label">Company</label>
                                                    <input type="text" class="form-control" id="company"
                                                        placeholder="Enter company name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-6">
                                                    <label for="projectStartDate" class="form-label">Start Date</label>
                                                    <input type="date" class="form-control" id="projectStartDate">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="projectEndDate" class="form-label">End Date</label>
                                                    <input type="date" class="form-control" id="projectEndDate">
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="projectOngoing">
                                                        <label class="form-check-label" for="projectOngoing">
                                                            Currently working here
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="5"
                                                        placeholder="Describe your role and achievements"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add Experience</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Experience Modal -->

                    <div class="modal fade" id="editExperienceModal" tabindex="-1"
                        aria-labelledby="deleteExperienceModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Experience</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Job Title</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                value="UI UX Designer">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-6">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control" id="location"
                                                        value="Lahore - Pakistan">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="company" class="form-label">Company</label>
                                                    <input type="text" class="form-control" id="company"
                                                        value="Amoka Int">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-6">
                                                    <label for="projectStartDate" class="form-label">Start Date</label>
                                                    <input type="date" class="form-control" id="projectStartDate"
                                                        value="2009-12-13">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label for="projectEndDate" class="form-label">End Date</label>
                                                    <input type="date" class="form-control" id="projectEndDate"
                                                        value="2012-02-07">
                                                    <div class="form-check mt-2">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="projectOngoing" checked>
                                                        <label class="form-check-label" for="projectOngoing">
                                                            Currently working here
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label for="exampleFormControlTextarea1"
                                                        class="form-label">Description</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="5">Proactive and disciplined, I excel in ensuring maximum accessibility and elevating customer experiences throughout the development process. Let's redefine digital interactions together.</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Update Experience</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Experience Modal -->

                    <div class="modal fade" id="deleteExperienceModal" tabindex="-1"
                        aria-labelledby="deleteExperienceModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Delete Experience
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete your Experience
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Education Modal -->

                    <div class="modal fade" id="addEducationModal" tabindex="-1"
                        aria-labelledby="addEducationModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Education</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Degree/Level</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="e.g., Bachelor in Computer Application">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-4">
                                                    <label for="year" class="form-label">Year</label>
                                                    <input type="text" class="form-control" id="year"
                                                        placeholder="e.g., 2005">
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control" id="location"
                                                        placeholder="City - Country">
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label for="institution" class="form-label">Institution</label>
                                                    <input type="text" class="form-control" id="institution"
                                                        placeholder="School/University Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="projectStartDate" class="form-label">Field of
                                                        Study</label>
                                                    <input type="text" class="form-control" id="study"
                                                        placeholder="e.g., Mtric, Bachelor's, Master's">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add Education</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Edit Education Modal -->

                    <div class="modal fade" id="editEducationModal" tabindex="-1"
                        aria-labelledby="editEducationModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Education</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Degree/Level</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                value="Matriculation/O-Level - Matric in Science">
                                        </div>
                                        <div class="mb-3">
                                            <div class="row g-2">
                                                <div class="col-12 col-md-4">
                                                    <label for="year" class="form-label">Year</label>
                                                    <input type="text" class="form-control" id="year" value="2005">
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label for="location" class="form-label">Location</label>
                                                    <input type="text" class="form-control" id="location"
                                                        value="Hafizabad - Pakistan">
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <label for="institution" class="form-label">Institution</label>
                                                    <input type="text" class="form-control" id="institution"
                                                        value="Govt School">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="projectStartDate" class="form-label">Field of
                                                        Study</label>
                                                    <input type="text" class="form-control" id="study" value="Matric">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Update Education</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Education Modal -->

                    <div class="modal fade" id="deleteEducationModal" tabindex="-1"
                        aria-labelledby="deleteEducationModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Delete Education
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete your Education
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Skills Modal -->

                    <div class="modal fade" id="addSkills" tabindex="-1" aria-labelledby="addSkillsLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Add Slill</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Skill Name</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="Enter skill name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name"
                                                class="col-form-label">Duration/Experience</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                placeholder="e.g., 5 years, 14 years">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Add Skill</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Edit Skills Modal -->

                    <div class="modal fade" id="editSkillModal" tabindex="-1" aria-labelledby="editSkillModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Edit Slill</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Skill Name</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                value="Adobe Photoshop">
                                        </div>

                                        <div class="mb-3">
                                            <label for="recipient-name"
                                                class="col-form-label">Duration/Experience</label>
                                            <input type="text" class="form-control" id="recipient-name"
                                                value="14 Years">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Update Skill</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Skill Modal -->
                    <div class="modal fade" id="deleteSkillModal" tabindex="-1" aria-labelledby="deleteSkillModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Delete Skill</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete your Skill
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

        </div>
    </div>

    <?php include "../../common/mobile_sidebar.php"; ?>

    <?php include "../../common/footer_sc.php"; ?>

</body>

</html>