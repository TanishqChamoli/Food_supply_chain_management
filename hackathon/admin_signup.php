<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>SignUp Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>

<body>
    <div class="signup-form">
        <form action="backend/back_admin_signup.php" method="post">
            <?php
            if (!empty($_GET['message'])) {
                echo "<h4><strong>" . $_GET['message'] . "</strong></h4>";
            }
            ?>
            <h2>Sign Up</h2>
            <p>Please fill in this form to create an admin account!</p>
            <hr>
            <div class="form-group">
                <label>EMAIL ADDRESS</label>
                <input type="email" class="form-control" name="email" required="required" placeholder="EMAIL" required>
            </div>
            <div class="form-group">
                <label>PASSWORD</label>
                <input type="password" class="form-control" name="pass" required="required" placeholder="PASSWORD" required>
            </div>
            <div class="form-group">
                <label>CONFIRM PASSWORD</label>
                <input type="password" class="form-control" name="cpass" required="required" placeholder="CONFIRM PASSWORD" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Sign Up</button>
            </div>
        </form>
        <a href="admin_login.php">
            <div class="text-center">Already have an account? Login here</div>
        </a>
    </div>
</body>

</html>