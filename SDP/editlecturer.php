<?php
//Step 1 - Establish connection
include('dbConn.php');

//Step 3
$sql = 'SELECT * FROM loginlecturer WHERE id = '.$_GET['id'];
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
	<title>Edit Lecturer Profile</title>
	  <link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
	<div class="main">
	<h2>Edit Lecturer details</h2>
	<form methood = 'get' action = 'updatelecturer.php'>
	<table>
		<tr>
			<td>ID</td>
			<td>: <input type ='text' name = 'id' value = <?php echo $rows['id']?> readonly /></td>
      <tr>
        <td>Student ID</td>
        <td>: <input type ='text' name = 'lecturer_id' value = <?php echo $rows['lecturer_id']?> readonly /></td>
      </tr>
		</tr>
			<tr>
			<td>Name</td>
			<td>: <input type ='name' name = 'name' value = <?php echo $rows['name']?> required /></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>: <input type = 'email' name = 'email' value = <?php echo $rows['email']?> required = 'required'/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>: <input type = 'password' name = 'password' value = <?php echo $rows['password']?> required = 'required'/></td>
		</tr>
      <tr>
      <td> <label>Department</label></td>
      <td><select name="department" Required>
      <option value="" selected = "selected">Select department</option>
      <option value="School in software engineering">School in software engineering</option>
      <option value="School in engineering">School in engineering</option>
      <option value="School in business">School in business</option>
    </select></td></tr>
		</table>
    <div class="form-group" align="center" >
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-primary" value="Reset">
    </div>

  <div class="back_link">
  <a href="searchlecturer.php" >Back</a>
</div>

</form>
</body>
</html>
