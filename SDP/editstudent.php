<?php
//Step 1 - Establish connection
include('dbConn.php');

//Step 3
$sql = 'SELECT * FROM loginstudent WHERE id = '.$_GET['id'];
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
	<title>Edit Student Profile</title>
	  <link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
	<div class="main">
	<h2>Edit Student details</h2>
	<form methood = 'get' action = 'updatestudent.php'>
	<table>
		<tr>
			<td>ID</td>
			<td>: <input type ='text' name = 'id' value = <?php echo $rows['id']?> readonly /></td>
      <tr>
        <td>Student ID</td>
        <td>: <input type ='text' name = 'student_id' value = <?php echo $rows['student_id']?> readonly /></td>
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
    <td> <label>Intake</label></td>
    <td><select name="intake" Required>
    <option value="" selected = "selected">Select intake</option>
    <option value="UCDF1905ICT(SE)">UCDF1905ICT(SE)</option>
    <option value="UCDF1905ICT(ITR)">UCDF1905ICT(ITR)</option>
    <option value="UCDF1905ICT(DI)">UCDF1905ICT(DI)</option>
  </select></td></tr>
		</table>
    <div class="form-group" align="center" >
        <input type="submit" class="btn btn-primary" value="Submit">
        <input type="reset" class="btn btn-primary" value="Reset">
    </div>

  <div class="back_link">
  <a href="searchstudent.php" >Back</a>
</div>

</form>
</body>
</html>
