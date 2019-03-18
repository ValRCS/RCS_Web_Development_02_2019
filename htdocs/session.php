<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/18/2019
 * Time: 10:20 AM
 */
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>