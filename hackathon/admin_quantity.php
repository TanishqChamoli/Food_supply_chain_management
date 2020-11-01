<?php
session_start();
if (empty($_SESSION['admin_id'])) {
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
    <title>Quantity</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body class="sb-nav-fixed" style="background-image:None">
    <?php require("admin_navbar.php"); ?>
    <?php require("admin_sidenav.php"); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h2>You are an ADMIN</h2>
            </div>
            <div class="signup-form">
                <form action="#">
                    <div class="form-group">
                        <label>User Email:</label>
                        <input type="email" class="form-control" name="email" required="required" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label>Crop Name:</label>
                        <input type="text" class="form-control" name="crop_name" required="required" placeholder="Crop_Name" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
            </div>
            </form>
            <table class="table table-image">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">User_Type</th>
                        <th scope="col">CropId</th>
                        <th scope="col">CropName</th>
                        <th scope="col">Quantity(Kg's)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>test@test.com</td>
                        <td>Farmer</td>
                        <td>1</td>
                        <td>Potato</td>
                        <td>1000</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>test@test.com</td>
                        <td>Farmer</td>
                        <td>1</td>
                        <td>Onion</td>
                        <td>450</td>
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
</body>

</html>