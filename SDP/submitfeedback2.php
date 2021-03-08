<?php

include('dbConn.php');


$sql = 'UPDATE feedback2  SET  reply= "'.$_POST['reply'].'" WHERE id = "'.$_POST['id'].'"';

if(mysqli_query($db, $sql)){
	echo '<script>alert("Successfully UPDATED")</script>';
}else{
	echo '<script>alert("CANNOT update data")</script>';
}
  echo '<script>window.location.href="viewfeedbackadmin2.php"</script>';

?>
