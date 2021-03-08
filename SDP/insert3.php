<?php
include "dbConn.php"; // Using database connection file here

session_start();
$lecturerid = ($_SESSION["lecturerid"]);


$selectclass = $_POST['selectclass'];
$date_class = $_POST['date_class'];
$starttime = $_POST['starttime'];
$duration = $_POST['duration'];
$classtype = $_POST['classtype'];
$otp_num = $_POST['otp_num'];

  $_SESSION['selectclass']= $selectclass;
  $_SESSION['date_class'] = $date_class;
  $_SESSION['starttime'] = $starttime;
  $_SESSION['duration'] = $duration;
 $_SESSION['classtype']= $classtype;
   $_SESSION['otp_num'] = $otp_num;


$sql = "INSERT INTO attendance(lecturer_id, selectclass, date_class, starttime, duration, classtype, otp_num, status) VALUES ( ? , ?, ?, ?, ?, ?, ? , 'active')";

if($stmt = mysqli_prepare($db, $sql)){
  // Bind variables to the prepared statement as parameters
  mysqli_stmt_bind_param($stmt, "sssssss", $param_lecturerid, $param_selectclass, $param_date_class, $param_starttime, $param_duration, $param_classtype, $param_otp_num);

  // Set parameters
  $param_lecturerid = $lecturerid;
  $param_selectclass=$selectclass;
  $param_date_class=$date_class;
  $param_starttime=$starttime;
  $param_duration=$duration;
  $param_classtype=$classtype;
  $param_otp_num=$otp_num;
  // Attempt to execute the prepared statement
  if(mysqli_stmt_execute($stmt)){

   header("location: viewotp.php ");
  } else{
    echo "Something went wrong. Please try again later.";
  }

  // Close statement
  mysqli_stmt_close($stmt);
}
// Close connection
mysqli_close($db);

?>
