<?php
//Step 1 - Establish connection
include('dbConn.php');

session_start();



if (!isset($_SESSION["student_login"])) {
    header("location:login.php");
  }


$studentid = ($_SESSION['studentid']);


?>

<!DOCTYPE html>
<html>
<head>
  <title>Take attendance</title>
  <link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
  <div class ="main">
    <h2>Take attendance</h2>
    <form action="insertattendance.php" method="POST">
      <tr>
        <td>Enter OTP:</td>
        <td><input type ='text' id="otp_num" name = 'otp_num' required /></td></tr>
        <div class="form-group" align="center">
          <input type="submit" value="Submit">
        </div>

      </form>

      <div class="back_link">
        <a href="studentwelcome.php" >Back</a>
      </div>

    </body>
    </html>
