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
    <title>Coconut | Post Harvest Management</title>

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
        <h2>Coconut</h2>
    </div>
    <div class="data2">
            <div class="text">
                    <div class="content">
                        <img src="img/coconut.png" class="img1"><br>
                    </div>
                    <b>Check Quality </b>
                    <p> &emsp; &emsp; The coconut tree (Cocos nucifera) is a member of the palm tree family 
                        (Arecaceae) and the only living species of the genus Cocos. The term "coconut" (or 
                        the archaic "cocoanut") can refer to the whole coconut palm, the seed, or the fruit, 
                        which botanically is a drupe, not a nut.<br>
                        For any food product, quality is subjected to consumer perceptions of taste, mouthfeel 
                        and colour. This is also true for coconut liquid products. As coconut water, milk and 
                        cream are increasingly consumed worldwide, the quality of coconut liquid products can 
                        be better determined by objective assessments.<br>
                        </p>
                    <p> &emsp; &emsp; <div class="b1">Selection of Seed Gardens :</div>
                        •	Gardens should have palms with a high proportion of heavy bearers but it should be kept 
                        in mind that this must not be from very favourable conditions Garden should be free from the 
                        pest and disease incidence.<br>
                        •	Trees growing closer to households, cattle shed, compost pits should be avoided.<br>
                        •	Certain centres are well known for good quality seed nuts and seedlings, e.g., in Kerala, 
                        Kuttiadi in Kozhikode and Chavakkad in Thrissur districts.<br>
                        <br>
                    </p>
                        
                    <div class="b1">The important features of superior mother palms are : </div>
                    <p>
                        •	A good regular bearing mother palm produces on an average 
                        one leaf and an inflorescence in its axil every month. So, there will be twelve 
                        bunches of varying stages of maturity at any one time with strong bunch stalks. 
                        Avoid trees producing habitually barren nuts.<br>
                        •	Straight stout trunk with even growth and closely spaced leaf scars.<br>
                        •	Spherical or semi spherical crown.<br>
                        •	High rate of leaf (more than 30 fully opened leaves) and spathe production 
                        (12 inflorescences).<br>
                        •	Short and stout petiole and wide leaf base firmly attached to the stem.<br>
                        •	Short and stout inflorescence stalk with bunches, preferably resting on the 
                        leaf petioles of the lower whorl and more number of female flowers (25 or more).<br>
                    </p>
                    <br>
                    
                    <b>Packaging :</b> 
                    <p> &emsp; &emsp;Coconuts are packed in various types of containers, depending on the market destination. 
                        Domestically marketed water coconuts may be sold in bulk or packed in large synthetic or mesh sacks 
                        of known fruit count per sack. If the coconuts are sold in bulk, the fruit are usually loaded onto 
                        the bed of a large truck and transported to the destination market. Considerable manual labour is 
                        required to load and unload the bed of a truck with loose coconuts. In large-scale operations, the 
                        loading process is made more efficient by packing the fruit in large wooden bins on top of pallets. 
                        A hand jack or fork-lift can be used to move the bins onto the bed of the truck.<br>
                        &emsp; &emsp; Coconuts for export are usually de-husked and packed in strong well-ventilated 
                        fiberboard cartons, with a minimum 275 psi test strength. The carton typically has a net weight 
                        of 18 kg. Uniform sized fruit should be packed in each carton.<br>
                        <br>
                        <br>
                    </p>
                        <img src="img/coconutd7.jpg" id="slide" class="img11"><br>
                        <br>
                    
                        <b>Storage :</b>
                        <p> &emsp; &emsp; Fresh unopened coconut can be stored at room temperature for up to four months, 
                            depending on its original freshness when purchased. Grated, fresh coconut should be put in a 
                            tightly sealed container or plastic bag. It can be stored in the refrigerator for up to four 
                            days or frozen for up to six months.<br>
                            <br>
                            <div class="b1"> Storage of Seed Nuts - </div> 
                            &emsp; &emsp; To get more quality seedlings, the seed nuts of tall and hybrid are to be air 
                            cured for one month followed by sand curing for two months. For dwarf varieties, the air curing 
                            should be lesser than one month followed by sand curing for two months. In general seed nuts of 
                            tall variety are stored up to two months after harvest and dwarfs are sown within 15 days. For 
                            storing, arrange the seed nuts with the stalk-end up over an 8 cm layer of sand in a shed and cover 
                            with sand to prevent drying of nut water. Up to five layers of nuts can be arranged one over the 
                            other. The nuts can also be stored in plots, provided the soil is sandy and the ground is 
                            sufficiently shaded. In the case of nuts harvested in May, heap them in partial shade, till husk 
                            is well dried and then sow them in the nursery. Nuts without splashing sound indicate that the nut 
                            water has become dry and hence they should not be used for sowing.
                            
                        </p><br>
                        <img src="img/coconutd4.jfif" id="slide" class="img12">
                        <img src="img/coconutd5.jfif" id="slide" class="img12">
                        <img src="img/coconutd6.jpg" id="slide" class="img12"><br><br>
                        
                        <b>Major assembling markets : </b>
                        <p> &emsp; &emsp; The coconut products market is forecast to witness a CAGR of 9.65% during the forecast 
                            period (2020-2025). The growing preference toward healthier dairy milk alternatives and naturalness 
                            is expected to increase the demand for coconut products.<br>
                            &emsp; &emsp; The major coconut growing states in India are Kerala, Tamilnadu, Karnataka, Andhra 
                            Pradesh, West Bengal, Maharashtra, Orissa, Assam, Goa, Daman and Diu, Lakshwadeep, Gujarat. Kerala 
                            tops in production accounting 39 per cent of total production in the country.<br>
                            <br>
                        </p>
 
                        <b>Transportation options for Coconut :</b>
                        <p> &emsp; &emsp; In order to ensure safe transport, bags with de-husked coconuts must be stowed and 
                            secured in the means of transport in such a manner that they cannot slip.<br>
                            In order to ensure ideal transport conditions, coconuts should be treated as refrigerated cargo. 
                            If appropriately equipped means of transport are available, they may also be transported conventionally, 
                            provided that a cool (5 – 25°C) and well ventilated hold is used.<br>
                            Coconuts should not be exposed to direct solar radiation, as they would otherwise burst, leak and 
                            consequently arrive at the port of destination without coconut milk.<br>
                           </p><br>
                            <img src="img/coconutd1.jpg" id="slide" class="img12">
                            <img src="img/coconutd2.jpeg" id="slide" class="img12">
                            <img src="img/coconutd3.jpg" id="slide" class="img12"><br>
                            <br>
                            <hr>
                            <br>
                        <b><a style="color: #CB4C78; text-decoration: none;" href="Coconut-By.php">Check their Byproducts </a></b><br>
                        <b><a style="color: #CB4C78; text-decoration: none;" href="Coconut-Re.php">Check their Recycling </a></b>

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
    var images = ["img/coconutd7.jpg", "img/coconutd8.jpg", "img/coconutd9.jpg"]

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