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
    <title>Admin Dashboard</title>
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    <?php require("admin_navbar.php"); ?>
    <?php require("admin_sidenav.php"); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h2>You are an ADMIN</h2>
            </div>
            <table class="table table-image">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">User_Type</th>
                        <th scope="col">Hash</th>
                        <th scope="col">IsValidated</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($ans)) {
                        foreach ($ans as $user) { ?>
                            <tr>
                                <td><?php echo $user['id']; ?></td>
                                <td><?php echo $user['email']; ?></td>
                                <td>
                                    <?php
                                    $roles = ['', 'FARMER', 'TRADER', 'RETAILER', 'CONSUMER'];
                                    echo $roles[$user['user_type']];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $user['user_type'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if (empty($user['hash_id'])) {
                                        echo "User has not inserted anydata";
                                    } else {
                                        echo $user['hash_id'];
                                    }
                                    ?>

                                </td>
                                <td><?php echo $user['is_validated']; ?></td>
                            </tr>
                        <?php }
                    } else { ?>
                        <tr>
                            <td>
                                The data base is EMPTY!
                            </td>
                        </tr>
                    <?php } ?>
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