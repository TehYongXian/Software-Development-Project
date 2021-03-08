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


 if ($otp_num == $row['otp_num']){
   $sql2 = "INSERT into studentattendance(student_id, absent_or_present) VALUES ('".$studentid."','Present') ";
   $result2 = $db ->query($sql2);
 }


	if(mysqli_affected_rows($db)== 0){
   echo 'alert("Please try again");';
    echo '<script> window.location = "takeattendance.php";</script>';
  }else{

      echo '<script>alert("Attendance successfully record")</script>';
      echo '<script>window.location = "takeattendance.php";</script>';
}
}

?>
