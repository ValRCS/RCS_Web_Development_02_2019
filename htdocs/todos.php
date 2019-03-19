<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/19/2019
 * Time: 11:31 AM
 */
require_once ('classes/Jobs.php');
session_start();
//TODO insert header here
if (isset($_SESSION["uname"])) {

    echo "You are logged in will show your tasks :" . $_SESSION["uname"] ;
    echo "Your user id is:". $_SESSION['userId']. "<br>";
    $myJobs = new Jobs($_SESSION['userId']);
    $myJobs->renderView();

} else {
    echo "You need to  <a href='login.php'>log in</a>";
}

//TODO insert footer here