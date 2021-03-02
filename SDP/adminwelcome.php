<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["admin_login"])) {
    header("location:login.php");
  }



$adminid=($_SESSION['adminid']);

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
        <h1>Welcome back!! <b><?php echo $adminid ?></b>.</h1>
    </div>
    <p>
      <nav>
      <ul>
        <li><a href="#">Manage profile</a></li>
          <li><a href="manageaccount.html">Manage account</a></li>
            <li><a href="#">View Feedback</a></li>
      <li><a href="#">View Attendance report</a></li>
          <li><a href="logout2.php">Log out</a></li>

        </ul>
      </nav>
    </p>
</body>
</html>
