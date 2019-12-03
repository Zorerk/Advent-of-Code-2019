<?php
include("input.php");
foreach($input as $mass){
        $sum += floor($mass / 3) - 2;
}
echo $sum;