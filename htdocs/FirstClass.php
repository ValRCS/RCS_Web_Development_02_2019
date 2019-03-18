<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/14/2019
 * Time: 12:27 PM
 */

class FirstClass
{
    public $myvar = "My Variable";
    private $secretvar = "My secret";

    /**
     * @return string
     */
    public function getSecretvar()
    {
        return $this->secretvar;
    }

    public function printSomething() {
        echo "Just some randome text <br>";
    }

    /**
     * @param string $secretvar
     */
    public function setSecretvar($secretvar)
    {
        //We can do data validation here
        $this->secretvar = $secretvar;
    }

    public function showVar() {
        echo "Showing myvar: $this->myvar<br>";
    }

    public function getSecret() {
        echo "Showing secret: $this->secretvar<br>";

    }
}