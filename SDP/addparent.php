<?php
// Include config file
require_once "dbConn.php";

// Define variables and initialize with empty values
$parentid = $name= $phone= $password = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


              $parentid = trim($_POST["parentid"]);
              $name = trim($_POST["name"]);
              $phone = trim($_POST["phone"]);
        $password = trim($_POST["password"]);




        // Prepare an insert statement
        $sql = "INSERT INTO loginparent(parent_id, name, phone, password) VALUES ( ? , ? , ? , ? )";

        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_parentid,$param_name, $param_phone, $param_password);

            // Set parameters
            $param_parentid = $parentid;
            $param_name=$name;
            $param_phone=$phone;
            $param_password=$password;


            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

                header("location: addparent.php");
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
    <title>Add Parent</title>
<link rel="stylesheet" type="text/css" href="addall.css">
</head>
<body>
    <div class="main">
        <h2>Add Parent</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <table>
            <tr>
              <td><label>Parent ID</label></td>
                <td><input type="text" name="parentid" value="PT" class="form-control" required></td></tr>

            <tr>

              <td><label>Name</label> </td>
              <td><input type="text" name="name" class="form-control" required</td></tr>


              <tr>
                <td><label>Phone</label></td>
                <td><input type="text" name="phone" class="form-control" required</td></tr>


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
