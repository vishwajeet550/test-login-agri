<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "<br>Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "<br>Username can only contain letters, numbers, and underscores.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "<br>This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "<br>Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "<br> Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "<br> Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "<br> Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "<br> Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "<br> Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <!-- <link rel="stylesheet" href="style.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

</head>
<style>
    
    @media screen 
        and (min-width: 1281px)
        and (max-device-width: 1600px)
        and (-webkit-min-device-pixel-ratio: 1) 
        {
        *{
        padding: 0;
        margin: 0;
        /* font-family: sans-serif; */
        font-size: 23px;
        }
    .backnew{
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        opacity: 0.7;
    }
    .wrapper{
        /* border: 5px solid green; */
        border-radius: 10px;
        position: absolute;
        align-items: center;
        left: 55%;
        top: 15%;
        width: 570px;
        height: 60vh;
        padding: 20px;
        background-color: lightgreen;
    }
    .form-group{
        /* border: 10px solid red; */
        margin: 40px;
    }
    .form-top{
        /* border: 10px solid green; */
        /* margin-left: 45px; */
        margin-top: 10px;
        
    }
    .form-end{
        /* border: 10px solid green; */
        text-align: center;
    }
    .end{
        position: absolute;
        top: 100.5%;
        width: 100%;
        height: 30vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
    }
    @media screen and (min-width: 100px) and (max-width: 1024px) 
        and (min-device-height: 500px) and (max-device-height: 1666px)  
        and (orientation: portrait) 
        {
        *{
        padding: 0;
        margin: 0;
        /* font-family: sans-serif; */
        font-size: 18px;
        }
        .backnew{
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        opacity: 0.7;
        }
        .wrapper{
            /* border: 0.5px solid white; */
            border-radius: 10px;
            position: absolute;
            align-items: center;
            left: 15%;
            top: 5%;
            width: 300px;
            height: 75vh;
            padding: 0px;
            background-color: transparent;
            
            color: black;
            font-weight: bold;

        }
        .form-group{
            /* border: 10px solid red; */
            margin: 10px;
            margin-left: 20%;
        }
        .form-top b{
            /* border: 10px solid green; */
            margin-left: 120px;
            margin-top: 10px;
            
        }
        .form-top p{
            /* border: 10px solid green; */
            margin-left: 60px;
            margin-top: 10px;
            
        }
        .form-end{
            /* border: 10px solid green; */
            text-align: center;
        }
        .form-end p{
            /* border: 10px solid green; */
            margin-left: 20%;
            text-align: center;
        }
        .end{
        position: absolute;
        top: 100.5%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        }
        @media (min-width: 540px) and (max-width: 1024px) and (min-device-height: 260px) 
        and (max-device-height: 511px)  and (orientation: landscape) 
        {
        *{
        padding: 0;
        margin: 0;
        /* font-family: sans-serif; */
        font-size: 18px;
        }
        .backnew{
            width: 100%;
            height: 150vh;
            background-size: cover;
            background-position: center;
            opacity: 0.7;
        }
        .wrapper{
            border: 1px solid green;
            border-radius: 10px;
            position: absolute;
            align-items: center;
            left: 45%;
            top: 5%;
            width: 330px;
            height: 105vh;
            padding: 2px;
            background-color: lightgreen;
        }
        .form-group{
            /* border: 10px solid red; */
            margin: 10px;
            margin-left: 5%;
        }
        .form-top b{
            /* border: 10px solid green; */
            margin-left: 150px;
            margin-top: 10px;
            
        }
        .form-top p{
            /* border: 10px solid green; */
            margin-left: 6px;
            margin-top: 10px;
            
        }
        .form-end{
            /* border: 10px solid green; */
            text-align: center;
        }
        .form-end p{
            /* border: 10px solid green; */
            /* margin-left: 20%; */
            text-align: center;
        }
        .end{
        position: absolute;
        top: 150%;
        width: 100%;
        height: 55vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        }
    

</style>

<body>
    <img src="img/far11.jpg" class="backnew">

    <div class="wrapper">
        <div class="form-top">
        <b>Sign Up</b>
        <p>Please fill this form to create an account.</p>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                
                <input type="submit" class="btn btn-primary" value="Submit">
                <!-- <input type="reset" class="btn btn-secondary ml-2" value="Reset"> -->
            </div>
            <br>
            <div class="form-end">
            <p>Already have an account?<br> <a href="login.php">Login here</a>.</p>
            </div>
            
        </form>
    </div>
    

</body>

<div class="end">
    <br>
    <img style="height:85px;width:100px; border-radius: 10px;" src="img/aws.png">
    </p>
    <p><a style="color:white; text-decoration: none;" href="https://www.amazon.com/gp/navigation-country/select-country">© 1996-2021, Amazon.com, Inc. or its affiliates </a></p>
    <br>
    <p style="color:rgb(132, 200, 255);font-size:14px; text-decoration:none;">Contact &#8644; <a style="font-size:16px; color:rgb(132, 200, 255);" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
</div>

</html>