<?php
//Step 1 - Establish connection
include('dbConn.php');

session_start();

if (!isset($_SESSION["parent_login"])) {
    header("location:login.php");
  }

//Step 3
$sql = 'SELECT * FROM loginparent WHERE id ="'.$_SESSION["id"].'"';
$result = mysqli_query($db, $sql);

//Step 4
$rows = mysqli_fetch_assoc($result);



?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Manage Parent Profile Page</title>
	  <link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
	<div class="main">
	<h2>Manage Parent Profile</h2>
	<form methood = 'get' action = 'updateprofileparent.php'>
	<table>
		<tr>
			<td>ID</td>
			<td>: <input type ='text' name = 'id' value ='<?php echo $rows['id']?>' readonly /></td>
      <tr>
        <td>Parent ID</td>
        <td>: <input type ='text' name = 'parent_id' value ='<?php echo $rows['parent_id']?> 'readonly /></td>
      </tr>
		</tr>
			<tr>
			<td>Name</td>
			<td>: <input type ='name' name = 'name' value ='<?php echo $rows['name']?> 'readonly /></td>
		</tr>
    <tr>
    <td>Phone</td>
    <td>: <input type ='phone' name = 'phone' value ='<?php echo $rows['phone']?> 'required /></td>
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
  <a href="parentwelcome.php" >Back</a>
</div>

</form>
</body>
</html>
