<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["student_login"])) {
    header("location:login.php");
  }


$name=($_SESSION['name']);
$studentid=($_SESSION['studentid']);

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
        <h1>Welcome back!! <b><?php echo $name; echo ' , '; echo $studentid ?></b>.</h1>
    </div>
    <p>
      <nav>
      <ul>
        <li><a href="#">Manage Profile</a></li>
          <li><a href="#">Attendance</a></li>
            <li><a href="#.php">Timetable</a></li>
      <li><a href="feedback.php">Feedback</a></li>
          <li><a href="logout2.php">Log out</a></li>

        </ul>
      </nav>
    </p>
</body>
</html>
