<?php
//Step 1 - Establish connection
include('dbConn.php');

session_start();



if (!isset($_SESSION["lecturer_login"])) {
    header("location:login.php");
  }

  $otp_num = $_SESSION['otp_num'] ;
?>


<!DOCTYPE html>
<html>
<head>
  <title>View OTP Page</title>
  <link rel="stylesheet" type="text/css" href="otp.css">
</head>
<body>
  <div class ="main">

    <h2>View OTP Number</h2>
<form>
    <tr>
      <td>Otp Number:</td>
 <td><input type ='text' name = 'otp_num' value ='<?php echo $otp_num ?>' readonly /></td></tr>
    </form>
    <br>
  <div class="form-group" align="center" >
  	<a href='endattendance.php'><button class = "otpbtn" >Finish</button></a>
<br><br>
</div>
  </body>
  </html>
