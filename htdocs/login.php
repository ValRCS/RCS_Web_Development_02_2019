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
      echo "Welcome prospective user: " . $_POST['uname'] . "<br>";
      echo "Your password is:" . $_POST['pword'] . "<br>";


      //TODO refactor this into a separate class and use constants
      $link = mysqli_connect("127.0.0.1", "root", "db1234", "todo_list");
      // Check connection
      if ($link->connect_error) {
          echo "Connection failed: " . $conn->connect_error;
      }

      $stmt = $link->prepare("SELECT nickname, name, hash FROM users WHERE nickname = ?");
      $stmt->bind_param("s", $_POST['uname']);
      $stmt->execute();

      $result = $stmt->get_result();

      echo "Processing results from rowcount" . $result->num_rows . "<hr>";
      if (!$result->num_rows) {
          echo "Your login and/or password is invalid<br>";
      } else {
          //could process the login here instead of while
      }
      //example on how to process many rows
      //TODO find out how to get associate array that is get value by key
      while ($row = $result->fetch_array(MYSQLI_NUM))
      {
          //hash is 3rd
          echo $row[2] . "<br>";
          echo "nickname" . $row[0] . "<br>";
          echo "nickname" . $_POST['uname'] . "<br>";
          if (password_verify($_POST['pword'], $row[2])) {
              echo "Success! You are logged in!<br>";
              //This is where we authorize user to stay logged in for the duration of the session
              $_SESSION["uname"] = $_POST['uname'];
          } else {
              echo "Hmm you might not exist or wrong password<br>";
          }
//          foreach ($row as $r)
//          {
//              print "$r ";
//          }
//          print "\n";
      }

      mysqli_close($link);
      echo "Closed DB<br>";

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

