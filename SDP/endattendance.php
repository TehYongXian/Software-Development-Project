<?php
//Step 1 - Establish connection
include('dbConn.php');

session_start();

if (!isset($_SESSION["lecturer_login"])) {
    header("location:login.php");
  }

 $lecturerid = $_SESSION['lecturerid'];
 $selectclass = $_SESSION['selectclass'];
 $date_class = $_SESSION['date_class'];
 $starttime = $_SESSION['starttime'];
 $duration = $_SESSION['duration'];
 $classtype = $_SESSION['classtype'];
 $otp_num= $_SESSION['otp_num'];




 $sql = 'UPDATE attendance SET status = "Finish" WHERE lecturer_id = "'.$lecturerid.'" AND selectclass = "'.$selectclass.'" AND otp_num ="'.$otp_num.'"' ;


if(mysqli_query($db, $sql)) {
   echo '<script>alert("Attendance successfully ended!")</script>';
  echo '<script>window.location = "lecturerwelcome.php";</script>';
} else {
 echo '<script>alert("Unable to end the attendance!")</script>';
 echo '<script>window.location = "viewotp.php";</script>';
}

  // Close connection
mysqli_close($db);
?>
