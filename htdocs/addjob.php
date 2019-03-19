<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/19/2019
 * Time: 12:43 PM
 */
session_start();
//TODO check for valid session and user ID
if ($_POST && isset($_POST['description'])) {
    echo "processing new job with description:" . $_POST['description'];
    //TODO refactor this into a separate class and use constants
    $link = mysqli_connect("127.0.0.1", "root", "db1234", "todo_list");
    // Check connection
    if ($link->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
    }

    $stmt = $link->prepare("INSERT INTO tasks (description, userId) VALUES (?, ?)");
    $stmt->bind_param("sd", $_POST['description'], $_SESSION['userId']);
    $stmt->execute();
    mysqli_close($link);

    header('Refresh: 1; url=todos.php');
} else {
    echo "This page is only for processing valid POST requests!";
}