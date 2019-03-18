<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/18/2019
 * Time: 11:21 AM
 */
session_start();
?>
    <!DOCTYPE html>
    <html>
<body>
    <h1>Register Page</h1>
<?php
if ($_POST && isset($_POST['uname'], $_POST['pword'])) {
    echo "Welcome " . $_POST['uname'] . "<br>";
    echo "Your password is:" . $_POST['pword'] . "<br>";
    $_SESSION["uname"] = $_POST['uname'];
    //TODO refactor this into a separate class and use constants
    $link = mysqli_connect("127.0.0.1", "root", "db1234", "todo_list");
    // Check connection
    if ($link->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }

    $myhash = password_hash($_POST['pword'], PASSWORD_DEFAULT);
    echo "Hashed pw" . $myhash . "<br>";
    //FIXME create prepared statement!!!

    $stmt = $link->prepare("INSERT INTO users (nickname, name, email, hash) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $_POST['uname'], $_POST['firstname'], $_POST['email'], $myhash);
    $stmt->execute();
    mysqli_close($link);
} else {?>
    <h2>Please Register</h2>
    <form action="register.php" method="post">
        <div>
            <label for="uname">Username</label>
            <input type="text" placeholder="Enter Username" name="uname" required>
        </div>
        <div>
            <label for="firstname">First Name</label>
            <input type="text" placeholder="Enter First Name" name="firstname" >
        </div>
        <div>
            <label for="lastname">Last Name</label>
            <input type="text" placeholder="Enter Last Name" name="lastname" >
        </div>
        <div>
            <label for="email">Your e-mail</label>
            <input type="email" placeholder="Enter e-mail" name="email" >
        </div>
        <div>
            <label for="pword">Password</label>
            <input type="password" placeholder="Enter Password" name="pword" required minlength="8">
        </div>
        <div>
            <label for="pwordagain">Password again</label>
            <input type="password" placeholder="Enter Password Again" name="pwordagain" required minlength="8">
        </div>



        <button type="submit">Register</button>
    </form>
    <?php
}
?>