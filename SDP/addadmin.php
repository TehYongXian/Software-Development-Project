<?php
// Include config file
require_once "dbConn.php";

// Define variables and initialize with empty values
$adminid= $name=  $password= "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


              $adminid = trim($_POST["adminid"]);
              $name = trim($_POST["name"]);
        $password = trim($_POST["password"]);



        // Prepare an insert statement
        $sql = "INSERT INTO loginadmin(admin_id, name, password) VALUES ( ? , ? , ? )";

        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_adminid,$param_name, $param_password);

            // Set parameters
            $param_adminid = $adminid;
            $param_name=$name;
            $param_password=$password;


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                header("location: addadmin.php");
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
    <title>Add Admin</title>
<link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
    <div class="main">
        <h2>Add Admin</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <table>
            <tr>
              <td><label>Parent ID</label></td>
                <td><input type="text" name="adminid" value="AD" class="form-control" required></td></tr>

            <tr>

              <td><label>Name</label> </td>
              <td><input type="text" name="name" class="form-control" required</td></tr>


              <tr>
              <td> <label>Password</label></td>
              <td>  <input type="password" name="password" class="form-control" required</td></tr>

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
