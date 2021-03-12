<?php

    print("Hello world"."\n");
    print("This is a frist program"."\n");
    print time();
    $now =time();
    print date("\n".'Y-M-D H:i:s');
    sleep(5);
    $next =time();
    print "\n"."Travel Time: ".($next-$now)." seconds!";

    echo '$a: '.$a.'<br />';
    $name = 100;
    echo '$name: '.$name.'<br />';
    $name = 'David';
    echo '$name: '.$name.'<br />';
    $a = $a + 100;
    echo '$a: '.$a.'<b />';


?>