<?php
    //陣列(array)
    $x[0] = "Hello"."\n";
    echo $x[0];

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

    $x = 1;
     function hello($x){
       $sum = $x * 2;
       echo "sum=" .$sum.  "函數執行結束 <br />";
       return $sum;
     }
?>
<p> -------我是分隔線------</p>
<?php
     $sum=hello($x);
     echo "x=$x<br />";
     echo "sum=$sum<br />"."\n";



     //circule rate 
     define('PI' ,3.1415926);

     //circule radius
     $radius =10;
     //caculate circule Area
     $area = $radius * $radius* PI;
     echo "Circule area is ".$area."\n";

     //cacule circule length
     $length =$radius * 2 * PI;
     echo "Circule length is ".$length."\n";


     //true or false
    $t = true;
    $f = false;
    echo "\$t 值 : $t 數字 : (int)$t "."<br />" ."\n";
    echo "\$f 值 : $f 數字 : (int)$f "."<br />" ."\n";    

    //PHP 資料型態轉換  強制轉換
    $pi = 3.141592;
    echo "\$pi 轉成整數 : ".(int)$pi."\n";
    $input = "3.141592pi";
    echo "pi 轉成浮點數 : ".(float)$input."\n";

    //以函數轉換
    $pi = 3.141592;
    settype($pi, "integer");
    echo "\$pi 轉成整數: ".$pi."\n";
    $piString = "3.141592circle";
    echo "是否有轉成功".settype($piString, "float")."\n";
    echo "\$piString 是: ".$piString."\n";
?>

