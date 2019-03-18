<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/12/2019s
 * Time: 11:13 AM
 */
function recArea($l, $w){
    $area = $l * $w;
    return "A rectangle of length $l and width $w has an area of $area.<br>";
}


//$myarea = recArea(20,30);
//echo $myare
//echo recArea(60,70);
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
    <title>Rectangle Area Function</title>
</head>

<body>
<h2>Rectangle Area Function</h2>

<?php
//If data not submitted, show form.
if(!isset ($_POST['submit'])){
?>
<form method="post" action="exercise.php">
    <p>Please enter the values of the length and width of your rectangle.</p>
    <p>Length:  <input type="text" name="length" size="5" />
        Width:  <input type="text" name="width" size="5" /></p>
    <input type="submit" name="submit" value="Go" />
</form>
<?php
//If data submitted, process and output it back to user.
} else {
//Retrieve user values.
    $l = (int)$_POST['length'];
    $w = (int)$_POST['width'];
//Use function with user values in statement.
    echo "The area of a rectangle with length $l and width $w is " . recArea($l, $w). ".";

}
?>

</body>
</html>
