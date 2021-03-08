<?php
//Step 1 - Establish connection
include('dbConn.php');

session_start();


if (!isset($_SESSION["student_login"])) {
  header("location:login.php");
}


$studentid = ($_SESSION['studentid']);
$otp_num =$_POST['otp_num'];



$sql = "SELECT * FROM attendance WHERE otp_num ='".$otp_num."' AND status ='active'";
$result = $db ->query($sql);

if ($result->num_rows > 0) {
  $row = mysqli_fetch_array($result);

  $class_id =$row['class_id'];

  if ($otp_num == $row['otp_num']){
      $sql2 = "INSERT into studentattendance(student_id, absent_or_present, class_id) VALUES ('".$studentid."','Present', '".$class_id."') ";
      $result2 = $db ->query($sql2);

      echo '<script>alert("Attendance successfully record")</script>';
      echo '<script>window.location = "takeattendance.php";</script>';
    }else{
      echo '<script>alert("Attendance already taken")</script>';
      echo '<script>window.location = "takeattendance.php";</script>';
    }

}else{
  echo '<script>alert("OTP No found!")</script>';
  echo '<script> window.location = "takeattendance.php";</script>';

}
?>
