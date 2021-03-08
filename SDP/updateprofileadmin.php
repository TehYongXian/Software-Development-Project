<?php
include('dbConn.php');
//value inside quotation

$sql = 'UPDATE loginadmin SET password = "'.$_GET['password'].'" WHERE id = "'.$_GET['id'].'"';

if(mysqli_query($db, $sql))
	echo '<script>alert("Successfully UPDATED")</script>';
else
	echo '<script>alert("CANNOT update data")</script>';

mysqli_close($db);

echo '<script>window.location.href="manageprofileadmin.php"</script>';
?>
