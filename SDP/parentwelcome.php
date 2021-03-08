<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["parent_login"])) {
    header("location:login.php");
  }
  $name=($_SESSION['name']);
  $parentid=($_SESSION['parentid']);

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
          <h1>Weclome back!! <b><?php echo $name; echo ' , '; echo $parentid ?></b>.</h1>
      </div>
      <p>
        <nav>
        <ul>
          <li><a href="manageprofileparent.php">Manage Profile</a></li>
            <li><a href="#">View Student Attendance</a></li>
              <li><a href="viewlecturerdetails1.php">View Lecturer</a></li>
                  <li><a href="feedbackparent.php">Feedback</a></li>
                      <li><a href="viewfeedbackparent.php">View Feedback</a></li>
            <li><a href="logout2.php">Log out</a></li>

          </ul>
        </nav>
      </p>
  </body>
  </html>
