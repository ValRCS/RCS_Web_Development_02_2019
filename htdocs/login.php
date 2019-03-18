<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/18/2019
 * Time: 10:35 AM
 */
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h1>Login Page</h1>
<?php
  if ($_POST && isset($_POST['uname'])) {
      echo "Welcome " . $_POST['uname'] . "<br>";
      $_SESSION["uname"] = $_POST['uname'];
  } else {?>
    <h2>Please Login</h2>
    <form action="login.php" method="post">
    <label for="uname">Username</label>
    <input type="text" placeholder="Enter Username" name="uname">
    <button type="submit">Login</button>
</form>
<?php
  }
?>


</body>
</html>

