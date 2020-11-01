<?php
session_start();
if (empty($_SESSION['id'])) {
    header("Location: http://localhost/hackathon/login.php?message=Please login first!");
}
echo "Yes, you're logged in and have been validated by the govt.";
