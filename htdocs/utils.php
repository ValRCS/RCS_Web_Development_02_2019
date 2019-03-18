<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/15/2019
 * Time: 11:38 AM
 */
trait serverUtils {
    public function showServerInfo() {
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
    }
}