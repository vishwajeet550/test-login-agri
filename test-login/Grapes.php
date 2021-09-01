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
    <title>Grapes | Post Harvest Management</title>

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
        height: 632vh;
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
        height: 625vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 4500%;
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
            height: 35vh;
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
        <h2>Grapes</h2>
    </div>
    <div class="data2">
            <div class="text">
                    <div class="content">
                        <img src="img/grapes.png" class="img1"><br>
                    </div>
                    <b>Check Quality </b>
                    <p> &emsp; &emsp; Grapes Quality is decides according to its Grade. Grading means the 
                        sorting of the homogenous lots of the produce according to the fixed 
                        grade standards. Produce is graded in accordance with the various quality 
                        factors. The harvested bunches of grapes are graded as per their size of 
                        the berries and their colour. Before packing, the broken, decayed, deformed, 
                        undersized and discoloured berries are removed from the bunches, using a 
                        long nosed scissor.</p><br>
                    <div class="b1">Benefits: </div>
                    <li>Grading is beneficial to the farmers, traders as well as to the consumers. 
                    <li>Grading of the grapes before sale enables farmers to get better price for their produce. 
                    <li>Grading helps the consumers to get standard quality produce at fair price. 
                    <li>After grading, it is easier for the consumer to compare the prices of different qualities of a produce in the market. 
                    <li>Grading also reduces the cost of marketing. 
                    <li>Grading helps in segregation of grapes for raisin making, juice making, wine making etc.<br>
                        <br>
                        <div class="b1">Criteria for grade designation :</div>
                        <div class="b1">Extra class :</div> 
                        &emsp; &emsp;Grapes must be of superior quality. The bunches must be typical of variety in shape, development and colouring and have 
                        no defects. Berries must be firm, firmly attached to the stalk, evenly spaced along the stalk and have their bloom virtually intact.<br>
                        <br>
                        <div class="b1">Class I : </div>
                        &emsp; &emsp;Grapes must be of good quality. The bunches must be typical of variety in shape, development and colouring. Berries must be firm, 
                        firmly attached to the stalk and, as far as possible, have their gloom intact. They may, however, be less evenly spaced along the 
                        stalk than in the extra class. Following slight defects may be there, provided these do not affect the general appearance of the produce 
                        and keeping quality of the package. 
                        <li> A slight defect in shape. 
                        <li> A slight defect in colouring.<br>
                        <br>
                        <div class="b1">Class II : </div>
                        &emsp; &emsp;The bunches may show defects in shape, development and colouring provided these do not impair the essential characteristics of the 
                        variety. The berries must be sufficiently firm and sufficiently attached. They may be less evenly spaced along the stalk than 
                        Class I grade. Following defects may be there, provided these do not affect the general appearance of the produce and keeping 
                        quality of the package. 
                        <li> defects in shape 
                        <li> defects in colouring 
                        <li> slight sun scorch affecting the skin only 
                        <li> slight bruising
                        <li> slight skin defects.<br>
                        <br>
                        <div class="b1">Provision Concerning Sizing : </div>
                        &emsp; &emsp;Size is determined by the weight of bunches (in gms). The following minimum (in gms) requirements per bunch are laid down for 
                        large and small berries grapes.
                        <br>
                        <b1>Grade<b1> &emsp; &emsp;&emsp; &emsp;&nbsp;&nbsp; <b1>Large berries</b1> &emsp; &emsp;&emsp; &emsp; <b1>Small berries</b1>
                        <br>
                        Extra Class &emsp; &emsp;&emsp; &emsp;&nbsp; 200 &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&nbsp;&nbsp;&nbsp; 150
                        <br> 
                        Class I &emsp; &emsp;&emsp; &emsp;&emsp; &emsp; 150 &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; 100
                        <br>
                        Class II &emsp; &emsp;&emsp; &emsp;&emsp;&emsp; 100 &emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; 75<br>
                        <br>
                        <b>Packaging :</b> 
                        <p> &emsp; &emsp; Packaging is very important as good packaging protect the produce from any damage during storage, 
                        transportation and other marketing operations. It provides convenience in handling during transportation 
                        and storage. The grapes meant for the local market are packed in ventilated corrugated boxes 
                        (2kg and 10kg capacity), bamboo baskets (4kg-15kg) and plastic crates (6-12 kg). These boxes are lined 
                        with newsprint paper. Fine paper shred or fine hay is spread at the bottom and top of the box for cushioning. 
                        The open flaps of the box are secured firmly by an adhesive tape. The cartons are printed with information 
                        such as name of the variety, date of packing, weight, name of the consignee and consignor, destination for 
                        domestic markets.</p>
                        <br>
                        <img src="img/grapesd1.jpg" id="slide" class="img11"><br>
                        <br>
                        <b>Storage :</b>
                        <p> &emsp; &emsp; Fresh grapes can be stored in cold stores for a period of about 6 weeks. Grapes should be pre-cooled promptly 
                        after harvest in separate rooms with large refrigeration capacity, high air velocity and high relative humidity. 
                        They are normally pre-cooled at  1-2° C within 6 hours of harvest. After pre-cooling, the dual releasing Sulphur 
                        dioxide pads (Grape guard) are placed with their coated surfaces downwards 30 on the filled plastic pouches and 
                        covered with the polythene liner.</p><br>
                        <div class="b1">Cold Storage :</div>
                        <p> &emsp; &emsp; The cold storage of grape is done at the temperature varying between 0-2° C and relative humidity ranging 
                            from 90% to 95%. Cold storage of grapes extends the shelf life of grapes by 3 to 4 months. Besides, it also preserves the 
                            freshness of fruit, prevents decay and discoloration. In addition, it also minimizes the discolouration on account of 
                            moisture loss and maintains the stem in good 31 condition. Use of slow release grape guards further enhance the storage 
                            period in a cold storage. Since the cold storage do not have pre-cooling air movement facilities for quick cooling, 
                            pre-cooling prior to cold storage is a basic requirement for rapid removal of field heat. During storage, shattering of 
                            berry can be minimized by avoiding rough handling. Freezing is more in less sugar containing clusters and water loss is 
                            more in fruits of heavy bearing vineyards. The uniform maintenance of temperature and humidity prevents berry cracking.</p><br>
                        <img src="img/grapesd4.jpg" id="slide" class="img12">
                        <img src="img/grapesd5.jpg" id="slide" class="img12">
                        <img src="img/grapes5.jpg" id="slide" class="img12"><br><br>
                        <b>Ready Product :</b>
                        <p> &emsp; &emsp; Adding value to grapes may be as simple as creatively packaging the grapes. This might be washing and 
                            packaging the fruit for a ready-to-eat snack or placing the fruit in a decorative container either alone or with other 
                            fresh fruit as a “farm fresh gift basket.” The dried grapes are known as raisins.</p><br>
                        <b>Major assembling markets : </b>
                        <p> &emsp; &emsp; Important assembling markets of grapes in different states are as under:</p><br>
                        <b1>&emsp;&emsp;States<b1> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <b1>Important Markets</b1> 
                        <br>
                        <li>Andhra Pradesh &emsp;&emsp;&emsp;&emsp; - Gaddiannaram, Medak, Anantpur, Rangareddy, Mehboobnagar,
                            Kurnool 
                            
                        <br> 
                        <li>Haryana &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; - Fatehabad, Jakhal, Ratia, Tohna 

                        <br>
                        <li>Karnataka &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; - Bangalore, Malur, Mulbhagilu, Hubli, Mysore, Tumkur, Kolar,
                            Bijapur, Gulbarga, Raichur and Bellary 
                        <br>
                        <li>Maharashtra &emsp;&emsp;&emsp;&emsp;&emsp;&ensp; - Nashik, Nagpur, Pune , Sangli, Solapur, Satara, Ahmednagar,
                            Latur, Beed, Aurangabad 
                        <br>
                        <li>Punjab &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp; - Amritsar, Bhatinda, Faridkot, Ferozpur, Gurudaspur, Hoshiarpur, Jalandhar, Kapurthala, Ludhiana 
                        <br>
                        <li>Rajasthan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp; - Jaipur, Jodhpur, Ajmer, Bikaner, Sri Gangapur, Udaipur 
                        <br>
                        <p> &emsp; &emsp;Day by day increased quantities are exported to Europe, Middle East, Dubai, etc. </p><br>

                        <b>Transportation options for Grapes :</b>
                        <p> &emsp; &emsp; As grapes are harvested, they are packed into plastic containers lined with plastic sheeting. The 
                            containers are loaded onto a truck and pulled into the packing shed for processing. The grapes are sorted and 
                            placed directly into clamshells and weighed or the grapes will be transported in reefer containers with a remote 
                            container management solution that monitors atmospheric conditions inside the container and provides visibility 
                            of the same to the customers.</p><br>
                            <img src="img/grapesd6.jpg" id="slide" class="img12">
                            <img src="img/grapesd7.jpg" id="slide" class="img12">
                            <img src="img/grapesd8.jpg" id="slide" class="img12"><br>
                            
                            <hr>
                            <br>
                        <b><a style="color: #CB4C78; text-decoration: none;" href="Grapes-By.php">Check their Byproducts </a></b><br>
                        <b><a style="color: #CB4C78; text-decoration: none;" href="Grapes-Re.php">Check their Recycling </a></b>

            </div>
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
    
    
<script>
    var images = ["img/grapesd1.jpg", "img/grapesd2.jpg", "img/grapesd3.jpg"]

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