<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/19/2019
 * Time: 11:00 AM
 */
spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    include 'classes/'.$className . '.php';
}

//-------------------------------------

$myClass = new Animal("Doggie");
$myClass->renderType();
$mycat = new Cat(true);
$mycat->renderView();

