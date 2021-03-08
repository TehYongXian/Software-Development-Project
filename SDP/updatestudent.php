<?php
include('dbConn.php');
//value inside quotation

$sql = 'UPDATE loginstudent SET  student_id= "'.$_GET['student_id'].'", name = "'.$_GET['name'].'", email = "'.$_GET['email'].'", password = "'.$_GET['password'].'",  intake = "'.$_GET['intake'].'" WHERE id = '.$_GET['id'];

if(mysqli_query($db, $sql))
	echo '<script>alert("Successfully UPDATED")</script>';
else
	echo '<script>alert("CANNOT update data")</script>';

mysqli_close($db);

echo '<script>window.location.href="searchstudent.php"</script>';
?>
