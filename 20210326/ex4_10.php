<?php
for ($i = 2;$i <= 9;$i++){
    for($j = 1;$j <= 9;$j++){
        printf("%d*%d=%d\t",$i,$j,($i*$j));
    }
    printf("\n");
    
}
for ($i=2, $j=1; $i < 9 || $j <= 9 ; $j++)
{
    if ($j > 9)
    {
        $i++;
        $j = 1;
        echo "\n";
    }
    echo "$i*$j=" . $i * $j . " , ";
}

?>