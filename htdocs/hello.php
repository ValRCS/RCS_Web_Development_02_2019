<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello PHP</title>
</head>
<body>
    <h1>My first PHP page</h1>

<?php
//Single Line Comment
# Also a comment
    $myvar = 10;
    $myvar += 25;
    printf("<p>A paragraph %d</p>", ($myvar+5));
    printf($myvar);
/* 
  * Multi line comment
  * Another Comment in the same comment block
*/
 //TODO fix this printing
    echo "<p>Hello PHP</p>";
?>

    <h2>Second Part</h2>
    //FIXME fix this bug
<?php
    print("<p>Second part by PHP really</p>");
?>
<br>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>
</body>
</html>