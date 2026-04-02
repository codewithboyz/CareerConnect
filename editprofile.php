<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Job Seeker Profile</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <?php include "landing/nav.php"; ?>
    <div class="container">

        <div class="row ">
            <!-- SIDEBAR -->
            <aside class="col-lg-3 d-none d-lg-block">
                <?php include('sidebar/sidebar.php'); ?>
            </aside>
            <!-- MAIN CONTENT -->
            <div class="col-lg-9 p-4">

                <!-- PROFILE HEADER -->
                <?php include "profile/profileheader.php"; ?>

                <!-- PERSONAL INFO -->
                <?php include "profile/personalinfo.php"; ?>

                <!-- PROFESSIONAL SNAPSHOT -->
                <?php include "profile/snapshot.php"; ?>

                <!-- SKILLS -->
                <?php include "profile/skills.php"; ?>

                <!-- EXPERIENCE -->
                <?php include "profile/EXPERIENCE.php"; ?>
                <!-- SOCIAL LINKS -->
                <?php include "profile/sociallinks.php"; ?>

                <!-- BUTTONS -->
                <div class="text-end">
                    <button class="btn btn-light">Cancel</button>
                    <button class="btn btn-primary">Save Changes</button>
                </div>

            </div>
        </div>

    </div>
    <?php include "landing/footer.php"; ?>
</body>

</html>