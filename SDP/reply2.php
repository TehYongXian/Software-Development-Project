<html>
<head>
  <title>Reply Lecturer Feedback Page</title>
  <link rel="stylesheet" type="text/css" href="addall.css">
</head>

<body>
  <div class="main">
    <h2>Reply Lecturer Feedback</h2>
    <form action="submitfeedback2.php" method="POST">
      <table>

        <input type="hidden" name="id" value='<?php echo $_GET["id"]?>'required>

        <tr>
          <td><label>Reply:</label></td>
          <td><textarea name= "reply" rows="3" cols="30"></textarea></td>


        </tr>
      </table>
      <div class="form-group" align="center" >
        <input type="submit" class="btn btn-primary" value="Submit">
      </div>

      <div class="back_link">
        <a href="viewfeedbackadmin2.php" >Back</a>
      </div>


    </form>
  </div>
</body>
</html>
