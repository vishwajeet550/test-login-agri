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
    <title>Policies | Post Harvest Management</title>

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
        height: 242vh;
        display: flex;
        top: 204%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .backimg1{
        /* border: 1px solid black; */
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 65%;
        height: 55vh;
        margin-left: 7%;
        display: inline-block;
        background-color: black;
        margin-top: -1%;
        }
        .backimg1 img{
            border: 2px solid black;
            position: absolute;
            background-size: 100% 100%;
            display: flex;
            width: 100%;
            height: 55vh;
            box-shadow: 1px 2px 10px 5px black;
        }
        .text{
        border: 1px solid white;
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 70%;
        height: 170vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        top: 650%;
        margin-left: 10%;
        }
        .end{
        position: absolute;
        top: 1902%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: rgba(255, 251, 0, 0.849);
            font-size: x-large;
        }
        .b1{
            font-size: 23px;
            color: #CB4C78;
            font-weight: 590;
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
        font-size: 18px;
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
        height: 360vh;
        display: flex;
        top: 181%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .backimg1{
        /* border: 1px solid black; */
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 90%;
        height: 35vh;
        margin-left: -5%;
        display: inline-block;
        background-color: black;
        margin-top: 4%;
        }
        .backimg1 img{
            border: 2px solid black;
            position: absolute;
            background-size: 100% 100%;
            display: flex;
            width: 100%;
            height: 35vh;
            box-shadow: 1px 2px 10px 5px black;
        }
        .text{
        border: 1px solid white;
        color: white;
        /* font-size: 10px; */
        font-weight: lighter;
        position: absolute;
        width: 85%;
        height: 310vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        top: 445%;
        margin-left: 5%;
        text-align: justify;
        
        }
        .end{
        position: absolute;
        top: 2323%;
        width: 100%;
        height: 35vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: rgba(255, 251, 0, 0.849);
            font-size: x-large;
        }
        .b1{
            font-size: 23px;
            color: #CB4C78;
            font-weight: 590;
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
        font-size: 23px;
        padding-top: 0.4%;
        position: absolute;
        width: 80%;
        height: 475vh;
        display: flex;
        top: 190%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .backimg1{
        /* border: 1px solid black; */
        color: white;
        font-size: 20px;
        font-weight: lighter;
        position: absolute;
        width: 90%;
        height: 35vh;
        margin-left: -5%;
        display: inline-block;
        background-color: black;
        margin-top: 2%;
        }
        .backimg1 img{
        border: 2px solid black;
        position: absolute;
        background-size: 100% 100%;
        display: flex;
        width: 100%;
        height: 75vh;
        box-shadow: 1px 2px 10px 5px black;
        }
        .text{
        border: 1px solid white;
        color: white;
        /* font-size: 10px; */
        /* font-weight: lighter; */
        position: absolute;
        width: 85%;
        top: 545%;
        height: 365vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: 4.5%;
        }
        .end{
        position: absolute;
        top: 1993%;
        width: 100%;
        height: 50vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .text b{
            color: rgba(255, 251, 0, 0.849);
            font-size: x-large;
        }
        .b1{
            font-size: 23px;
            color: #CB4C78;
            font-weight: 590;
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
    <div class="vl1"></div>
    <div class="title">
        <h1><b>Post Harvest management</b></h1>
        <h2><i>Powered by Amazon</i></h2>
    </div>
    <div class="data">
        <marquee direction="left"> Note : 1. Please go through each step to get complete information about Post Harvest Management &nbsp; 2. More information will comming soon stay connect with us </marquee>
    </div>
    <div class="data1">
        <h2>Government Policies</h2>
    </div>
    <div class="data2">
        <div class="backimg1">
            <img src="img/kisan2.jpg" id="slide">
        </div>
    </div>

        <div class="text">

            <b>PM Kisan Samman Nidhi Yojana</b><br>
            <p> &emsp; &emsp; The PM Kisan Samman Nidhi Yojana is a government scheme with 100 per cent funding from the Central government. 
                The scheme promises income support of Rs 6,000 per year in three equal installments to small and marginal farmer families, 
                having combined land holding/ownership of up to 2 hectares. Small and marginal farmers are eligible for PMKSNY. Farmer families 
                that hold cultivable land can apply for the benefits of this plan.</p><br>
                <div class="b1">Official Website -</div> &emsp; &emsp; <a style="color: cadetblue;" href="https://pmkisan.gov.in/BeneficiaryStatus.aspx#https://pmkisan.gov.in/BeneficiaryStatus.aspx#">
                    https://pmkisan.gov.in</a><br>
                <br>

            <b>Kisan Credit Card</b><br>
            <p> &emsp; &emsp; The Kisan Credit Card scheme is a credit scheme introduced in August 1998 by Indian banks. 
                This model scheme was prepared by the National Bank for Agriculture and Rural Development on the 
                recommendations of R.V.GUPTA committee to provide term loans for agricultural needs.
                <li>Any individual farmer who is an owner-cultivator.
                <li>People who belongs to a group and are joint borrowers.
                <li>Sharecroppers, tenant farmers, or an oral lessee are eligible for the KCC.</li>
            </p><br>
                <div class="b1">Official Website -</div> &emsp; <a style="color: cadetblue;" href="https://sbi.co.in/web/agri-rural/agriculture-banking/crop-loan/kisan-credit-cardhttps://sbi.co.in/web/agri-rural/agriculture-banking/crop-loan/kisan-credit-card">
                    https://sbi.co.in/web/agri-rural/agriculture-banking/crop-loan/kisan-credit-card</a> <br>
                <br>

            <b>Pradhan Mantri Fasal Bima Yojana (PMFBY)</b><br>
            <p> &emsp; &emsp; The Pradhan Mantri Fasal Bima Yojana (PMFBY) launched on 18 February 2016 by Prime 
                Minister Narendra Modi is an insurance service for farmers. It aims to reduce the premium burden 
                on farmers and ensure early settlement of crop assurance claim for the full insured sum.
                PMFBY aims to provide a comprehensive insurance cover against failure of the crop thus helping 
                in stabilising the income of the farmers.</p><br>
                <div class="b1">Official Website -</div> &emsp; &emsp; <a style="color: cadetblue;" href="https://pmfby.gov.in/">
                    https://pmfby.gov.in/</a><br>
                <br>

            <b>Other agriculture schemes</b><br>
            <br>
                <div class="b1">Atal Bhujal Yojana -</div> 
                <p>Atal Bhujal Yojana (or, Atal Jal) is a groundwater management scheme launched by Prime Minister 
                    Narendra Modi on the 95th birth anniversary of former Prime Minister Atal Bihari Vajpayee, on 
                    25 December 2019. The purpose of the scheme is to improve groundwater management in seven states
                    of India.</p>
                    &emsp; &emsp; <a style="color: cadetblue;" href="https://www.ataljal.in/">
                        https://www.ataljal.in/</a> <br>
                    <br>
                
                <div class="b1">Gramin Bhandaran Yojana -</div> 
                <p>Gramin Bhandaran Yojana, or Rural Godown Scheme, is an Indian government initiative to offer 
                    subsidies to individuals or organizations which build or repair rural godowns.</p>
                    &emsp; &emsp; <a style="color: cadetblue;" href="https://www.nabard.org/hindi/content1.aspx?id=593&catid=23&mid=530">
                        https://www.nabard.org</a> <br>
                <br>
                <div class="b1">Paramparagat Krishi Vikas Yojana (PKVY) -</div> 
                <p>Paramparagat Krishi Vikas Yojana (PKVY), launched in 2015 by Narendra Modi regime to promote organic 
                    farming, under which farmers form organic farming clusters of 50 or more farmers with a minimum total 
                    area of 50 acre to share organic methods using traditional sustainable methods, costs, and marketing, 
                    etc.
                </p>
                    &emsp; &emsp; <a style="color: cadetblue;" href="https://rkvy.nic.in/">
                        https://rkvy.nic.in/</a> <br>


                <br>


        </div>

    
    
</body>



<div class="end">
    <br>
    <img style="height:85px;width:100px; border-radius: 10px;" src="img/aws.png" >
    </p>
    <p><a style="color:white; text-decoration: none;" href="https://www.amazon.com/gp/navigation-country/select-country">© 1996-2021, Amazon.com, Inc. or its affiliates </a></p>
    <br>
    <p style="color:rgb(132, 200, 255);font-size:14px; text-decoration:none;">Contact &#8644; <a style="font-size:16px; color:rgb(132, 200, 255);" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
</div>
    
<script>
    var images = ["img/kisan2.jpg", "img/kisan6.jpg", "img/kisan3.jpg", "img/kisan7.jpg"]

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