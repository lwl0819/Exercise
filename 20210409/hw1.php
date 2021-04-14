<?php
function fibonacci($n) {
    $fibs = array(1,2);
    for ($i = 2; $i < $n; $i++) {
        $fibs[$i] = $fibs[$i - 1] + $fibs[$i - 2];
    }
    foreach ($fibs as $fib) {
        echo $fib . ",";
    }
}

fibonacci(10);


?>