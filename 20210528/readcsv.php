<?php

$files = fopen('email.csv','rb');

while ((! feof($files)) && ($line = fgetcsv($files))) {
    printf("信箱名稱：%s ",$line[0]);
    printf("建立時間：%d/%d/%d ",$line[3],$line[1],$line[2]);
    printf("年費： %d ",$line[4]);
    printf("\n",$line[0]);
}
fclose($files);
?>