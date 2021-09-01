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
    <title>Grapes Recycling | Post Harvest Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&display=swap" rel="stylesheet">

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
            margin-left: 75%;
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
        height: 140vh;
        display: flex;
        top: 204%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        border: 1px solid white;
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 70%;
        height: 130vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 1221%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: #CB4C78;
            font-size: 27px;
        }
        .b1{
            color: Turquoise;
            font-size: x-large;
        }
        .img12{
            border: 2px solid white;
            /* position: absolute; */
            background-size: 100% 100%;
            /* display: flex; */
            width: 28.5%;
            height: 35vh;
            text-align: center;
            margin: 1% 10%;
            box-shadow: 1px 1px 10px 3px white;
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
        height: 220vh;
        display: flex;
        top: 181%;
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
        height: 215vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 1496%;
        width: 100%;
        height: 35vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: #CB4C78;
            font-size: 20px;
        }
        .b1{
            color: Turquoise;
            font-size: x-large;
        }
        .img12{
            border: 2px solid white;
            /* position: absolute; */
            background-size: 100% 100%;
            /* display: flex; */
            width: 40%;
            height: 20vh;
            text-align: center;
            display: inline-block;
            align-content: center;
            margin: 1% 4%;
            box-shadow: 1px 1px 10px 3px white;
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
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 855vh;
        display: flex;
        top: 190%;
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
        height: 845vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 3408%;
        width: 100%;
        height: 50vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: #CB4C78;
            font-size: 20px;
        }
        .b1{
            color: Turquoise;
            font-size: x-large;
        }
        .img12{
            border: 2px solid white;
            /* position: absolute; */
            background-size: 100% 100%;
            /* display: flex; */
            width: 40%;
            height: 40vh;
            text-align: center;
            display: inline-block;
            align-content: center;
            margin: 1% 4%;
            box-shadow: 1px 1px 10px 3px white;
        }
        }

    </style>

</head>
<body>
    <header class="header1">
            <div class="navbar">
                <ul>
                <li><a href="main.php"><b> 🏠 Home</a></li>
                <li><a href="management.php"> Management </b></a></li>
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
    <div class="data">
        <marquee direction="left"> Note : 1. Please go through each step to get complete information about Post Harvest Management &nbsp; 2. More information will comming soon stay connect with us </marquee>
    </div>
    <div class="data1">
        <h2>Grapes Recycling</h2>
    </div>
    <div class="data2">
            <div class="text">
                <p> &emsp; &emsp; Over the past few years, utilization of grape pomace has been inefficient. 
                    Large amounts of pomace are produced during a short period of harvesting, which increases 
                    the concentration per area. However, due to the increasing attention to sustainable of 
                    agricultural and consumer demand for the use of natural over synthetic compounds, there is 
                    great interest in the utilization of grape by-products as food additives, nutraceuticals, 
                    ingredients of functional foods/dietary supplements, medical remedies, fertilizers, animal 
                    feed, antimicrobial components, cosmetics and finally as biomass for biofuels.
                    </p><br>
                    <p> &emsp; &emsp; Therefore, the need to recycle, reuse and recover energy and valuable chemicals 
                        from winery waste and wastewater becomes apparent. </p><br>
                
                    <b>Grape Pomace and marc : </b><br>
                    <p> &emsp; &emsp; Grape marc has long been used to feed cattle. Grape marc is best used as a filler feed, 
                        supplemented with other nutrient-rich feeds. Pomace is high in antioxidants, fibre, and other nutrients 
                        that are essential to the health of cattle. Pomace can be processed into all kinds of things: cream of 
                        tartar, distilled into spirits like grappa, ground into powdered tannin extract, used as food colouring 
                        or turned into animal feed.</p><br>
                        <img src="img/grapesd10.jpg" id="slide" class="img12">
                        <img src="img/grapesd19.jpg" id="slide" class="img12"><br>
                    <br>
                
                <hr>
                <br>
                <b><a style="color: #CB4C78; text-decoration: none;" href="Grapes.php">Check their Harvesting </a></b><br>
                <b><a style="color: #CB4C78; text-decoration: none;" href="Grapes-By.php">Check their Byproducts </a></b>



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