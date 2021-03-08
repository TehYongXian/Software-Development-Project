<?php
//Step 1 - Establish connection
include('dbConn.php');

session_start();

if (!isset($_SESSION["admin_login"])) {
    header("location:login.php");
  }

//Step 3
$sql = 'SELECT * FROM loginadmin WHERE id ="'.$_SESSION["id"].'"';
$result = mysqli_query($db, $sql);

//Step 4
$rows = mysqli_fetch_assoc($result);



?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Manage Admin Profile Page</title>
	  <link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
	<div class="main">
	<h2>Manage Admin Profile</h2>
	<form methood = 'get' action = 'updateprofileadmin.php'>
	<table>
		<tr>
			<td>ID</td>
			<td>: <input type ='text' name = 'id' value ='<?php echo $rows['id']?>' readonly /></td>
      <tr>
        <td>Admin ID</td>
        <td>: <input type ='text' name = 'admin_id' value ='<?php echo $rows['admin_id']?> 'readonly /></td>
      </tr>
		</tr>
			<tr>
			<td>Name</td>
			<td>: <input type ='name' name = 'name' value ='<?php echo $rows['name']?> 'readonly /></td>
		</tr>
		<tr>
			<td>Password</td>
			   <td>: <input type = 'password' name = 'password' value ='<?php echo $rows['password']?> ' required = 'required'/></td>
		</tr>
    <tr>
		</table>
    <div class="form-group" align="center" >
        <input type="submit" class="btn btn-primary" value="Submit">

    </div>

  <div class="back_link">
  <a href="adminwelcome.php" >Back</a>
</div>

</form>
</body>
</html>
