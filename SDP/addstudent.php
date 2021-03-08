<?php
// Include config file
require_once "dbConn.php";

// Define variables and initialize with empty values
$studentid = $name= $email= $password = $intake = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


                    $studentid = trim($_POST["studentid"]);
                    $name = trim($_POST["name"]);
              $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);
        $intake= trim($_POST["intake"]);



        // Prepare an insert statement
        $sql = "INSERT INTO loginstudent (student_id, name, email, password, intake) VALUES ( ? , ? , ? , ?, ? )";

        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_studentid,$param_name, $param_email, $param_password, $param_intake);

            // Set parameters
            $param_studentid = $studentid;
            $param_name=$name;
            $param_email=$email;
            $param_password=$password;
            $param_intake =$intake;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                header("location: addstudent.php");
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
    <title>Add Student</title>
<link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
    <div class="main">
        <h2>Add Student</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <table>
            <tr>
              <td><label>Student ID</label></td>
                <td><input type="text" name="studentid" value="TP" class="form-control" required></td></tr>

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
            <a href="addaccount.html" >Back</a>
          </div>


        </form>
    </div>
</body>
</html>
