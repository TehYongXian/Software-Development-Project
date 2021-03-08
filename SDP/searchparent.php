<!DOCTYPE HTML>
<html>
    <head>
        <title>Search Parent</title>
          <link rel="stylesheet" type="text/css" href="search.css">
    </head>
    <body><center>
      <br>
        <h2>Search Parent</h2>
        <form>

          <input type = 'text' name = 'search_key' placeholder = 'Enter PT number'/>
          <input type = 'submit' value = 'Search'/>

        </form>
      <table border= 2 style= 'text-align: center; color: #fff'>
                    <tr bgcolor= 'eb4634'>
                    <th>Parent id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Password</th>
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
            $sql = 'SELECT * FROM loginparent WHERE parent_id LIKE "%'.$_GET['search_key'].'%"';
            $result = mysqli_query($db, $sql);



            //Step 4 - Process result
            if(mysqli_affected_rows($db)>0){



                for ($i = 0; $i < mysqli_num_rows($result); $i++){



                    $row = mysqli_fetch_assoc($result);
                    echo '<tr>';
                    echo '<td>'.$row['parent_id'].'</td>';
                    echo '<td>'.$row['name'].'</td>';
                    echo '<td>'.$row['phone'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td><a href = "editparent.php?id='.$row['id'].'"><button>Edit</button></a></td>';
                    echo '<td><a href = "deleteparent.php?id='.$row['id'].'"><button>Delete</button></a></td>';

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
