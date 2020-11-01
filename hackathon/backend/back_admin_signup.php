<?php
if (empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['cpass'])) {
    header("Location: http://localhost/hackathon/admin_signup.php?message=Missing Fields!");
} else {
    $email = $_POST['email'];
    $role = $_POST['role'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    if($pass != $cpass){
        header("Location: http://localhost/hackathon/admin_signup.php?message=Passwords are not same!");
    }
    else{
        $conn = mysqli_connect('localhost', 'tanishq', 'tanishq', 'hackathon');
        $hash = password_hash($cpass, PASSWORD_DEFAULT);
        $sql = "INSERT INTO admin_users(email,pass) VALUES('$email','$hash')";
        if (mysqli_query($conn, $sql)) {
            header("Location: http://localhost/hackathon/admin_signup.php?message=Succesfully created an account!");
        } else {
            header("Location: http://localhost/hackathon/admin_signup.php?message=".mysqli_error($conn));
        }
    }
}
// test@test.com:test