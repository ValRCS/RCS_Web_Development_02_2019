<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 3/12/2019
 * Time: 12:27 PM
 */
$path = "counter.txt";

echo "<h1>My Counter Page</h1>";


//reading text file
//TODO add file exists check //if no file count should 0
$count = 0;
if (file_exists($path)) {
    $file  = fopen( $path, 'r' );
    if($file) {
        $count = fgets( $file);
    }
}

; //without length it will read all file
fclose( $file );


echo "You are visitor number $count<br>";
$count = abs( intval( $count ) ) + 1;
echo "You are visitor number $count<br>";

//Saving Text File
$file  = fopen( $path, 'w' );
fwrite($file, $count);
fclose($file);