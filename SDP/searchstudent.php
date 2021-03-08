<!DOCTYPE HTML>
<html>
    <head>
        <title>Search Student</title>
          <link rel="stylesheet" type="text/css" href="search.css">
    </head>
    <body><center>
      <br>
        <h2>Search Student</h2>
        <form>

          <input type = 'text' name = 'search_key' placeholder = 'Enter TP number'/>
          <input type = 'submit' value = 'Search'/>

        </form>
      <table border= 2 style= 'text-align: center; color: #fff'>
                    <tr bgcolor= 'eb4634'>
                    <th>Student id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Intake</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>

  <div class="back">
  <a href="searchaccount.html"> Back</a>
</div>

            <?php
            if(isset($_GET['search_key'])){
            //Step 2 - Handling connection error
            include('dbConn.php');



            //Step 3 - Execute SQL query
            $sql = 'SELECT * FROM loginstudent WHERE student_id LIKE "%'.$_GET['search_key'].'%"';
            $result = mysqli_query($db, $sql);



            //Step 4 - Process result
            if(mysqli_affected_rows($db)>0){



                for ($i = 0; $i < mysqli_num_rows($result); $i++){



                    $row = mysqli_fetch_assoc($result);
                    echo '<tr>';
                    echo '<td>'.$row['student_id'].'</td>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td>'.$row['intake'].'</td>';
                    echo '<td><a href = "editstudent.php?id='.$row['id'].'"><button>Edit</button></a></td>';
                    echo '<td><a href = "deletestudent.php?id='.$row['id'].'"><button>Delete</button></a></td>';

                }
            }
            else
                echo'<script>alert("No result found")</script>';

                mysqli_free_result($result);
                mysqli_close($db);
}
            ?>

        </table>
    </center></body>
</html>
