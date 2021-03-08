<?php
// Include config file
require_once "dbConn.php";

// Define variables and initialize with empty values
$lecturerid = $name= $email= $password= $department= "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


              $lecturerid = trim($_POST["lecturerid"]);
              $name = trim($_POST["name"]);
              $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $department= trim($_POST["department"]);



        // Prepare an insert statement
        $sql = "INSERT INTO loginlecturer(lecturer_id, name, email, password, department) VALUES ( ? , ? , ? , ?, ? )";

        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_lecturerid,$param_name, $param_email, $param_password, $param_department);

            // Set parameters
            $param_lecturerid = $lecturerid;
            $param_name=$name;
            $param_email=$email;
            $param_password=$password;
            $param_department=$department;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                header("location: addlecturer.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    // Close connection
    mysqli_close($db);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Lecturer</title>
<link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
    <div class="main">
        <h2>Add Lecturer</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <table>
            <tr>
              <td><label>Lecturer ID</label></td>
                <td><input type="text" name="lecturerid" value="LT" class="form-control" required></td></tr>

            <tr>

              <td><label>Name</label> </td>
              <td><input type="text" name="name" class="form-control" required</td></tr>


              <tr>
                <td><label>Email</label></td>
                <td><input type="text" name="email" class="form-control" required</td></tr>


              <tr>
              <td> <label>Password</label></td>
              <td>  <input type="password" name="password" class="form-control" required</td></tr>


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
          <a href="addaccount.html" >Back</a>
        </div>


        </form>
    </div>
</body>
</html>
