<?php
session_start();
if (empty($_SESSION['id'])) {
    header("Location: http://localhost/hackathon/login.php?message=Please login first!");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    <?php
    require("admin_navbar.php");
    require("sidenav.php")
    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h2>You are <?php echo $_SESSION['role_name'] ?></h2>
            </div>
        </main>
    </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
</body>

</html>
