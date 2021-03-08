<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["lecturer_login"])) {
    header("location:login.php");
  }


$name=($_SESSION['name']);
$lecturerid=($_SESSION['lecturerid']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
  <link rel="stylesheet" type="text/css" href="#">
</head>
<body>
    <div class="main">
        <h1>Welcome back!! <b><?php echo $name; echo ' , '; echo $lecturerid ?></b>.</h1>
    </div>
    <p>
      <nav>
      <ul>
        <li><a href="manageprofilelecturer.php">Manage Profile</a></li>
            <li><a href="createattendance.php">Create attendance</a></li>
        <li><a href="#">Edit attendance</a></li>
          <li><a href="feedbacklecturer.php">Feedback</a></li>
            <li><a href="viewfeedbacklecturer.php">View Feedback</a></li>
          <li><a href="logout2.php">Log out</a></li>

        </ul>
      </nav>
    </p>
</body>
</html>
