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
    <title>Management </title>

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
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
        margin-left: 65%;
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
        /* border: 2px solid white; */
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
    .medden1{
        /* border: 3px solid violet; */
        background-color: black;
        position: absolute;
        top: 100%;
        width: 100%;
        height: 7.2vh;
        
    }
    .medden1 ul{
        list-style: none;
        /* border: 3px solid black; */
        width: 96.70%;
        height: 15%;
        position: absolute;
        padding-top: 7px;
        padding-left: 3%;
    }
    .medden1 ul li{
        border: 2px solid white;
        border-radius: 10px;
        margin-inline: 1%;
        height: 5vh;
        list-style: none;
        display: inline-block;
        padding-left: 30px;
        padding-right: 30px;
        font-size: 28px;
        text-decoration: none;
    }
    .medden1 ul li a{
        text-decoration: none;
        color: white;
        font-size: 23px;
    }
    .medden1 ul li:hover{
        background-color: rgba(100, 148, 237, 0.658);
    }
    .medden1 ul li a:hover, .navbar li a::after{
        width: 100%;
        text-decoration: underline;
        transition: 0.5s;
    }
    .midimg{
        border: 2px solid black;
        position: absolute;
        margin-left: 230px;
        /* margin-right: 0px; */
        width: 70%;
        height: 60vh;
        display: flex;
        top: 3%;
        background-color: rgba(0, 0, 0, 0.712);
        background-image: url(img/post3.png);
        background-size: 100% 100%;
        box-shadow: 1px 2px 10px 5px black;
        animation: slider 15s infinite linear;
        animation-fill-mode: forwards;
        

    }
    @keyframes slider {
        0%{
            background-image: url(img/post3.png); background-size: 100% 100%; animation-delay: 5s;
        }
        35%{
            background-image: url(img/post4.png); background-size: 100% 100%; animation-delay: 5s;
        }
        75%{
            background-image: url(img/post5.png); background-size: 100% 100%; animation-delay: 5s;
        }
    }
    .midback{
        /* border: 1px solid red; */
        position: absolute;
        background-color: rgba(0, 0, 0, 0.712);
        top: 28%;
        width: 99.95%;
        height: 65vh;
    }
    .data{
        border: 2px solid black;
        background-color: black;
        color: white;
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 99.70%;
        height: 5vh;
        display: flex;
        top: 93%;
    }
    .data1{
        border: 2px solid black;
        position: absolute;
        background-color: rgba(0, 0, 0, 0.774);
        width: 99.70%;
        height: 100vh;
        display: flex;
        top: 99%;

    }
    .end{
        position: absolute;
        top: 200%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
    }
    .blockback1{
        /* border: 1px solid red; */
        position: absolute;
        display: flex;
        width: 100%;
        height: 47vh;
    }
    .block1{
        border: 3px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        text-align: center;
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 8%;
        width: 280px;
        height: 30vh;
    }
    .blockback1 .block1:hover{
        border-color: lightskyblue;
        border-radius: 30px;
    }
    .blockback2{
        /* border: 1px solid red; */
        position: absolute;
        margin-top: 28%;
        width: 100%;
        height: 44vh;
    }
    .block2{
        display: inline-block;
        border: 3px solid white;
        background-color: black;
        border-radius: 15px;
        list-style: none;
        text-align: center;
        padding: 30px 30px;
        margin-top: 1%;
        margin-left: 8%;
        width: 280px;
        height: 30vh;
    }
    .blockback2 .block2:hover{
        border-color: lightskyblue;
        border-radius: 30px;
    }
    .bbimg{
        /* border: 1px solid yellowgreen; */
        top: 40%;
        width: 100px;
        height: 12vh;
        margin-top: -10px;
        object-fit: scale-down;
        background-size: cover;
    }
    .bbimg1{
        /* border: 1px solid yellowgreen; */
        width: 180px;
        margin-top: -10px;
    }
    .btn{
        border: 1.5px solid white;
        border-radius: 10px;
        position: absolute;
        background-color: black;
        font-size: 23px;
        text-decoration: none;
        color: white;
        margin: 0.5% -2.5%;
        padding: 3px 9px;
    }
    .btn:hover{
        background-color: rgba(0, 0, 0, 0.685);
        border-color: lightskyblue;
    }
    .data1 h2{
        color: white;
        font-weight: bold;
    }
    .data1 h3{
        color: whitesmoke;
        font-weight: normal;
    }
    }

    @media only screen and (min-width: 100px) and (max-width: 1024px) 
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
        .medden1{
        display: none;
        }
        .midback{
            /* border: 1px solid red; */
            position: absolute;
            background-color: rgba(0, 0, 0, 0.712);
            top: 26.5%;
            width: 100%;
            height: 50vh;
        }
        .midimg{
            border: 2px solid black;
            position: absolute;
            margin-left: 4%;
            /* margin-right: 0px; */
            width: 90%;
            height: 40vh;
            display: flex;
            top: 5%;
            background-color: rgba(0, 0, 0, 0.712);
            background-image: url(img/post3.png);
            background-size: 100% 100%;
            box-shadow: 1px 2px 10px 5px black;
            animation: slider 15s infinite linear;
            animation-fill-mode: forwards;
        }
        @keyframes slider {
            0%{
                background-image: url(img/post3.png); background-size: 100% 100%; animation-delay: 5s;
            }
            35%{
                background-image: url(img/post4.png); background-size: 100% 100%; animation-delay: 5s;
            }
            75%{
                background-image: url(img/post5.png); background-size: 100% 100%; animation-delay: 5s;
            }
        }
        .data{
        /* border: 2px solid red; */
        background-color: black;
        color: white;
        font-size: 20px;
        padding-top: 0.8%;
        position: absolute;
        width: 100%;
        height: 5vh;
        display: flex;
        top: 78%;
        }
        
        .data1{
            /* border: 2px solid red; */
            position: absolute;
            display: inline-block;
            background-color: rgba(0, 0, 0, 0.774);
            width: 100%;
            height: 360vh;
            display: flex;
            top: 85%;
        }
        .end{
            position: absolute;
            top: 470%;
            width: 100%;
            height: 35vh;
            background-color: black;
            color: white;
            text-align: center;
            text-decoration: none;
        }
        .blockback1{
            /* border: 1px solid red; */
            position: absolute;
            display: block;
            width: 100%;
            height: 47vh;
            margin-top: 1%;
            align-items: center;
            text-align: center;
        }
        .block1{
            border: 3px solid white;
            background-color: black;
            display: inline-block;
            border-radius: 15px;
            text-align: center;
            padding: 30px 30px;
            margin-top: 15%;
            object-position: center;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
            width: 255px;
            text-align: center;
            height: 35vh;
        }
        .blockback1 .block1:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .blockback2{
            /* border: 1px solid red; */
            position: absolute;
            display: block;
            margin-top: 310%;
            width: 100%;
            height: 44vh;
            text-align: center;
        }
        .block2{
            display: inline-block;
            border: 3px solid white;
            background-color: black;
            border-radius: 15px;
            list-style: none;
            text-align: center;
            align-items: center;
            padding: 30px 30px;
            margin-top: 15%;
            margin-left: auto;
            width: 255px;
            height: 35vh;
        }
        .blockback2 .block2:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .bbimg{
            /* border: 1px solid yellowgreen; */
            top: 40%;
            width: 100px;
            height: 12vh;
            margin-top: -10px;
            object-fit: scale-down;
            background-size: cover;
        }
        .bbimg1{
            /* border: 1px solid yellowgreen; */
            width: 180px;
            margin-top: -10px;
        }
        .btn{
            border: 1.5px solid white;
            border-radius: 10px;
            position: absolute;
            background-color: black;
            font-size: 23px;
            text-decoration: none;
            color: white;
            margin: 0.5% -8.5%;
            padding: 3px 9px;
        }
        .btn:hover{
            background-color: rgba(0, 0, 0, 0.685);
            border-color: lightskyblue;
        }
        .data1 h2{
            color: white;
            font-weight: bold;
        }
        .data1 h3{
            color: whitesmoke;
            font-weight: normal;
        }
        }
        @media (min-width: 540px) and (max-width: 1024px) and (min-device-height: 260px) 
        and (max-device-height: 511px)  and (orientation: landscape) 
        {
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
        .medden1{
        display: none;
        }
        .midback{
            /* border: 1px solid red;    */
            position: absolute;
            background-color: rgba(0, 0, 0, 0.712);
            top: 36.5%;
            width: 100%;
            height: 90vh;
        }
        .midimg{
            border: 2px solid black;
            position: absolute;
            margin-left: 4%;
            /* margin-right: 0px; */
            text-align: center;
            align-items: center;
            width: 90%;
            height: 70vh;
            display: inline-block;
            top: 10%;
            background-color: rgba(0, 0, 0, 0.712);
            background-image: url(img/post3.png);
            background-size: 100% 100%;
            box-shadow: 1px 2px 10px 5px black;
            animation: slider 15s infinite linear;
            animation-fill-mode: forwards;
        }
        @keyframes slider {
            0%{
                background-image: url(img/post3.png); background-size: 100% 100%; animation-delay: 5s;
            }
            35%{
                background-image: url(img/post4.png); background-size: 100% 100%; animation-delay: 5s;
            }
            75%{
                background-image: url(img/post5.png); background-size: 100% 100%; animation-delay: 5s;
            }
        }
        .data{
        /* border: 2px solid red; */
        background-color: black;
        color: white;
        font-size: 20px;
        padding-top: 0.8%;
        padding-bottom: 0.8%;
        position: absolute;
        width: 100%;
        height: 7vh;
        display: flex;
        top: 132%;
        }
        
        .data1{
            /* border: 2px solid yellow; */
            position: absolute;
            display: inline-block;
            background-color: rgba(0, 0, 0, 0.774);
            width: 99.90%;
            height: 590vh;
            display: flex;
            top: 145%;
        }
        .end{
            position: absolute;
            top: 790%;
            width: 100%;
            height: 50vh;
            background-color: black;
            color: white;
            text-align: center;
            text-decoration: none;
        }
        .blockback1{
            /* border: 1px solid red; */
            position: absolute;
            display: block;
            width: 100%;
            height: 270vh;
            margin-top: 1%;
            align-items: center;
            text-align: center;
        }
        .block1{
            border: 3px solid white;
            background-color: black;
            display: inline-block;
            border-radius: 15px;
            text-align: center;
            padding: 30px 30px;
            margin-top: 5%;
            object-position: center;
            margin-left: 2%;
            margin-right: 2%;
            align-items: center;
            width: 355px;
            text-align: center;
            height: 55vh;
        }
        .blockback1 .block1:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .blockback2{
            /* border: 1px solid red; */
            position: absolute;
            display: block;
            margin-top: 135%;
            width: 100%;
            height: 44vh;
            text-align: center;
        }
        .block2{
            border: 3px solid white;
            background-color: black;
            display: inline-block;
            border-radius: 15px;
            text-align: center;
            padding: 30px 30px;
            margin-top: 5%;
            object-position: center;
            margin-left: 2%;
            margin-right: 2%;
            align-items: center;
            width: 355px;
            text-align: center;
            height: 55vh;
        }
        .blockback2 .block2:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .bbimg{
            /* border: 1px solid yellowgreen; */
            top: 40%;
            width: 200px;
            height: 22vh;
            margin-top: -10px;
            object-fit: scale-down;
            background-size: cover;
        }
        .bbimg1{
            /* border: 1px solid yellowgreen; */
            width: 150px;
            margin-top: -10px;
            object-fit: scale-down;
            background-size: cover;
        }
        .btn{
            border: 1.5px solid white;
            border-radius: 10px;
            position: absolute;
            background-color: black;
            font-size: 23px;
            text-decoration: none;
            color: white;
            margin: 0.5% -5%;
            padding: 3px 9px;
        }
        .btn:hover{
            background-color: rgba(0, 0, 0, 0.685);
            border-color: lightskyblue;
        }
        .data1 h2{
            color: white;
            font-weight: bold;
        }
        .data1 h3{
            color: whitesmoke;
            font-weight: normal;
        }
        
        }
    

    </style>

</head>
<body>
<header class="header1">
            <div class="navbar">
                <ul>
                <li><a href="main.php"><b> 🏠 Home</a></li>
                <li><a href="logout1.php"> 🚪 Sign Out</b></a></li>
                </ul>
            </div>
</header>
<div class="midden">
        <img src="img/amazon-logo.png" class="logo" usemap="#workmap">
            <map name="workmap">
                <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.amazon.in/s?k=fruits+in+fresh&crid=34APY77CQ53MJ&sprefix=fruits%2Caps%2C364&ref=nb_sb_ss_ts-doa-p_3_6">
        </map>
        <div class="vl1"></div>
        <div class="title">
            <h1><b>Post Harvest management</b></h1>
            <h2><i>Powered by Amazon</i></h2>
        </div>
        <div class="medden1">
            <ul>
                <li><a href="about.php"> About Us </a></li>
                <li><a href="harvesting.php"> Harvesting </a></li>
                <li><a href="Byproduct.php"> Byproduct </a></li>
                <li><a href="Recycling.php"> Recycling </a></li>
                <li><a href="policies.php"> Policies </a></li>
                <li><a href="group.php"> Making Group </a></li>
                <li><a href="help.php"> Help & Support </a></li>
            </ul>
        </div>
</div>
    
</div>
<div class="midback">
    <div class="midimg">
        <!-- Mid Img -->
    </div>
</div>
<div class="data">
    <marquee direction="left"> Note : 1. Please go through each step to get complete information about Post Harvest Management &nbsp; 2. More information will comming soon stay connect with us </marquee>
</div>

<div class="data1">
    </b>
    <div class="blockback1">
        <div class="block1">
            <img src="img/bb1.png" class="bbimg1">
            <br>
            <h2><b>Harvesting</b></h2><br>
            <h3>Overall Post Harest Management process</h3><br>
            <a href="harvesting.php" class="btn"> More</a>
        </div>

        <div class="block1">
            <img src="img/bb2.png" class="bbimg">
            <br>
            <h2>Byproduct / Alternative</h2><br>
            <h3>Utilization and suggestion for Mass-Production</h3><br>
            <a href="Byproduct.php" class="btn"> More</a>
        </div>

        <div class="block1">
            <img src="img/bb3.png" class="bbimg">
            <br>
            <h2>Westage & Recycling</h2><br>
            <h3>Use waste product for making alternative product</h3><br>
            <a href="Recycling.php" class="btn"> More</a>
        </div>
    </div>

    <div class="blockback2">
        <div class="block2">
            <img src="img/bb4.png" class="bbimg">
            <br>
            <h2>Insurance / Policies</h2><br>
            <h3>Govenment Insurance and Policies for Harvestment</h3><br>
            <a href="policies.php" class="btn"> More</a>
        </div>

        <div class="block2">
            <img src="img/bb5.png" class="bbimg">
            <br>
            <h2> Making Group</h2><br>
            <h3>Make farmers group for Post Harvest Management</h3><br>
            <a href="group.php" class="btn"> More</a>        
        </div>

        <div class="block2">
            <img src="img/bb6.png" class="bbimg">
            <br>
            <h2>Help & Support</h2><br>
            <h3>Our team provides 24/7 support for customer</h3><br>
            <a href="help.php" class="btn"> More</a>
        </div>
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


<!-- <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p> -->