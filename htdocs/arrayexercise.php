<?php
function processArray($myarray, $sortit = false)
{
    $res = "";
    $res .= "<ul>";
    //TODO use $sortit to choose whether to sort the array
    if ($sortit) {
        sort($myarray);
    }
    foreach ($myarray as $elem) {
        $res .= "<li>This element is $elem</li>";
    }
    $res .= "</ul>";
    return $res;
}

$myarr = array(1, 2, 6, 62, 3, 28);
echo processArray($myarr);
echo processArray($myarr, true);
?>
