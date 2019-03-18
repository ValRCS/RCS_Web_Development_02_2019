<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/18/2019
 * Time: 10:22 AM
 */
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
if (isset($_SESSION['uname'])) {
    echo "Nice to see you" . $_SESSION['uname'] . "<br>";
} else {
    echo "You should probably go to <a href='login.php'>Login page</a><br>";
}

print_r($_SESSION);
?>

</body>
</html>