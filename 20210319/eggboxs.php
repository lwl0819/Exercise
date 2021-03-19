<?php
$eggboxs = array();
$eggboxs["土雞"]=10;
$eggboxs[]=20;
$eggboxs[4]=30;
array_push($eggboxs,"Apple");
$eggboxs[2]="Pineapple";


print_r($eggboxs);
array_pop($eggboxs);
print_r($eggboxs);
array_pop($eggboxs);
print_r($eggboxs);
$eggboxs=array(0);

?>