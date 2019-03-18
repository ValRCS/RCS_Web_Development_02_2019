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
  if ($_POST && isset($_POST['uname'], $_POST['pword'])) {
      echo "Welcome " . $_POST['uname'] . "<br>";
      echo "Your password is:" . $_POST['pword'] . "<br>";
      $_SESSION["uname"] = $_POST['uname'];

  } else {?>
    <h2>Please Login</h2>
    <form action="login.php" method="post">
    <label for="uname">Username</label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="pword">Password</label>
    <input type="password" placeholder="Enter Password" name="pword" required minlength="8">
    <button type="submit">Login</button>
</form>
<?php
  }
?>


</body>
</html>

