<?php

$files = fopen('email.csv','rb');

$file_tmp = array();
while ((! feof($files)) && ($line = fgetcsv($files))) {
    array_push($file_tmp,$line);
}
fclose($files);
$new_line = array("peter@hello.com",5,28,2021,1000);
array_push($file_tmp,$new_line);
$files = fopen('email.csv','w');
foreach ($file_tmp as $lines) {
    fputcsv($files,$lines);
}
fclose($files);
print("写入完成");
?>