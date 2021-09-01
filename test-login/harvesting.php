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
    <title>Harvesting | Post Harvest Management</title>

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
        
        /* *{
        padding: 0;
        margin: 0;
        } */
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
        height: 252vh;
        display: flex;
        top: 204%;
        padding: 3% 10%;
        font-family: 'Mukta', sans-serif;
        font-weight: normal;
        }
        .text{
        border: 3px solid white;
        color: white;
        font-size: 15px;
        font-weight: lighter;
        position: absolute;
        width: 70%;
        height: 220vh;
        display: inline-block;
        background-color: black;
        padding: 2% 5%;
        }
        .end{
        position: absolute;
        top: 1800%;
        width: 100%;
        height: 25vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .tag1{
            border: 3px solid white;
            margin: -3% -7.4%;
            width: 114.3%;
            height: 7vh;
            font-size: 30px;
            text-align: center;
            /* font-weight: 700; */
        }
        .tag2{
            border: 3px solid white;
            margin: -3% -6.5%;
            width: 100%;
            height: 7vh;
            font-size: 30px;
            text-align: center;
            position: absolute;
            margin-top: 26%;
            /* font-weight: 700; */
        }
        .blockback1{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 5%;
        left: 32%;
        display: flex;
        width: 55%;
        height: 27vh;
        }
        .block1{
        border: 3px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        text-align: center;
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 5%;
        width: 100px;
        height: 15vh;
        }
        .blockback1 .block1:hover{
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
        .btn{
            border: 1.5px solid white;
            border-radius: 10px;
            position: absolute;
            background-color: black;
            font-size: 15px;
            text-decoration: none;
            color: white;
            top: 65%;
            margin: 0.5% -4.5%;
            padding: 3px 9px;
        }
        .btn:hover{
            background-color: rgba(0, 0, 0, 0.685);
            border-color: lightskyblue;
        }
        .blockback2{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 33%;
        left: 32%;
        display: flex;
        width: 55%;
        height: 27vh;
        }
        .block2{
        border: 3px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        text-align: center;
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 5%;
        width: 100px;
        height: 15vh;
        }
        .blockback2 .block2:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .tag3{
            border: 3px solid white;
            margin: -3% -6.4%;
            width: 99.9%;
            height: 7vh;
            font-size: 30px;
            text-align: center;
            position: absolute;
            margin-top: 54%;
            /* font-weight: 700; */
        }
        .blockback3{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 61%;
        left: 32%;
        display: flex;
        width: 55%;
        height: 27vh;
        }
        .block3{
        border: 3px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        text-align: center;
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 5%;
        width: 100px;
        height: 15vh;
        }
        .blockback3 .block3:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .tag4{
            border: 3px solid white;
            margin: -3% -6.4%;
            width: 99.9%;
            height: 7vh;
            font-size: 30px;
            text-align: center;
            position: absolute;
            margin-top: 82%;
            /* font-weight: 700; */
        }
        .blockback4{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 89.5%;
        left: 32%;
        display: flex;
        width: 55%;
        height: 27vh;
        }
        .block4{
        border: 3px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        text-align: center;
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 5%;
        width: 100px;
        height: 15vh;
        }
        .blockback4 .block4:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .img{
            width: 100px;
            height: 15vh;
            margin-top: -25px;
            object-fit: scale-down;
            background-size: cover;
        }
        .b1{
            color: Turquoise;
            font-size: x-large;
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
        height: 257vh;
        display: flex;
        top: 189%;
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
        height: 245vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 1722%;
        width: 100%;
        height: 30vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .tag1{
            border: 2px solid white;
            margin: -1% -4%;
            width: 106.5%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            /* font-weight: 700; */
        }
        .tag2{
            border: 2px solid white;
            margin: -1% -3.9%;
            width: 100%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            position: absolute;
            margin-top: 55%;
            /* font-weight: 700; */
        }
        .blockback1{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 5%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 22vh;
        }
        .block1{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        width: 100px;
        height: 10vh;
        }
        .blockback1 .block1:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .btn{
            border: 1.5px solid white;
            border-radius: 10px;
            position: absolute;
            background-color: black;
            font-size: 15px;
            text-decoration: none;
            color: white;
            top: 61%;
            margin: 0.5% 5%;
            padding: 3px 9px;
        }
        .btn:hover{
            background-color: rgba(0, 0, 0, 0.685);
            border-color: lightskyblue;
        }
        .blockback2{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 86%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 22vh;
        }
        .block2{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        width: 100px;
        height: 10vh;
        }
        .blockback2 .block2:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .tag3{
            border: 2px solid white;
            margin: -1% -3.9%;
            width: 99.89%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            position: absolute;
            margin-top: 137%;
            /* font-weight: 700; */
        }
        .blockback3{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 167%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 22vh;
        }
        .block3{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        width: 100px;
        height: 10vh;
        }
        .blockback3 .block3:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .tag4{
            border: 2px solid white;
            margin: -1% -3.9%;
            width: 99.89%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            position: absolute;
            margin-top: 218%;
            /* font-weight: 700; */
        }
        .blockback4{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 250%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 22vh;
        }
        .block4{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 2%;
        margin-right: 2%;
        width: 100px;
        height: 10vh;
        }
        .blockback4 .block4:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .img{
            width: 80px;
            height: 15vh;
            margin-top: -35px;
            object-fit: scale-down;
            background-size: cover;
        }
        .b1{
            color: Turquoise;
            font-size: 18px;
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
        height: 425vh;
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
        height: 410vh;
        display: inline-block;
        background-color: black;
        padding: 2% 3%;
        margin-left: -6%;
        }
        .end{
        position: absolute;
        top: 1812%;
        width: 100%;
        height: 50vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        .tag1{
            border: 2px solid white;
            margin: -1% -3.8%;
            width: 107%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            /* font-weight: 700; */
        }
        .tag2{
            border: 2px solid white;
            margin: -1% -3.6%;
            width: 100%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            position: absolute;
            margin-top: 40%;
            /* font-weight: 700; */
        }
        .blockback1{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 5%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 42vh;
        }
        .block1{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 16%;
        margin-right: 2%;
        width: 100px;
        height: 19vh;
        }
        .blockback1 .block1:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .btn{
            border: 1.5px solid white;
            border-radius: 10px;
            position: absolute;
            background-color: black;
            font-size: 15px;
            text-decoration: none;
            color: white;
            top: 63%;
            margin: 0.5% 3%;
            padding: 3px 9px;
        }
        .btn:hover{
            background-color: rgba(0, 0, 0, 0.685);
            border-color: lightskyblue;
        }
        .blockback2{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 52%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 42vh;
        }
        .block2{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 16%;
        margin-right: 2%;
        width: 100px;
        height: 19vh;
        }
        .blockback2 .block2:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .tag3{
            border: 2px solid white;
            margin: -1% -3.6%;
            width: 99.9%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            position: absolute;
            margin-top: 85%;
            /* font-weight: 700; */
        }
        .blockback3{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 97%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 42vh;
        }
        .block3{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 16%;
        margin-right: 2%;
        width: 100px;
        height: 19vh;
        }
        .blockback3 .block3:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .tag4{
            border: 2px solid white;
            margin: -1% -3.6%;
            width: 99.9%;
            height: 12vh;
            font-size: 23px;
            text-align: center;
            position: absolute;
            margin-top: 130%;
            /* font-weight: 700; */
        }
        .blockback4{
        /* border: 1px solid red; */
        position: absolute;
        /* margin-left: -5%; */
        margin-top: 142%;
        left: 2%;
        display: flex;
        width: 95%;
        height: 42vh;
        }
        .block4{
        border: 2px solid white;
        background-color: black;
        display: inline-block;
        border-radius: 15px;
        /* text-align: center; */
        padding: 30px 30px;
        margin-top: 2%;
        margin-left: 16%;
        margin-right: 2%;
        width: 100px;
        height: 20vh;
        }
        .blockback4 .block4:hover{
            border-color: lightskyblue;
            border-radius: 30px;
        }
        .img{
            width: 90px;
            height: 25vh;
            margin-top: -30px;
            object-fit: scale-down;
            background-size: cover;
        }
        .b1{
            color: Turquoise;
            font-size: 18px;
        }
        
        }





    </style>

</head>
<body>
    <header class="header1">
            <div class="navbar">
                <ul>
                <li><a href="main.php"><b> 🏠 Home</a></li>
                <li><a href="management.php"> 🌐 Management </b></a></li>
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
        <h2>Harvesting</h2>
        
    </div>
    <div class="data2">
            <div class="text">
            <div class="b1">
                <p>&emsp; &emsp; Post harvest technology is inter-disciplinary "Science and Technique" 
                    applied to agricultural produce after harvest for its protection, conservation, 
                    processing, packaging, distribution, marketing, and utilization to meet the food 
                    and nutritional requirements of the people in relation to their needs. 
                    Importance of Post-harvest technology lies in the fact that it has 
                    the capability to meet food requirement of growing population by eliminating losses 
                    making more nutritive food items.<br>
                    </p><br>
            </div>
            <br>
                <div class="tag1">
                    Horticulture Crops (Fruits and Vegetables)
                </div>

                <div class="blockback1">
                    <div class="block1">
                        <img src="img/apple.png" class="img"><br>
                        
                        <a href="update.php" class="btn"> Apple</a>
                    </div>
            
                    <div class="block1">
                        <img src="img/grapes.png" class="img"><br>
                        
                        <a href="Grapes.php" class="btn"> Grapes</a>
                    </div>
                </div>
                <div class="tag2">
                    Food Crops (Wheat, Maize, Rice etc.)
                </div>
                <div class="blockback2">
                    <div class="block2">
                        <img src="img/grain1.png" class="img"><br>
                        
                        <a href="Wheat.php" class="btn"> Wheat</a>
                    </div>
            
                    <div class="block2">
                        <img src="img/maize.png" class="img"><br>
                        
                        <a href="update.php" class="btn"> Maize</a>
                    </div>
                </div>
                <div class="tag3">
                    Cash Crops (Sugarcane, Tobacco, Cotton etc.)
                </div>
                <div class="blockback3">
                    <div class="block3">
                        <img src="img/coton.png" class="img"><br>
                        
                        <a href="Cotton.php" class="btn"> Cotton</a>
                    </div>
            
                    <div class="block3">
                        <img src="img/tobacco.png" class="img"><br>
                        
                        <a href="update.php" class="btn"> Tobacco</a>
                    </div>
                </div>
                <div class="tag4">
                    Plantation Crops (Coffee, Coconut, Tea etc.)
                </div>
                <div class="blockback4">
                    <div class="block4">
                        <img src="img/coffee.png" class="img"><br>
                        
                        <a href="update.php" class="btn"> Coffee</a>
                    </div>
            
                    <div class="block4">
                        <img src="img/coconut.png" class="img"><br>
                        
                        <a href="Coconut.php" class="btn"> Coconut</a>
                    </div>
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