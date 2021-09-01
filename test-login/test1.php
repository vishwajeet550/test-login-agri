<?php

    session_start();
    
    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["login"]) && $_SESSION["login"] === true){
        header("location: management.php");
        exit;
    }
?>
<?php

function sendSMS($senderID, $recipient_no, $message){
    // // Request parameters array
    // $requestParams = array(
    //     'user' => 'codexworld',
    //     'apiKey' => 'dssf645fddfgh565',
    //     'senderID' => $senderID,
    //     'recipient_no' => $recipient_no,
    //     'message' => $message
    // );
    
    // // Merge API url and parameters
    // $apiUrl = "http://api.example.com/http/sendsms?";
    // foreach($requestParams as $key => $val){
    //     $apiUrl .= $key.'='.urlencode($val).'&';
    // }
    // $apiUrl = rtrim($apiUrl, "&");
    
    // // API call
    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $apiUrl);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
    // $response = curl_exec($ch);
    // curl_close($ch);
    
    // // Return curl response
    // return $response;

    $id="ACe62c4fee1d34c21f0a0ccce4881aa528";
    $token="547f2db4d7fe01b5ba21be960bb40cfc";
    $url = "https://api.twilio.com/2010-04-01/Accounts/".$id."/SMS/Messages";
    $data = array (
        'From' => '+18508764216',
        'To' => $recipient_no,
        'Body' => $message,
    );
    $post = http_build_query($data);
    $x = curl_init($url );
    curl_setopt($x, CURLOPT_POST, true);
    curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
    curl_setopt($x, CURLOPT_POSTFIELDS, $post);
    $response = curl_exec($x);
    curl_close($x);
    return $response;
}

// Load and initialize database class
require_once 'DB.class.php';
$db = new DB();
        
$statusMsg = $receipient_no = '';
$otpDisplay = $verified = 0;

// If mobile number submitted by the user
if(isset($_POST['submit_mobile'])){
    if(!empty($_POST['mobile_no'])){
        // Recipient mobile number
        $recipient_no = $_POST['mobile_no'];
        
        // Generate random verification code
        $rand_no = rand(10000, 99999);
        
        // Check previous entry
        $conditions = array(
            'mobile_number' => $recipient_no,
        );
        $checkPrev = $db->checkRow($conditions);
        
        // Insert or update otp in the database
        if($checkPrev){
            $otpData = array(
                'verification_code' => $rand_no
            );
            $insert = $db->update($otpData, $conditions);
        }else{
            $otpData = array(
                'mobile_number' => $recipient_no,
                'verification_code' => $rand_no,
                'verified' => 0
            );
            $insert = $db->insert($otpData);
        }
        
        if($insert){
            $newL="\n";
            // Send otp to user via SMS
            $message = 'OTP'.$newL.$newL.'Dear User,'.$newL.'OTP for Post Harvest Management identity verification is '.$rand_no.'.'.$newL.'Do Not Share!'.$newL.$newL.'Thanks,'.$newL.' Amazon.com, Inc.';
            // 'Dear User, OTP for mobile number verification is '.$rand_no.'. Thanks, Amazon.in';
            $send = sendSMS('CODEXW', $recipient_no, $message);
            
            if($send){
                $otpDisplay = 1;
            }else{
                $statusMsg = array(
                    'status' => 'error',
                    'msg' => "We're facing some issue on sending SMS, please try again."
                );
            }
        }else{
            $statusMsg = array(
                'status' => 'error',
                'msg' => 'Some problem occurred, please try again.'
            );
        }
    }else{
        $statusMsg = array(
            'status' => 'error',
            'msg' => 'Please enter your mobile number.'
        );
    }
    
// If verification code submitted by the user
}elseif(isset($_POST['submit_otp'])) {
    $otpDisplay = 1;
    
    if(!empty($_POST['otp_code'])){
        $recipient_no = $_POST['mobile_no'];
        $otp_code = $_POST['otp_code'];
        
        // Verify otp code
        $conditions = array(
            'mobile_number' => $recipient_no,
            'verification_code' => $otp_code
        );
        $check = $db->checkRow($conditions);
        
        if($check){
            $otpData = array(
            // $otpData = array(
                'verified' => 1
            );
            $update = $db->update($otpData, $conditions);
            
            $statusMsg = array(
                'status' => 'success',
                'msg' => 'Thank you! Your phone number has been verified.'
            );
            
            $verified = 1;
        }else{
            $statusMsg = array(
                'status' => 'error',
                'msg' => 'Verification code incorrect, please try again.'
            );
        }
    }else{
        $statusMsg = array(
            'status' => 'error',
            'msg' => 'Please enter the verification code.'
        );
    }
}
?>  

<!DOCTYPE html>
<html lang="en-US">
<head>
<title> Verification | Post Harvest Management</title>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

<style>
.success{font-size:16px;color:#3BA956}
.error{font-size:16px;color:#E44439}
    @media screen 
    and (min-width: 1281px)
    and (max-device-width: 1600px)
    and (-webkit-min-device-pixel-ratio: 1) 
    {
    *{
    padding: 0;
    margin: 0;
    /* font-family: sans-serif; */
    font-size: 30px;
    }
    .backnew{
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        opacity: 0.7;
    }
    .wrapper{
        border: 4px solid green;
        border-radius: 10px;
        position: absolute;
        align-items: center;
        left: 55%;
        top: 15%;
        width: 400px;
        height: 60vh;
        padding: 20px 20px;
        background-color: lightgreen;
    }
    .end{
        position: absolute;
        top: 100.5%;
        width: 100%;
        height: 30vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
    }
    @media screen and (min-width: 100px) and (max-width: 1024px) 
    and (min-device-height: 500px) and (max-device-height: 1666px)  
    and (orientation: portrait) 
        {
        *{
        padding: 0;
        margin: 0;
        /* font-family: sans-serif; */
        font-size: 43px;
        }
        .backnew{
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        opacity: 0.7;
        }
        .wrapper{
            border: 0.5px solid white;
            border-radius: 10px;
            position: absolute;
            align-items: center;
            left: 30%;
            top: 18%;
            width: 60%;
            height: 20vh;
            padding: 20px 20px;
            background-color: lightgreen;
            color: black;
            font-weight: bold;
            font-size: 20px;

        }
        .end{
        position: absolute;
        top: 100.5%;
        width: 100%;
        height: 35vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        }
    @media (min-width: 540px) and (max-width: 1024px) and (min-device-height: 260px) 
    and (max-device-height: 511px)  and (orientation: landscape) 
    {
        *{
        padding: 0;
        margin: 0;
        /* font-family: sans-serif; */
        font-size: 18px;
        }
        .backnew{
            width: 100%;
            height: 150vh;
            background-size: cover;
            background-position: center;
            opacity: 0.7;
        }
        .wrapper{
            border: 1px solid green;
            border-radius: 10px;
            position: absolute;
            align-items: center;
            display: block;
            left: 45%;
            top: 5%;
            width: 330px;
            height: 105vh;
            text-align: center;
            padding: 2px;
            background-color: lightgreen;
        }
        .end{
        position: absolute;
        top: 150%;
        width: 100%;
        height: 55vh;
        background-color: black;
        color: white;
        text-align: center;
        text-decoration: none;
        }
        }
</style>
</head>
<body>
    <img src="img/far11.jpg" class="backnew">
    <div class="container">
        <div class="wrapper">
            <h2>SMS OTP</h2>
            <div class="otp-frm">
                <!-- Display status message -->
                <?php echo !empty($statusMsg)?'<p class="'.$statusMsg['status'].'">'.$statusMsg['msg'].'</p>':''; ?>

                <?php if($verified == 1){ ?>
                        <?php
                            // session_start();
        
                            // Store data in session variables
                            $_SESSION["login"] = true;
                            $_SESSION["id"] = $id;
                                        
                            // Redirect user to welcome page
                            header("location: management.php");
                        ?>

                <?php }else{ ?>
                
                <!-- OTP Verification form -->
                <form method="post">
                    <label>Enter Your Mobile No</label><br>
                    <br>
                    <input type="text" name="mobile_no" value="<?php echo !empty($recipient_no)?$recipient_no:''; ?>" <?php echo ($otpDisplay == 1)?'readonly':''; ?>/><br>
                    <br>
                    <?php if($otpDisplay == 1){ ?>
                        
                    <label>Enter OTP</label><br>
                    <br>
                    <input type="text" name="otp_code"/><br>
                    <br>
                    <a href="javascript:void(0);" class="resend">Resend OTP</a><br>
                    <br>
                    <?php } ?>
                    <input type="submit" name="<?php echo ($otpDisplay == 1)?'submit_otp':'submit_mobile'; ?>" value="VERIFY"/>
                </form>
                <?php } ?>
            </div>
        </div>
        <div class="end">
        <br>
        <img style="height:85px;width:100px; border-radius: 10px;" src="img/aws.png" alt="Brillect Tech Solutions Pvt. Ltd.">
        </p>
        <p><a style="color:white; text-decoration: none;" href="https://www.amazon.com/gp/navigation-country/select-country">© 1996-2021, Amazon.com, Inc. or its affiliates </a></p>
        <br>
        <p style="color:rgb(132, 200, 255);font-size:14px; text-decoration:none;">Contact &#8644; <a style="font-size:16px; color:rgb(132, 200, 255);" href="mailto: vishwajeetkadam14@gmail.com">Vishwajeet Kadam</a></p>
        </div>
    </div>


</body>
</html>