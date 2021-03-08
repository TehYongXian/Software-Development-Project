<?php
//Step 1 - Establish connection
//Step 2 -Handling connection error
include('dbConn.php');

//step 3 - execute sql query
$sql ='DELETE FROM loginparent WHERE id = '.$_GET['id'];
$result = mysqli_query($db, $sql);

if(mysqli_query($db, $sql))
	echo '<script>alert("Data Successfully Deleted!");</script>';
else
   echo '<script>alert("Unable to delete data");</script>';


//Step 4 - Process Result
//Step 5 - Close connection

echo'<script>window.location.href="searchparent.php";</script>';
?>
