
<?php
    $modifyme = 50;
    echo makecoffee();

    function add($a, $b) {
        $sum = $a+$b;
        //side effect
        $a = 33;
        echo "Sum for $a and $b is $sum<hr>";
        return $sum;
    }

    function passByReference(&$valtomod) {
        echo "Modifying $valtomod<br>";
        $valtomod += 25;
        echo "Modified $valtomod <br>";
        return $valtomod;
    }

    function makecoffee($type = "cappuccino")
    {
        return "Making a cup of $type.\n<br>";
    }
    echo makecoffee();
    echo makecoffee(null);
    echo makecoffee("espresso");



    passByReference($modifyme);
    echo "Outside function modifyme value is $modifyme<br>";
    echo "<hr>";

    printf("<h1>PHP Syntax</h1>");
    $c = add($modifyme, 7);
    echo "C is $c<br>";
    echo "modifyme is $modifyme<hr>";

    $unusedvar = "Not going to use this";
    $mytxt = "Kartupelis";
    $mybool = true;
    $myfalse = false;
    $myval = 22;
    $myfloat = 3.1416;
    $array = [
        "foo" => "foobar",
        "bar" => "barfoo",
        1 => 100,
        2 => 200
    ];

    printf("<p>My string is: %s, my bools are %b %b, myval is %d, myfload is %3.2f</p><hr>", $mytxt, $mybool, $myfalse, $myval, $myfloat);
    printf("<p>String interpolation for $myval</p>");
    print("<p>Many \$\$\$");
    $myfalse = -333;
    print(" My false is $myfalse</p><hr>");
    print "<h2>Print Concatenation " . $myval . " and more string concatenation</h2><hr>";

    print("My Capitalized word:" . strtoupper($mytxt) . "<hr>");

    print("<p>My foo is " . $array["foo"] . "and value is" . $array[1] . "</p><hr>");

    print("Just some fodder");
    if ($myval > 40 ) {
        echo "My large val is $myval";
    } else {
        echo "My val is kind of small $myval";
    }
    echo "<hr>";
    echo "<hr>";

    for ($i = 0 ; $i < 10 ; $i++) {
        echo "<div id='myid$i'>The number is $i</div>";
    }
    echo "<hr>";
    $myval = 5;
    if ($myval > 10 and $myval < 30) {
        echo "$myval is between 10 and 30";
    } else {
        echo "$myval is outside 10 to 30 range";
    }
    echo "<hr>";

?>