<?php
include './shared/headindex.php';
include './shared/navindex.php';

$curl = curl_init();
$body = "";
$phone = "";
if (isset($_POST['btn'])){
  $fname = $_POST['fname'];
  $phone = $_POST['phone'];
  $body = $_POST['message'];

  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.ultramsg.com/instance27434/messages/chat",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "token=u8sspt24ukqatzja&to=+20$phone&body=$body&priority=10&referenceId=",
    CURLOPT_HTTPHEADER => array(
      "content-type: application/x-www-form-urlencoded"
    ),
  ));
}
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);

//   if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
</head>
<body class="ss" style=" background-color: hsl(30, 38%, 92%);">
<div class=" ">
    <div class="   ">
      <br><br><br><br>
      <br><br>
      <br>
      <div class="container1 ss">
        <div class="imagebig">
          <img src="./Imgs/call-center-agent-wearing-protective-face-mask-while-using-computer-working-office-during-virus-epidemic.jpg" alt="" />
        </div>

        <form class="form1" method="POST">
          <div class="name1">
            <label for="">Full Name</label><input name="fname" required minlength="3" maxlength="11" class="input1" type="text" placeholder="Enter your Full name"> <br />
          </div>

          <div class="pass1">
            <label for="">Mobile</label><input name="phone" class="input1" required minlength="10" maxlength="10" type="text" placeholder="Enter your Mobile"> <br />
          </div>
          <div class="pass1">
            <label>Message</label><br><input name="message" class="input1" type="text" placeholder="Message"> <br />
          </div>
          <input type="submit" name="btn" class="btnw" value="SEND">
        </form>
      </div>
    </div>
    </div>
</body>
</html>