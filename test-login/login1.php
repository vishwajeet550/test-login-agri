<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: test1.php");
    // exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Login</title>
</head>
<body>
    <p>You'r login</p>
    <p>Logout? <a href="logout1.php">Logout</a></p>
    <!-- https://localhost66.auth.ap-south-1.amazoncognito.com/logout?client_id=6vk2i3sbjoj6u6ec7ju1lo7aub&logout_uri=http://localhost/php_agri/logout1.html -->
</body>
</html>