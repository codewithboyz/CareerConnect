<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resume Builder</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="Asset/bootstrap-5.3.7-dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="resume_build_pages/css/resume_build_sec.css">

  <style>
    body {
      font-family: 'Inter', sans-serif;
      background-color: #f0f2f6;
    }

    #mobileSidebar {
      max-width: 280px;
    }
  </style>
</head>

<body>

  <?php include('landing/nav.php');
  ?>

  <div class="container mt-4 mb-5">
    <div class="row">

      <aside class="col-lg-3 d-none d-lg-block">
        <?php include('sidebar/sidebar.php'); ?>
      </aside>

      <main class="col-lg-9 col-12">

        <button class="btn btn-outline-primary d-lg-none mb-3" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
          <i class="fa-solid fa-bars me-2"></i> Menu
        </button>

        <?php include('resume_build_pages/resume_build_section.php'); ?>

      </main>

    </div>
  </div>

  <?php include('sidebar/mobile_sidebar.php'); ?>

  <?php include('landing/footer.php'); ?>

  <script src="Asset/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>