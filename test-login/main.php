<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Harest Management</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

<style>
    *{
    padding: 0;
    margin: 0;
    /* font-family: sans-serif; */
    }
    @media screen 
        and (min-width: 1281px)
        and (max-device-width: 1600px)
        and (-webkit-min-device-pixel-ratio: 1) 
        { 
    .video video{
        object-fit: cover;
        position: absolute;
        width: 100%;
        height: 100vh;
    }
    .navbar{
        position: absolute;
        top: 1%;
        width: 98%;
        margin-top: 0%;
        margin-left: 10px;
        align-items: center;
        justify-content: space-between;
        display: flex;
        
    }
    .logo{
        width: 100px;
        border-radius: 10px;
    }
    .navbar ul li{
        border: 3px solid darkgreen;
        /* border: 3px solid black;
        border-color: black; */
        border-radius: 10px;
        margin: 5px 5px;
        list-style: none;
        display: inline-block;
        padding-left: 30px;
        padding-right: 30px;
        font-size: 28px;
        text-decoration: none;
        background-color: lightblue;
        opacity: 0.75;
    }
    .navbar ul li a{
        text-decoration: none;
        color: darkred;
    }
    .navbar ul li:hover{
        opacity: 0.9;
    }
    .navbar ul li a:hover, .navbar li a::after{
        width: 100%;
        text-decoration: underline;
        color: blue;
        transition: 0.5s;
    }
    .title{
        font-family: 'Libre Baskerville', serif;
        /* border: 3.5px solid darkgreen; */
        border-radius: 10px;
        position: absolute;
        top: 65%;
        left: 6%;
        font-size: 90px;
        padding: 10px 40px;
        color: red;
        background-color: lightblue;
        opacity: 0.7;

    }
    .title:hover{
        opacity: 0.9;
    }
    }
    @media screen and (min-width: 90px) and (max-width: 1024px) 
    and (min-device-height: 400px) and (max-device-height: 1366px)  
    and (orientation: portrait) 
    {
    .video video{
        object-fit: cover;
        position: absolute;
        width: 100.7%;
        height: 101vh;
    }
    .navbar{
        position: absolute;
        top: 1%;
        width: 98%;
        margin-top: 0%;
        margin-left: 10px;
        align-items: center;
        justify-content: space-between;
        display: flex;
        
    }
    .logo{
        width: 100px;
        border-radius: 10px;
    }
    .navbar ul li{
        border: 3px solid darkgreen;
        /* border: 3px solid black;
        border-color: black; */
        border-radius: 10px;
        margin: 3px 3px;
        margin-left: 30%;
        list-style: none;
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 20px;
        text-decoration: none;
        background-color: lightblue;
        opacity: 0.75;
    }
    .navbar ul li a{
        text-decoration: none;
        color: darkred;
    }
    .navbar ul li:hover{
        opacity: 0.9;
    }
    .navbar ul li a:hover, .navbar li a::after{
        width: 100%;
        text-decoration: underline;
        color: blue;
        transition: 0.5s;
    }
    .title i{
        font-family: 'Libre Baskerville', serif;
        /* border: 3.5px solid darkgreen; */
        border-radius: 10px;
        position: absolute;
        top: 65%;
        left: 2%;
        right: 2%;
        font-size: 40px;
        padding: 10px 40px;
        color: red;
        background-color: lightblue;
        opacity: 0.7;

    }
    .title:hover{
        opacity: 0.9;
    }
    }
    @media (min-width: 540px) and (max-width: 1024px) and (min-device-height: 260px) 
        and (max-device-height: 511px)  and (orientation: landscape) 
        {
        .video video{
        object-fit: cover;
        position: absolute;
        width: 100%;
        height: 100vh;
    }
    .navbar{
        position: absolute;
        top: 1%;
        width: 98%;
        margin-top: 0%;
        margin-left: 10px;
        align-items: center;
        justify-content: space-between;
        display: flex;
        
    }
    .logo{
        width: 100px;
        border-radius: 10px;
    }
    .navbar ul li{
        border: 3px solid darkgreen;
        /* border: 3px solid black;
        border-color: black; */
        border-radius: 10px;
        margin: 2px 2px;
        /* left: 0%; */
        list-style: none;
        display: inline-block;
        padding-left: 10px;
        padding-right: 10px;
        font-size: 22px;
        text-decoration: none;
        background-color: lightblue;
        opacity: 0.75;
    }
    .navbar ul li a{
        text-decoration: none;
        color: darkred;
    }
    .navbar ul li:hover{
        opacity: 0.9;
    }
    .navbar ul li a:hover, .navbar li a::after{
        width: 100%;
        text-decoration: underline;
        color: blue;
        transition: 0.5s;
    }
    .title i{
        font-family: 'Libre Baskerville', serif;
        /* border: 3.5px solid darkgreen; */
        border-radius: 10px;
        position: absolute;
        top: 60%;
        left: 2%;
        right: 2%;
        font-size: 40px;
        text-align: center;
        padding: 10px 10px;
        color: red;
        background-color: lightblue;
        opacity: 0.7;

    }
    .title:hover{
        opacity: 0.9;
    }
        }


</style>
    
</head>
<body>
    
        <div class="video">
        <video autoplay muted playsinline loop>
            <source src="img/far.mp4" type="video/mp4">
        </video>
        </div>
        <header class="header1">
            <div class="navbar">
                <img src="img/aws.png" class="logo" usemap="#workmap">
                <map name="workmap">
                    <area shape="rect" coords="34,44,270,350" alt="Computer" href="https://www.amazon.in/s?k=fruits+in+fresh&crid=34APY77CQ53MJ&sprefix=fruits%2Caps%2C364&ref=nb_sb_ss_ts-doa-p_3_6">
                </map>
                <ul>
                <li><a href="about.php"><b> About us</a></li>
                <li><a href="management.php"> Management</a></li>
                
                <li><a href="test1.php"> Sign in / Sign Up</b></a></li>
                </ul>
            </div>
        </header>
        <div class="title"><i>Post Harvest Management</i>
        </div>
    <!-- </div> -->

</body>
</html>