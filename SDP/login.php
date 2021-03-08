<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["student_login"])) {
    header("location:studentwelcome.php");
  }

  if (isset($_SESSION["lecturer_login"])) {
      header("location:lecturerwelcome.php");
    }

    if (isset($_SESSION["admin_login"])) {
        header("location:adminwelcome.php");
      }

      if (isset($_SESSION["parent_login"])) {
          header("location:parentwelcome.php");
        }


// Include config file
require_once "dbConn.php";

// Define variables and initialize with empty values
$userid = $password = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // Check if username is empty

  $userid = trim($_POST["userid"]);
  $password = trim($_POST["password"]);
  $role = trim($_POST["role"]);

  switch ($role) {
    case "Student":
    // Prepare a select statement
    $sql = "SELECT * FROM loginstudent WHERE student_id = ?";

                if($stmt = mysqli_prepare($db, $sql)){
                  // Bind variables to the prepared statement as parameters
                  mysqli_stmt_bind_param($stmt, "s", $param_studentid);

                  // Set parameters
                  $param_studentid = $userid;

                  // Attempt to execute the prepared statement
                        if(mysqli_stmt_execute($stmt)){
                          // Store result
                          mysqli_stmt_store_result($stmt);

                          // Check if username exists, if yes then verify password
                              if(mysqli_stmt_num_rows($stmt) == 1){

                                // Bind result variables
                                mysqli_stmt_bind_result($stmt, $id, $studentid, $name ,$email,$correct_password, $intake);
                                        if(mysqli_stmt_fetch($stmt)){
                                                if($password ==$correct_password){
                                                  // Password is correct, so start a new session
                                                  session_start();

                                                  // Store data in session variables
                                                  $_SESSION["student_login"]= true;
                                                  $_SESSION["id"] = $id;
                                                  $_SESSION["studentid"] = $studentid;
                                                  $_SESSION["name"] = $name;
                                                  $_SESSION["email"] = $email;
                                                  $_SESSION["password"] = $correct_password;
                                                  $_SESSION["intake"] = $intake;


                                                  // Redirect user to welcome page
                                                  header("location: studentwelcome.php");
                                                }else{
                                                  // Display an error message if password is not valid
                                                  echo '<script> alert("Wrong password")</script>';
                                                }
                                        }
                              } else{
                                echo '<script> alert("Invalid studentid")</script>';
                              }

                        }
                        mysqli_stmt_close($stmt);
                  }
        break;

        case "Lecturer":
        // Prepare a select statement
        $sql = "SELECT * FROM loginlecturer WHERE lecturer_id = ? ";

                    if($stmt = mysqli_prepare($db, $sql)){
                      // Bind variables to the prepared statement as parameters
                      mysqli_stmt_bind_param($stmt, "s", $param_lecturerid);

                      // Set parameters
                      $param_lecturerid = $userid;

                      // Attempt to execute the prepared statement
                            if(mysqli_stmt_execute($stmt)){
                              // Store result
                              mysqli_stmt_store_result($stmt);

                              // Check if username exists, if yes then verify password
                                  if(mysqli_stmt_num_rows($stmt) == 1){

                                    // Bind result variables
                                    mysqli_stmt_bind_result($stmt, $id, $lecturerid, $name ,$email, $correct_password, $department);
                                            if(mysqli_stmt_fetch($stmt)){
                                                    if($password == $correct_password){
                                                      // Password is correct, so start a new session
                                                      session_start();

                                                      // Store data in session variables
                                                        $_SESSION["lecturer_login"]= true;
                                                          $_SESSION["id"] = $id;
                                                      $_SESSION["lecturerid"] = $lecturerid;
                                                      $_SESSION["name"] = $name;
                                                      $_SESSION["email"] = $email;
                                                      $_SESSION["password"] = $correct_password;
                                                      $_SESSION["intake"] = $department;

                                                      // Redirect user to welcome page
                                                      header("location: lecturerwelcome.php");
                                                    }else{
                                                      // Display an error message if password is not valid
                                                      echo '<script> alert("Wrong password")</script>';
                                                    }
                                            }
                                  } else{
                                    echo '<script> alert("Invalid lecturerid")</script>';
                                  }

                            }
                            mysqli_stmt_close($stmt);
                      }
            break;
            case "Admin":
            // Prepare a select statement
            $sql = "SELECT * FROM loginadmin WHERE admin_id = ? ";

                        if($stmt = mysqli_prepare($db, $sql)){
                          // Bind variables to the prepared statement as parameters
                          mysqli_stmt_bind_param($stmt, "s", $param_adminid);

                          // Set parameters
                          $param_adminid = $userid;

                          // Attempt to execute the prepared statement
                                if(mysqli_stmt_execute($stmt)){
                                  // Store result
                                  mysqli_stmt_store_result($stmt);

                                  // Check if username exists, if yes then verify password
                                      if(mysqli_stmt_num_rows($stmt) == 1){

                                        // Bind result variables
                                        mysqli_stmt_bind_result($stmt, $id, $adminid, $name, $correct_password);
                                                if(mysqli_stmt_fetch($stmt)){
                                                        if($password == $correct_password){
                                                          // Password is correct, so start a new session
                                                          session_start();

                                                          // Store data in session variables
                                                    $_SESSION["admin_login"]= true;
                                                      $_SESSION["id"] = $id;
                                                          $_SESSION["adminid"] = $adminid;
                                                          $_SESSION["name"] = $name;
                                                          $_SESSION["password"] = $correct_password;

                                                          // Redirect user to welcome page
                                                          header("location: adminwelcome.php");
                                                        }else{
                                                          // Display an error message if password is not valid
                                                          echo '<script> alert("Wrong password")</script>';
                                                        }
                                                }
                                      } else{
                                            echo '<script> alert("Invalid adminid")</script>';
                                      }

                                }
                                mysqli_stmt_close($stmt);
                          }
                break;
                case "Parent":
                // Prepare a select statement
                $sql = "SELECT * FROM loginparent WHERE parent_id = ? ";

                            if($stmt = mysqli_prepare($db, $sql)){
                              // Bind variables to the prepared statement as parameters
                              mysqli_stmt_bind_param($stmt, "s", $param_parentid);

                              // Set parameters
                              $param_parentid = $userid;

                              // Attempt to execute the prepared statement
                                    if(mysqli_stmt_execute($stmt)){
                                      // Store result
                                      mysqli_stmt_store_result($stmt);

                                      // Check if username exists, if yes then verify password
                                          if(mysqli_stmt_num_rows($stmt) == 1){

                                            // Bind result variables
                                            mysqli_stmt_bind_result($stmt,$id, $parentid, $name, $phone, $correct_password);
                                                    if(mysqli_stmt_fetch($stmt)){
                                                            if($password == $correct_password){
                                                              // Password is correct, so start a new session
                                                              session_start();

                                                              // Store data in session variables
                                                            $_SESSION["parent_login"]= true;
                                                              $_SESSION["id"] = $id;
                                                              $_SESSION["parentid"] = $parentid;
                                                              $_SESSION["name"] = $name;
                                                                $_SESSION["phone"] = $phone;
                                                              $_SESSION["password"] = $correct_password;

                                                              // Redirect user to welcome page
                                                              header("location: parentwelcome.php");
                                                            }else{
                                                              // Display an error message if password is not valid
                                                              echo '<script> alert("Wrong password")</script>';
                                                            }
                                                    }
                                          } else{
                                            echo '<script> alert("Invalid parentid")</script>';
                                          }

                                    }
                                    mysqli_stmt_close($stmt);
                              }

    }
}
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="studentlogin.css">
  </head>
  <body>
    <div class="main">
      <h2>Alpha Attend System</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table>
          <tr>
            <td><label>UserID</label></td>
            <td><input type="text" name="userid" size="25" maxlength="25" placeholder="TPxxxx/LTxxxx/ADxxx/PTxxxx" class="form-control"required </td></tr>


            <tr>
              <td> <label>Password</label> </td>
              <td>  <input type="password" size="25" maxlength="25" name="password" placeholder="Enter your password"class="form-control" required</td></tr>

              <td> <label>Role</label></td>
              <td><select name="role" Required>
                <option value="" selected = "selected">Select role</option>
                <option value="Student">Student</option>
                <option value="Lecturer">Lecturer</option>
                <option value="Admin">Admin</option>
                <option value="Parent">Parent</option>
              </select></td></tr>
            </table>

            <div class="form-group" align="center" >
              <input type="submit" value="Login">
            </div>
          </form>
        </div>
      </body>
      </html>
