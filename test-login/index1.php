<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["login"]) || $_SESSION["login"] !== true){
    header("location: test1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    
    <p>Login <a href="https://localhost44.auth.ap-south-1.amazoncognito.com/login?client_id=1c2v0m0uh4nfn85jaikqco6pvs&response_type=code&scope=email+openid&redirect_uri=http://localhost/php_agri/login1.php">Login</a></p>
</body>
</html>
<!-- 3arukcnj3a2is23kv9bvf1g07h -->