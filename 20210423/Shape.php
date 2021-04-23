<?php
class Shape {
  const PI = 3.142 ;
  // name 是方法名稱,arg 則是陣列名稱
  function __call($name,$arg){
    if($name == 'area')
      switch(count($arg)){
        case 0 : return 0 ;
        //self 指物件自己
        case 1 : return self::PI * $arg[0] ;
        case 2 : return $arg[0] * $arg[1];
      }
  }
  static function __callStatic($name,$arg){
    return array(3,5);
  }
}
$circle = new Shape();
echo $circle->area(3).PHP_EOL;
$rect = new Shape();
echo $rect->area(8,6).PHP_EOL;
echo Shape::hello()[1];
?>