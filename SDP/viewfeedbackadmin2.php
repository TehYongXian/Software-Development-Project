<html>
<head>
  <title>View Lecturer Feedback</title>
</head>
<h2>View Lecturer Feedback </h2>
<body>
  <table border="1">
    <tr>
      <th>Lecturer_id</th>
      <th>Issues</th>
      <th>Opinion</th>
      <th>Reply</th>
      <th>Feedback</th>
    </tr>

    <?php
    include "dbConn.php"; // Using database connection file here

    session_start();


    $stylequery="SELECT * FROM feedback2";

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
      <td style='width: 61px; height: 24px'><a href='reply2.php?id=".$row['id']."'</a><button>Reply</button>
      </td>
      <td style='width: 61px; height: 24px'>".$row['reply']."
      </td>

      </tr>
      ";

    }
    ?>

  </table>
  <div class="back_link">
    <a href="viewfeedbackall.html" >Back</a>
  </div>

</body>
</html>
