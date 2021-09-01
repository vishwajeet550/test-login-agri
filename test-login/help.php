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
    <title>Support | Post Harvest Management</title>

    <style>
        *{
        padding: 0;
        margin: 0;
        }
        @media screen 
        and (min-width: 1281px)
        and (max-device-width: 1600px)
        and (-webkit-min-device-pixel-ratio: 1) 
        {
        .navbar{
            /* border: 3px solid red; */
            position: absolute;
            width: 99.95%;
            height: 6vh;
            background-color: black;
            align-items: center;
            justify-content: space-between;
            display: flex;
        }
        .logo{
            width: 130px;
            border-radius: 10px;
            position: absolute;
            top: 8%;
            left: 10%;
        }
        .navbar ul{
            /* border: 3px solid gray; */
            margin-left: 70%;
        }
        .navbar ul li{
            /* border: 3px solid darkgreen; */
            border-radius: 10px;
            margin: 2px 2px;
            list-style: none;
            display: inline-block;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 28px;
            text-decoration: none;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            font-size: 23px;
        }
        .navbar ul li:hover{
            background-color: rgba(100, 148, 237, 0.658);
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            transition: 0.5s;
        }
        .midden{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.863);
        position: absolute;
        top:6%;
        display: flex;
        width: 99.94%;
        height: 15vh;
        }
        .vl1 {
            border-left: 2px solid green;
            top: 6%;
            height: 90px;
            position: absolute;
            left: 20%;
        }
        .title{
            position: absolute;
            left: 22%;
            top: 18%;
            font-family: sans-serif;
        }
        .title h1{
            font-size: 43px;
            color: green;
        }
        .title h2{
            color: rgba(255, 255, 255, 0.877);
        }
        .data{
        border: 2px solid black;
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 99.75%;
        height: 5vh;
        display: flex;
        top: 100%;
        }
        .data1{
        border: 2px solid black;
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 89.70%;
        height: 7vh;
        display: flex;
        top: 145%;
        padding-left: 10%;
        }
        .data2{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.753);
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 90vh;
        display: flex;
        top: 36.6%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        /* border: 1px solid red; */
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 70%;
        height: 80vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .logo1 img{
            /* border: 1px solid red; */
            margin: 3% 0%;
            width: 150px;
            height: 20vh;
        }
        .end{
        position: absolute;
        top: 137%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text li{
            list-style: none;
        }
    }
    @media screen and (min-width: 100px) and (max-width: 1024px) 
        and (min-device-height: 500px) and (max-device-height: 1366px)  
        and (orientation: portrait) 
        {
            .navbar{
            /* border: 1px solid red;    */
            position: absolute;
            width: 100%;
            height: 7.9vh;
            background-color: black;
            align-items: center;
            justify-content: space-between;
            display: flex;
        }
        .logo{
            width: 100px;
            border-radius: 10px;
            position: absolute;
            top: 16%;
            left: 5%;
        }
        .navbar ul{
            /* border: 3px solid gray; */
            position: absolute;
            right: 2%;
            margin-left: 10%;
            /* align-items: flex-end; */
        }
        .navbar ul li{
            border: 1px solid white;
            border-radius: 10px;
            margin: 6px 0px;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 10px;
            text-decoration: none;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            font-size: 20px;
            margin: 1px 4px;
        }
        .navbar ul li:hover{
            background-color: rgba(100, 148, 237, 0.658);
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            transition: 0.5s;
        }
        .midden{
        /* border: 1px solid red; */
        background-color: rgba(0, 0, 0, 0.863);
        position: absolute;
        top:8%;
        display: flex;
        width: 100%;
        height: 17vh;
        }
        .vl1 {
            border-left: 2px solid green;
            top: 6%;
            height: 90px;
            position: absolute;
            left: 36%;
            margin-right: 100%;
        }
        .title{
            /* border: 1px solid yellow; */
            position: absolute;
            left: 39%;
            top: 7%;
            font-family: sans-serif;
        }
        .title h1{
            font-size: 30px;
            color: green;
        }
        .title h2{
            font-size: 20px;
            color: rgba(255, 255, 255, 0.877);
        }
        .data{
        /* border: 2px solid white; */
        background-color: black;
        color: white;
        font-size: 20px;
        padding-top: 0.8%;
        position: absolute;
        width: 100%;
        height: 5vh;
        display: flex;
        top: 101.5%;
        }
        .data1{
        /* border: 2px solid red; */
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 90%;
        height: 7vh;
        display: flex;
        top: 136%;
        padding-left: 10%;
        }
        .data2{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.753);
        color: white;
        font-size: 18px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 95.5vh;
        display: flex;
        top: 40%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        border: 1px solid white;
        color: white;
        /* font-size: 10px; */
        font-weight: lighter;
        margin-top: 8%;
        position: absolute;
        width: 85%;
        height: 80vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 140%;
        width: 100%;
        height: 35vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .logo1 img{
            /* border: 1px solid red; */
            margin: 3% 0%;
            width: 130px;
            height: 22vh;
        }
        .text li{
            list-style: none;
        }
    }
        @media (min-width: 540px) and (max-width: 1024px) and (min-device-height: 260px) and (max-device-height: 511px)  and (orientation: landscape) {
  
        .navbar{
        /* border: 1px solid red; */
        position: absolute;
        width: 100%;
        height: 8.9vh;
        background-color: black;
        align-items: center;
        justify-content: space-between;
        display: flex;
        }
        .logo{
            width: 100px;
            border-radius: 10px;
            position: absolute;
            top: 17%;
            left: 5%;
        }
        .navbar ul{
            /* border: 3px solid gray; */
            position: absolute;
            right: 2%;
            margin-left: 10%;
            /* align-items: flex-end; */
        }
        .navbar ul li{
            border: 1px solid white;
            border-radius: 10px;
            margin: 6px 8px;
            list-style: none;
            display: inline-block;
            padding-left: 10px;
            padding-right: 10px;
            font-size: 10px;
            text-decoration: none;
        }
        .navbar ul li a{
            text-decoration: none;
            color: white;
            font-size: 20px;
            margin: 1px 4px;
        }
        .navbar ul li:hover{
            background-color: rgba(100, 148, 237, 0.658);
        }
        .navbar ul li a:hover, .navbar li a::after{
            width: 100%;
            text-decoration: underline;
            transition: 0.5s;
        }
        .midden{
        /* border: 1px solid red; */
        background-color: rgba(0, 0, 0, 0.863);
        position: absolute;
        top:9%;
        display: flex;
        width: 100%;
        height: 27vh;
        }
        .vl1 {
            border-left: 2px solid green;
            top: 6%;
            height: 90px;
            position: absolute;
            left: 36%;
            margin-right: 100%;
        }
        .title{
            /* border: 1px solid yellow; */
            position: absolute;
            left: 39%;
            top: 7%;
            font-family: sans-serif;
        }
        .title h1{
            font-size: 30px;
            color: green;
        }
        .title h2{
            font-size: 20px;
            color: rgba(255, 255, 255, 0.877);
        }
        .data{
        /* border: 2px solid white; */
        background-color: black;
        color: white;
        font-size: 20px;
        padding-top: 0.8%;
        position: absolute;
        width: 100%;
        height: 8.5vh;
        display: flex;
        top: 101.5%;
        }
        .data1{
        /* border: 2px solid red; */
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 90%;
        height: 12vh;
        display: flex;
        top: 140%;
        padding-left: 10%;
        }
        .data2{
        /* border: 2px solid red; */
        background-color: rgba(0, 0, 0, 0.753);
        color: white;
        font-size: 18px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 191.5vh;
        display: flex;
        top: 63.5%;
        
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        border: 1px solid white;
        color: white;
        /* font-size: 10px; */
        font-weight: lighter;
        position: absolute;
        width: 85%;
        height: 130vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-top: 8%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 267%;
        width: 100%;
        height: 50vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .logo1 img{
            /* border: 1px solid red; */
            margin: 3% 0%;
            width: 150px;
            height: 35vh;
        }
        .text li{
            list-style: none;
        }
    }

    </style>

</head>
<body>

    <header class="header1">
        <div class="navbar">
            <ul>
            <li><a href="main.php"><b> 🏠 Home</a></li>
            <li><a href="management.php">🌐 Management </b></a></li>
            </ul>
        </div>
    </header>
    <div class="midden">
        <img src="img/amazon-logo.png" class="logo" usemap="#workmap">
        <map name="workmap">
            <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.amazon.in/s?k=fruits+in+fresh&crid=34APY77CQ53MJ&sprefix=fruits%2Caps%2C364&ref=nb_sb_ss_ts-doa-p_3_6">
        </map>
        <div class="vl1">
        </div>
        <div class="title">
        <h1><b>Post Harvest management</b></h1>
        <h2><i>Powered by Amazon</i></h2>
        </div>
        <div class="data">
            <marquee direction="left"> Note : 1. Please go through each step to get complete information about Post Harvest Management &nbsp; 2. More information will comming soon stay connect with us </marquee>
        </div>
        <div class="data1">
            <h2>Help and Support</h2>
        </div>
    </div><br>
    <br>
    <div class="data2">
        <div class="text">
            <div class="logo1">
                <img src="img/logo3.gif">
            </div>  
            <br>
            <p>
            <h2>Write to Us:</h2> <br>
            For any query regarding this website, please contact the Web Information Manager :- <br>  
            <br>
            <li><b> Name :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Vishwajeet Sanjay Kadam </li><br>
            <li><b> Email-id : </b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="mailto: vishwajeetkadam14@gmail.com" style="text-decoration: none; color: white;">vishwajeetkadam14@gmail.com</a></li><br>
            <li><b> Contact :</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91 705886171 </li><br>
            </p>
        </div>
    </div>
    

</body>

<div class="end">
    <br>
    <img style="height:85px;width:100px; border-radius: 10px;" src="img/aws.png" alt="Brillect Tech Solutions Pvt. Ltd.">
    </p>
    <p><a style="color:white; text-decoration: none;" href="https://www.amazon.com/gp/navigation-country/select-country">© 1996-2021, Amazon.com, Inc. or its affiliates </a></p>
    <br>
    <p style="color:rgb(132, 200, 255);font-size:14px; text-decoration:none;">Contact &#8644; <a style="font-size:16px; color:rgb(132, 200, 255);" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
</div>

</html>