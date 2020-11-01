<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMIN Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    <div class="login-form">
        <form action="backend/back_admin_login.php" method="post">
            <?php
            if (!empty($_GET['message'])) {
                echo "<h4><strong>" . $_GET['message'] . "</strong></h4>";
            }
            ?>
            <h2 class="text-center">ADMIN LOGIN </h2>
            <div class="form-group">
                <input type="text" class="form-control" name='email' placeholder="USERNAME" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name='pass' placeholder="PASSWORD" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
        </form>
        <p class="text-center"><a href="admin_signup.php">Create an Account</a></p>
    </div>
</body>

</html>