<?php
//Step 1 - Establish connection
include('dbConn.php');

session_start();


if (!isset($_SESSION["lecturer_login"])) {
    header("location:login.php");
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mark New Attendance Page</title>
<link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
    <div class="main">
        <h2>Mark New Attendance</h2>
        <form action="insert3.php" method="POST" onsubmit="generateotp()">
          <table>
            <tr>
              <td>Class code:</td>
              <td> <input type ='text' name = 'selectclass' value ='<?php echo $_POST['selectclass'] ?> 'readonly /></td>
            </tr>

            <tr>
              <td><label>Date:</label></td>
                <td><input type="date" id="actualDate" name="date_class"
                  $( "selector" ).datepicker({altField : "#actualDate"altFormat: "yyyy-mm-dd"});></td></tr>

                <tr>
                <td><label>Start time:</label></td>
                <td><select name="starttime" Required>
                <option value="" selected = "selected">Select one of time</option>
                <option value="8:30am">8:30am</option>
                <option value="10:30am">10:45am</option>
                <option value="13:30pm">13:30pm</option>
                <option value="14:00pm">14:00pm</option>
                <option value="14:30pm">14:30pm</option>
                <option value="16:00pm">16:00pm</option>
                <option value="16:15pm">16:15pm</option>
              </select></td></tr>

              <tr>
              <td><label>Duration:</label></td>
              <td><select name="duration" Required>
              <option value="" selected = "selected">Select one Duration</option>
              <option value="1hours">1hours</option>
              <option value="1hours30min">1hours30min</option>
              <option value="2hours">2hours</option>
              <option value="2hours5min">2hours5min</option>
              <option value="2hours10min">2hours10min</option>
              <option value="2hours15min">2hours15min</option>
            </select></td></tr>

              <tr>
              <td> <label>Class Type:</label></td>
              <td><select name="classtype" Required>
              <option value="" selected = "selected">Select one Class Type</option>
              <option value="Tutorial">Tutorial</option>
              <option value="Lecturer">Lecturer</option>
              <option value="Lab">Lab</option>
              </select></td></tr>



          		<input type="hidden" name="otp_num" id="otp_num" required />




</table>
            <div class="form-group" align="center" >
                <input type="submit" class="btn btn-primary" value="Submit">

            </div>
            <div class="back_link">
            <a href="createattendance.php" >Back</a>
          </div>

          <script>
          function generateotp() {
            var x = Math.floor((Math.random() * 999) + 100);
            document.getElementById("otp_num").value = x;
          }
        </script>

        </form>
    </div>
</body>
</html>
