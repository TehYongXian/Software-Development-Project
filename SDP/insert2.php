<?php
include "dbConn.php"; // Using database connection file here

session_start();
$lecturerid = ($_SESSION["lecturerid"]);



  $Issues = $_POST['Issues'];
  $Opinion = $_POST['Opinion'];

  $sql = "INSERT INTO feedback2(lecturer_id, Issues, Opinion) VALUES ( ? , ? , ? )";

  if($stmt = mysqli_prepare($db, $sql)){
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sss", $param_lecturerid, $param_Issues, $param_Opinion);

      // Set parameters
      $param_lecturerid = $lecturerid;
      $param_Issues=$Issues;
      $param_Opinion=$Opinion;



      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt)){

          header("location: feedbacklecturer.php");
      } else{
          echo "Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
  }
// Close connection
mysqli_close($db);

?>
