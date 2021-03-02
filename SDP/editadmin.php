<?php
//Step 1 - Establish connection
include('dbConn.php');

//Step 3
$sql = 'SELECT * FROM loginadmin WHERE id = '.$_GET['id'];
$result = mysqli_query($db, $sql);

//Step 4
$rows = mysqli_fetch_assoc($result);

//Step 5
mysqli_free_result($result);
mysqli_close($db);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Edit Admin Profile</title>
	  <link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
	<div class="main">
	<h2>Edit Admin details</h2>
	<form methood = 'get' action = 'updateadmin.php'>
	<table>
		<tr>
			<td>ID</td>
			<td>: <input type ='text' name = 'id' value = <?php echo $rows['id']?> readonly /></td>
      <tr>
        <td>Admin ID</td>
        <td>: <input type ='text' name = 'admin_id' value = <?php echo $rows['admin_id']?> readonly /></td>
      </tr>
		</tr>
			<tr>
			<td>Name</td>
			<td>: <input type ='name' name = 'name' value = <?php echo $rows['name']?> required /></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type = 'password' name = 'password' value = <?php echo $rows['password']?> required = 'required'/></td>
		</tr>
		</table>
    <div class="form-group" align="center" >
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-primary" value="Reset">
    </div>

  <div class="back_link">
  <a href="searchadmin.php" >Back</a>
</div>

</form>
</body>
</html>
