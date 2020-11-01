<?php
session_start();
session_destroy();
header("Location: http://localhost/hackathon/login.php?message=Logout successful!");
