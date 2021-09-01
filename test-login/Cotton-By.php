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
    <title>Cotton Byproducts | Post Harvest Management</title>

    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@300&display=swap" rel="stylesheet">

    <style>
        *{
        padding: 0;
        margin: 0;
        }
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
        height: 390vh;
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
        height: 380vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 2888%;
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
        <h2>Cotton Byproducts</h2>
    </div>
    <div class="data2">
            <div class="text">
                <p> &emsp; &emsp; While cotton is known mostly for its natural fibre and its use in textile production, cotton 
                    does so much more than clothe us. Cotton production creates many byproducts, which is why it is known as 
                    an “and” crop – it produces fibre and linters and seed, without requiring extra land, water, fertilizer 
                    or other support.<br> 
                    &emsp; &emsp; Cotton seeds are valuable by-products. The seeds are delinted by a similar process to ginning. Some linter 
                    is used to make candle wicks, string, cotton balls, cotton batting, paper, and cellulose products such as 
                    rayon, plastics, photographic film, and cellophane.<br>
                    &emsp; &emsp; The byproducts of cotton ginning are cottonseed and linters. Linters are used in the manufacturing of rocket 
                    propulsion or explosives as these are high in cellulose content. Cottonseed is directly crushed to yield 
                    cottonseed oil and cottonseed cake.<br>
                </p><br>
                
                <b>Cottonseed : </b><br>
                <p>&emsp; &emsp; Cottonseed, seed of the cotton plant, important commercially for its oil and other products. Cottonseed oil is used 
                    in salad and cooking oils and, after hydrogenation, in shortenings and margarine. The cake, or meal, 
                    remaining after the oil is extracted is used in poultry and livestock feeds.<br>
                </p><br>
                
                <img src="img/cottond18.jfif" id="slide" class="img12">
                <img src="img/cottond19.jpg" id="slide" class="img12"><br>
                <br>
                <b>linters : </b><br>
                <p> &emsp; &emsp;
                    Linters, the short cellulose fibres left on the seed after the staple cotton is removed by ginning, are used to 
                    make coarse yarns and many cellulose products. The hulls, or outer seed coverings, are used in ruminant animal 
                    feed as roughage.</p><br>
                    
                    <img src="img/cottond16.jpg" id="slide" class="img12">
                    <img src="img/cottond17.jpg" id="slide" class="img12"><br>
                <br>
                <b>Hydromulch : </b><br>
                <p> &emsp; &emsp; Hydromulching, which is sometimes also called hydroseeding or hydraulic mulch seeding, is a method 
                    of planting grass in which a mixture of water, fiber mulch, tackifier (an adhesive substance), and seeds are 
                    sprayed over an area to prevent soil erosion and promote re-vegetation.
                    </p><br>
                    
                    <img src="img/cottond14.jfif" id="slide" class="img12">
                    <img src="img/cottond15.jfif" id="slide" class="img12"><br>
                <br>
                <b>Packaging material : </b><br>
                <p> &emsp; &emsp; Types of packaging material used in food · Plastics. Plastics are organic polymeric materials that 
                    can be molded into the desired shape.</p><br>
                    <img src="img/cottond12.jpeg" id="slide" class="img12">
                    <img src="img/cottond13.jpg" id="slide" class="img12"><br>
                <br>
                <b>Wall Covering : </b><br>
                <p> &emsp; &emsp; Marshalls Wallcovering Best Quality & Price Wall Wallpapers In 3D/HD Quality Wallpaper For Wall, 
                    Designer Wallpaper, Bedroom, Living Room, Textured 3d.</p><br>
                    <img src="img/cottond10.jfif" id="slide" class="img12">
                    <img src="img/cottond11.jpg" id="slide" class="img12">
                <br><br>
                <hr>
                <br>
                <b><a style="color: #CB4C78; text-decoration: none;" href="Cotton.php">Check their Harvesting </a></b><br>
                <b><a style="color: #CB4C78; text-decoration: none;" href="Cotton-Re.php">Check their Recycling </a></b>



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