<?php

$sum = 0;
$i = 0;

do{
    $i++;
    $sum = $sum + $i;
} while($i <= 50);

printf("總計: %d",$sum);
?>