<!DOCTYPE html>
<html>
<head>
  <title>Lecturer Feedback</title>
  <link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
  <div class ="main">
    <h2>Lecturer Feedback</h2>
    <form action="insert2.php" method="POST">
      Issues :<br><br>
      <select name="Issues" Required>
        <option value="" selected = "selected">Select one common issue</option>
        <option value="Password cannot be updated">Password cannot be updated</option>
        <option value="Timetable cannot create">Timetable cannot create</option>
        <option value="Name is wrong">Name is wrong</option>
          <option value="Department is wrong">Department is wrong</option>
      </select>
      <br><br>
      Opinion :<br><br><input type="text"size="30" maxlength="100" name="Opinion" placeholder="Enter your Opinion" Required>
      <br><br>
      <div class="form-group" align="center">
        <input type="submit" value="Submit">
      </div>
    </form>

    <div class="back_link">
      <a href="lecturerwelcome.php" >Back</a>
    </div>

  </body>
  </html>
