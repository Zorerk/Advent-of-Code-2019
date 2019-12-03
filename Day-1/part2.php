<?php
include("input.php");
foreach($input as $mass){
    $x = $mass;
    while ($x >= 9){
        $x = floor($x / 3) - 2;
        $sum += $x;
    }
}
echo $sum;