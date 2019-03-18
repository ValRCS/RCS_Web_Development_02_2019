<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/14/2019
 * Time: 11:52 AM
 */
require_once ('FirstClass.php');
require_once ('SecondInheritor.php');
require_once ('Animal.php');

echo '<h1>Testing MySQL connection</h1>';

$mycat = new Cat(false);
//$mycat->setType("Cat");

//echo "My animal is " . $mycat->getType() . "<br>";
$mycat->renderType();

$secondcat = new Cat(true);
$secondcat->miau();
$secondcat->renderType();
$secondcat->renderView();
$secondcat->showServerInfo();

//echo "Our animal count: " . Animal::$count . "<br>";
Animal::renderCount();

$mydog = new Dog (false);
$mydog->renderView();
Animal::renderCount();
$myseconddog = new Dog (true);
$myseconddog->renderView();
Animal::renderCount();

echo "My constant: " . iViewTemplate::ENDTAG;

//created an object (an instance) of class FirstClass
$myinstance = new FirstClass();

$myinstance->showVar();
$myinstance->myvar = "Something new";
$myinstance->showVar();
$myinstance->getSecret();
$myinstance->printSomething();

echo "My Secret: " . $myinstance->getSecretvar();
echo "<br>";
$secondinstance =  new SecondInheritor();
$secondinstance->printSomething();
$secondinstance->showSecond();


echo "<hr>";
echo "<hr>";
$link = mysqli_connect("127.0.0.1", "root", "db1234", "todo_list");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

$query = 'SELECT * from tasks';

$result = $link->query($query, MYSQLI_STORE_RESULT);

echo "Showing Results<hr>";
echo "<ul>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<li class='reditem'>id: " . $row["id"]. " - Name: " . $row["description"]. " " . $row["created"]. "</li>";
    }
} else {
    echo "0 results";
}
echo "</ul>";
echo "Closing DB";

mysqli_close($link);







