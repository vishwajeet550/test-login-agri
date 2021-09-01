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
    <title>Cotton | Post Harvest Management</title>

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
        height: 570vh;
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
        height: 560vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 4088%;
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
        <h2>Cotton</h2>
    </div>
    <div class="data2">
            <div class="text">
                    <div class="content">
                        <img src="img/coton.png" class="img1"><br>
                    </div>
                    <b>Check Quality </b>
                    <p> &emsp; &emsp; The U.S. is the world’s most reliable producer of high quality cotton.
                        Cotton Incorporated helps maintain this leadership position through ongoing research and measurement studies. <br>
                        <br>
                        These include:<br>  
                        •	Accurate measurements of cotton fibre, yarn and fabric properties.<br>
                        •	High Volume Instrument testing for fibre length, strength, length uniformity, micronaire, colour and trash content.<br>
                        •	Fibre tests for neps, fineness, maturity, and non-lint content.<br>
                        •	Management of cotton property databases.<br>
                        </p><br>
                    <p> &emsp; &emsp; <div class="b1">There are four main factors for raw cotton:</div><br>
                        a) Grade – Cotton is graded by cleanliness or colour. Badly ginned cotton contains more ‘trash’ – dirt, leaf, cut seed, stains, etc. 
                        which means higher wastage for the spinner. ‘Stain’ is caused by climatic conditions during growing. 
                        Lightning, for instance, will cause a yellow stain on the mature bolls.<br>
                        b) Staple – The length of the fibres. Evennes of fibre length is an important consideration.<br>
                        c) Micronaire – A term used to describe the thickness and the maturity of the fibre.<br>
                        d) Strength – the tenacity of the fibre at breaking point tested by instruments such as Pressley, Stelometer 
                        or the High Volume Instrument (HVI).<br>
                        <br>
                        
                        <div class="b1">•	Durability : </div> made from long staple fibres are normally higher quality 
                        because they are spun into a finer yarn. This makes the resulting fabric stronger 
                        and more durable.<br>
                        <div class="b1">•	Softness : </div> length of the fibres is also important for the softness of the 
                        material. This is because with short fibres their ends cannot finish cleanly, 
                        whereas long fibres are woven more evenly into the fabric.<br>
                        <div class="b1">•	Breathability : </div> reason why some fabrics are less breathable than others 
                        are the tiny air pockets between the individual threads, which provide thermal 
                        insulation. Finely combed cotton can be woven very tightly to avoid air pockets 
                        and the unpleasant sweaty feeling.<br>

                        </p><br>
                   
                        <b>Packaging :</b> 
                        <p> &emsp; &emsp; The fibre is most often spun into yarn or thread and used to make a soft, breathable 
                            textile. Cotton is shipped in fully pressed bales, pressed to a considerable density, without harm.<br>
                            &emsp; &emsp; Proper packing of cotton will protect it from damages and contamination. Materials used for packing 
                            of cotton should be more versatile and in no way it should hamper the condition of cotton.Plastic 
                            crates offer better protection against physical injuries than the other containers due to their 
                            smooth surface, rigidity, and ease in handling(Acedo, 2006). The packing should be in such a way that 
                            the quality of cotton especially the colur the staple length should not be affected.<br>
                            <br>
                            <div class="b1">Ready Product : </div>
                            &emsp; &emsp; Once you have harvested all the mature cotton, spread it out in a cool, dark area with 
                            plenty of air circulation to dry. Once the cotton is dry, separate the cotton seeds from 
                            the cotton by hand. Now you're ready to use your cotton.
                        </p><br>
                        <br>
                        <img src="img/cottond7.jfif" id="slide" class="img11"><br>
                        <br>
                        <b>Storage :</b>
                        <p> &emsp; &emsp; The cotton and silk clothes must be stored in a cool and dark spaces. Insects are attracted towards light. 
                            When the clothes need to be stored for longer periods, then make sure to unfold them frequently to avoid creases 
                            becoming permanent. Never starch the cotton clothes when they need to be stored. <br>
                            Instead, textiles can be wrapped in clean, white cotton cloth, such as an old sheet or pillowcase, or in muslin. 
                            Because textile fibres need to be in an environment where there is some air movement, fabrics should not be sealed in 
                            air-tight plastic bags or containers to prevent damage from moisture condensation.<br>
                            <br>
                            <div class="b1"> Five tips to care for cotton - </div> 
                            •	Discolouration. The best way to prevent your garments from losing their colour is to hand wash them in cold water.<br>
                            •	Stain treatment. <br>
                            •	Drying, shrinkage and stretching. <br>
                            •	Ironing and creasing. <br>
                            •	Don't let you clothes be eaten.<br>
                            
                        </p><br>
                        <img src="img/cottond4.jfif" id="slide" class="img12">
                        <img src="img/cottond5.jfif" id="slide" class="img12">
                        <img src="img/cottond6.jpg" id="slide" class="img12"><br><br>
                        
                        <b>Major assembling markets : </b>
                        <p> &emsp; &emsp;Economy as the country's textile industry is predominantly cotton based. India is one of the largest producers as well as exporters of cotton yarn.
                            <br>Gujarat, Maharashtra, Telangana, Andhra Pradesh, Karnataka, Madhya Pradesh, Haryana, Rajasthan, and Punjab are the major cotton producers in India.<br>
                            <br>
                            <div class="b1"> Marketing Constraints – </div> &emsp; &emsp; During the marketing process every farmer has to face certain constraints in the form of too many varieties, 
                            contamination of cotton, determination of market price, determination of quality, government policies of different states, market information, inadequate 
                            infrastructural facilities, getting of license, etc.<br>
                            &emsp; &emsp; Day by day increased quantities are exported to China, United States, Brazil etc.<br>
                            <br>
                        </p>
     
                        <b>Transportation options for Cotton :</b>
                        <p> &emsp; &emsp; First, raw cotton is harvested and transported to a cotton gin. After harvest, the cotton is 
                            compacted into loosely molded rectangles that weigh 14,000lbs called modules for transport on a trailer. 
                            Sometimes, the harvester will transport the cotton in smaller plastic-wrapped modules. The heavier 
                            modules are transported to the gin on specially constructed trailers while the lighter ones are 
                            transported on flatbed trailers. </p><br>
                            <img src="img/cottond1.jpg" id="slide" class="img12">
                            <img src="img/cottond2.jfif" id="slide" class="img12">
                            <img src="img/cottond3.jfif" id="slide" class="img12"><br>
                            <br>
                            <hr>
                            <br>
                        <b><a style="color: #CB4C78; text-decoration: none;" href="Cotton-By.php">Check their Byproducts </a></b><br>
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
    
    
<script>
    var images = ["img/cottond7.jfif", "img/cottond8.jpg", "img/cottond9.jpg"]

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