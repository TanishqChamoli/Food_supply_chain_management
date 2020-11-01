<?php
session_start();
if (empty($_SESSION['admin_id']) && empty($_SESSION['id'])) {
    header("Location: http://localhost/hackathon/admin_login.php?message=Please login first!");
} else {
    $conn = mysqli_connect('localhost', 'tanishq', 'tanishq', 'hackathon');
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <title>Admin Dashboard</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    <?php require("admin_navbar.php"); ?>
    <?php require("sidenav.php"); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h2>You are an ADMIN</h2>
                </div>
                <table class="table table-image">
                    <h4>#########Harcoded values#########</h4>
                    <thead>
                        <tr>
                            <th scope="col">Crop_ID</th>
                            <th scope="col">Crop_Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Onion</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Potato</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rice</td>
                        </tr>
                    </tbody>
                </table>
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

</html>