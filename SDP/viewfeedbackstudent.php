<html>
<head>
  <title>View Feedback</title>
</head>
<h2>View Feedback </h2>
<body>
  <table border="1">
    <tr>
      <th>Student_id</th>
      <th>Issues</th>
      <th>Opinion</th>
      <th>Feedback</th>
    </tr>

    <?php
    include "dbConn.php"; // Using database connection file here

    session_start();
    $studentid = ($_SESSION["studentid"]);

    $stylequery="SELECT * FROM feedback where student_id ='".$studentid."'";

    $styleresult= mysqli_query($db,$stylequery);

    $max = mysqli_num_rows($styleresult);

    for($i=0;$i<$max;$i++)
    {
      $row = mysqli_fetch_array($styleresult);
      echo "<tr>

      <td style='width: 49px; height: 24px; text-align: center'>
      ".$row['student_id']."
      </td>
      <td style='width: 61px; height: 24px'>".$row['Issues']."
      </td>
      <td style='width: 61px; height: 24px'>".$row['Opinion']."
      </td>
      <td style='width: 61px; height: 24px'>".$row['reply']."
      </td>

      </tr>
      ";

    }
    ?>

  </table>
  <div class="back_link">
    <a href="studentwelcome.php" >Back</a>
  </div>

</body>
</html>
