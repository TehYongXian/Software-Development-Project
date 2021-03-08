
<!DOCTYPE html>
<html>
<head>
  <title>Create Attendance Page</title>
  <link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
  <div class ="main">
    <h2>Create Attendance</h2>
    <form action="marknewattendance.php" method="POST">
      Select Class:<br><br>
      <select name="selectclass" Required>
        <option value="" selected = "selected">Select one class</option>
        <option value="APP002-2-1-JP-UCDF1905ICT(SE)">APP002-2-1-JP-UCDF1905ICT(SE)</option>
        <option value="APP002-2-1-JP-UCDF1905ICT(ITR)">APP002-2-JP-UCDF1905ICT(ITR)</option>
        <option value="APP002-2-1-JP-UCDF1905ICT(DI)">APP002-2-1-JP-UCDF1905ICT(DI)</option>
        <option value="APP003-3-8-MPU-UCDF1905ICT(SE)">APP003-3-8-MPU-UCDF1905ICT(SE)</option>
        <option value="APP003-3-8-MPU-UCDF1905ICT(ITR)">APP003-3-8-MPU-UCDF1905ICT(ITR)</option>
        <option value="APP003-3-8-MPU-UCDF1905ICT(DI)">APP003-3-8-MPU-UCDF1905ICT(DI)</option>
        <option value="APP004-4-6-PITS-UCDF1905ICT(SE)">APP004-4-6-PITS-UCDF1905ICT(SE)</option>
        <option value="APP004-4-6-PITS-UCDF1905ICT(ITR)">APP004-4-6-PITS-UCDF1905ICT(ITR)</option>
        <option value="APP004-4-6-PITS-UCDF1905ICT(DI)">APP004-4-6-PITS-UCDF1905ICT(DI)</option>
      </select>
      <div class="form-group" align="center">
        <input type="submit" value="Submit">
      </div>
    </form>

    <div class="back_link">
      <a href="lecturerwelcome.php" >Back</a>
    </div>

  </body>
  </html>
