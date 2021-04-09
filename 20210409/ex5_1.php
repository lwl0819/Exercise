<?php
function buyCoffee(...$cost){
    $total = 0;
    foreach ($cost as $i){
        $total += $i;

    }
    $cup = $total/ 50;
    return $cup;

}

$peter = buyCoffee(300,210,50,40);
printf("Peter 買了 %d 杯咖啡!",$peter);
$marry =buyCoffee(200);
printf("Marry 買了%d 杯咖啡!",$marry);
?>