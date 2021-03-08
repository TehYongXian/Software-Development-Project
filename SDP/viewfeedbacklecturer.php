<html>
<head>
  <title>View Feedback</title>
</head>
<h2>View Feedback </h2>
<body>
  <table border="1">
    <tr>
      <th>Lecturer_id</th>
      <th>Issues</th>
      <th>Opinion</th>
      <th>Feedback</th>
    </tr>

    <?php
    include "dbConn.php"; // Using database connection file here

    session_start();
    $lecturerid = ($_SESSION["lecturerid"]);

    $stylequery="SELECT * FROM feedback2 where lecturer_id ='".$lecturerid."'";

    $styleresult= mysqli_query($db,$stylequery);

    $max = mysqli_num_rows($styleresult);

    for($i=0;$i<$max;$i++)
    {
      $row = mysqli_fetch_array($styleresult);
      echo "<tr>

      <td style='width: 49px; height: 24px; text-align: center'>
      ".$row['lecturer_id']."
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
    <a href="lecturerwelcome.php" >Back</a>
  </div>

</body>
</html>
