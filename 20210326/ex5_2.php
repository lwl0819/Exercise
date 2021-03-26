<?php
//calculate the summary
//...意思就是很多/可變長度引數的使用

function summary(...$number){
    $sum = 0;
    foreach($number as $i){
        $sum += $i;

    }
    
    return $sum;
}

$total = summary(188831519,99929545,5696546,5684652,15478941202315,9876543210);
printf("總計: %d",$total);
?>