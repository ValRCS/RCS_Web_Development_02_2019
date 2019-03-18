<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/18/2019
 * Time: 10:27 AM
 */
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
session_destroy();
echo "Session Destroyed";
?>

</body>
</html>