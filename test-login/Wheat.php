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
    <title>Wheat | Post Harvest Management</title>

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
        height: 530vh;
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
        height: 520vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 3821%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            /* color: rgba(255, 251, 0, 0.918); */
            color: #CB4C78;
            font-size: 27px;
        }
        .img1{
            width: 50%;
            height: 40vh;
            margin-left: 20%;
        }
        .b1{
            color: Turquoise;
            font-size: x-large;
        }
        .img11{
            border: 2px solid white;
            /* position: absolute; */
            background-size: 100% 100%;
            /* display: flex; */
            width: 80%;
            height: 55vh;
            text-align: center;
            margin-left: 10%;
            box-shadow: 1px 1px 10px 5px white;
        }
        .img12{
            border: 2px solid white;
            /* position: absolute; */
            background-size: 100% 100%;
            /* display: flex; */
            width: 28.5%;
            height: 35vh;
            text-align: center;
            margin: 2%;
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
        <h2>Wheat</h2>
    </div>
    <div class="data2">
            <div class="text">
                    <div class="content">
                        <img src="img/grain1.png" class="img1"><br>
                    </div>
                    <b>Check Quality </b>
                    <p> &emsp; &emsp; Overall quality of grain is affected by several factors includes, growing practices, 
                        time and type of harvesting, postharvest handling, storage management and transportation practices.
                        The properties of grain quality can be summarized into ten main factors,<br>
                        (i) Uniform moisture contents (ii) High test weight (iii) No foreign material 
                        (iv) Low percentage of discolored broken and damaged kernels (v) Low breakability 
                        (vi) High milling quality (vii) High protein and oil content (viii) High viability 
                        (ix) No aflatoxin (mycotoxin) and (x) No presence of insects and molds.<br>
                        &emsp; &emsp; Grain grading and specification system assures that a particular lot of grain 
                        meets the required set standards customer. In many countries grading of grain 
                        depends on four main properties;<br>
                    <br>
                
                    <li style="color: Turquoise;">Test weight </li> &emsp; &emsp;  Test (bushel) weight also known as volumetric weight is one of the simplest and 
                        traditional criteria used to determine quality of grain and measure of grain bulk density. It 
                        is an indicator of general grain quality.
                    <li style="color: Turquoise;">Moisture contents </li> &emsp; &emsp; The moisture content is one among important factors in grains quality. It denotes as the 
                        quality of water per unit mass of grain and expressed on a percentage basis (i.e. wet basis or dry basis).
                    <li style="color: Turquoise;">Foreign material (FM) </li> &emsp; &emsp; Broken foreign material is an important factor in grading and classification of grains. It is 
                        described as foreign material other than grains such as sands, pieces of rocks, plastics particles, metals and pieces of 
                        glass, contaminating a particular lot of grain.
                    <li style="color: Turquoise;">Damaged kernel (DK) </li> &emsp; &emsp; Damaged kernels constitute an important grading factor. DK are considered those that have an evident visual 
                        damaged and negatively affect their value of the grains. It is usually quantified by removing damaged kernels by hand from potions 
                        free of impurities.
                    <li style="color: Turquoise;">Non-grain-standards properties </li> &emsp; &emsp; Important non-grain standards in U.S. grain standards includes (i) breakage susceptibility 
                        (ii) milling quality (iii) seed viability (iv) nutritive value (v) mold count and carcinogen content and (vi) insect infestation 
                        and damage.
                    <li style="color: Turquoise;">Discoloration</li>  &emsp; &emsp; Grain color is an important characteristic in grain grading. One form of color deterioration which is common is milled rice 
                        discoloration. Rice whiteness changes to different classes of milled rice discoloration if stored improperly.
                    </p><br>
                        <br>
                        
                        <b>Packaging :</b> 
                        <p> &emsp; &emsp; Wheat flour packing machine is especially designed for wheat flour into open-mouth bags or 
                            woven bags. Such as: plastic woven bags, Kraft bags, sack bags, paper-plastic compound bags, and barrels, 
                            cartons. Wheat flour packing machine is especially designed for wheat flour into open-mouth bags or woven 
                            bags. Such as: plastic woven bags, Kraft bags, sack bags, paper-plastic compound bags, and barrels, 
                            cartons.</p>
                        <br>
                        <img src="img/wheatd1.jpg" id="slide" class="img11"><br>
                        <br>
                        <b>Storage :</b>
                        <p> &emsp; &emsp; Storage at 40-60°F is optimal for most home stored grains but is usually impractical in 
                            most homes except during winter months. Freezing or sub-zero temperatures do not damage stored grains. 
                            Storage at temperatures above 60°F causes a more rapid decline in seed viability (ability to germinate) 
                            but only a slightly faster loss in food value. A moisture level more than 12% encourages mold growth 
                            and chemical degradation of all grains (barley, corn, millets, oats, rice, rye, sorghum, triticale, 
                            and wheat). Moisture levels of more than 12% may allow grains to start to respire causing chemical 
                            degradation. Moisture levels of more than 15% will allow molds to grow.</p><br>
                        
                        <img src="img/wheatd4.jpg" id="slide" class="img12">
                        <img src="img/wheatd5.jfif" id="slide" class="img12">
                        <img src="img/wheatd6.jpg" id="slide" class="img12"><br><br>
                        <b>Ready Product :</b>
                        <p> &emsp; &emsp; 
                            The best strategy was to all sell wheat at harvest. A selling strategy that some producers use is 
                            to sell wheat in thirds: one-third at harvest, one third during late September and early October, 
                            and the final third in November/December. This strategy allows the producers to always be right.</p><br>
                        <b>Major assembling markets : </b>
                        <p> &emsp; &emsp; Major wheat growing states in India are Uttar Pradesh, Punjab, Haryana, Madhya Pradesh, 
                            Rajasthan, Bihar and Gujarat. <br>Important assembling markets of grapes in different states are as under:</p><br>
                        <b1>&emsp;&emsp;States<b1> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b1>Wheat (Th. tonnes)</b1> 
                        <br>
                        <li>Uttar Pradesh &emsp;&emsp;&emsp;&emsp;&nbsp; - 26,874 
                        <br> 
                        <li>Madhya Pradesh &emsp;&emsp;&emsp;&nbsp; - 17,689 
                        <br>
                        <li>Punjab &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;&nbsp; - 16,081 
                        <br>
                        <li>Haryana &emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&emsp; - 11,352
                        <br>
                        <p> &emsp; &emsp;Day by day increased quantities are exported to Nigeria and Egypt. </p><br>

                        <b>Transportation options for Wheat :</b>
                        <p> &emsp; &emsp; One of the most produced cerials in the world is also one of the most difficult 
                            and dangerous to transport. Wheat transportation takes place via truck, rail, ocean vessel, or barge. 
                            Shippers use one or more of these modes of transportation along the way. But the primary 
                            conveyance is rail, regardless of whether the wheat is targeted for domestic use or for 
                            export.</p><br>
                            <img src="img/wheatd7.jpg" id="slide" class="img12">
                            <img src="img/wheatd8.jpg" id="slide" class="img12">
                            <img src="img/wheatd9.jpg" id="slide" class="img12"><br>
                            <br>
                            <hr>
                            <br>
                        <b><a style="color: #CB4C78; text-decoration: none;" href="Wheat-By.php">Check their Byproducts </a></b><br>
                        <b><a style="color: #CB4C78; text-decoration: none;" href="Wheat-Re.php">Check their Recycling </a></b>

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
    
    
<script>
    var images = ["img/wheatd1.jpg", "img/wheatd2.jpg", "img/wheatd3.jpg"]

    var i=0;

    function slides(){

        document.getElementById("slide").src = images[i];

        if(i<(images.length-1))
        i++;
        else
        i=0;
    }

    setInterval(slides, 2000)


</script>


</html>