<?php
    namespace App\Model;

    use Kernel\Model;

    class IndexModel extends Model{
        protected $name;
        public function __construct(){
            $this->name = "Peter";
        }
        public function printName(){
            return $this->name;
        }
        public function __destruct(){

        }
    }
?>