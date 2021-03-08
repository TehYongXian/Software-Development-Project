<?php
include('dbConn.php');
//value inside quotation

$sql = 'UPDATE loginlecturer SET  lecturer_id= "'.$_GET['lecturer_id'].'", name = "'.$_GET['name'].'", email = "'.$_GET['email'].'", password = "'.$_GET['password'].'",  department = "'.$_GET['department'].'" WHERE id = '.$_GET['id'];

if(mysqli_query($db, $sql))
	echo '<script>alert("Successfully UPDATED")</script>';
else
	echo '<script>alert("CANNOT update data")</script>';

mysqli_close($db);

echo '<script>window.location.href="searchlecturer.php"</script>';
?>
