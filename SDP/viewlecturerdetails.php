<html>
<head>
  <title>View Lecturer details page</title>
</head>
<h2>View Lecturer Details </h2>
<body>
  <table border="1">
    <tr>
      <th>Lecturer_id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Department</th>
    </tr>

    <?php
    include "dbConn.php"; // Using database connection file here

    session_start();


    $stylequery="SELECT * FROM loginlecturer";

    $styleresult= mysqli_query($db,$stylequery);

    $max = mysqli_num_rows($styleresult);

    for($i=0;$i<$max;$i++)
    {
      $row = mysqli_fetch_array($styleresult);
      echo "<tr>

      <td style='width: 49px; height: 24px; text-align: center'>
      ".$row['lecturer_id']."
      </td>
      <td style='width: 61px; height: 24px'>".$row['name']."
      </td>
      <td style='width: 61px; height: 24px'>".$row['email']."
      </td>
      <td style='width: 61px; height: 24px'>".$row['department']."
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
