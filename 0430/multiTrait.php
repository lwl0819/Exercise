<?php
trait Hello {
  public function sayHello() {
    echo 'Hello ';
  }
}
trait World {
  public function sayWorld() {
    echo 'World';
  }
}
trait Bye{
    public function sayBye(){
        echo 'Bye';
    }
}
class MyHelloWorld {
  use Hello, World, Bye;
  public function sayExclamationMark() {
    echo '!';
  }
}
$o = new MyHelloWorld();
$o->sayHello();
$o->sayWorld();
$o->sayBye();
$o->sayExclamationMark();
?>