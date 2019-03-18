<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/14/2019
 * Time: 12:51 PM
 */
require_once ('FirstClass.php');
class SecondInheritor extends FirstClass
{
    public $secondvar = "My second value";

    public function showSecond() {
        echo "<br>Showing secondvar $this->secondvar<br>";
    }
}