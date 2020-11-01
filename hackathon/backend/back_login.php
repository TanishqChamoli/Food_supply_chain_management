<?php
if (empty($_POST['email']) || empty($_POST['pass'])) {
    header("Location: http://localhost/hackathon/login.php?message=Missing Fields!");
    exit();
}
$pass = $_POST['pass'];
$email = $_POST['email'];
$conn = mysqli_connect('localhost', 'tanishq', 'tanishq', 'hackathon');
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
if (empty($ans)) {
    header("Location: http://localhost/hackathon/login.php?message=Fail!");
}
$hashed_password = $ans[0]['password'];
if (!empty($hashed_password)) {
    $re = password_verify($pass, $hashed_password);
    if ($re) {
        session_start();
        $_SESSION['id'] = $ans[0]['id'];
        $_SESSION['name'] = $ans[0]['email'];
        $_SESSION['role'] = $ans[0]['user_type'];
        $roles = ['','FARMER','TRADER','RETAILER','CONSUMER'];
        $_SESSION['role_name'] = $roles[$_SESSION['role']];
        header("Location: http://localhost/hackathon/dashboard.php");
    } else {
        header("Location: http://localhost/hackathon/login.php?message=Fail!");
    }
}
