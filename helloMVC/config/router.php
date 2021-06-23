<?php
    namespace Config;

    class Router{
        public $request;
        public static $routes = array();

        public function __construct(array $request){
            $this->request = basename($request['REQUEST_URI']);
        }
        public static function addRoute(string $uri,$controller):void{
            self::$routes[$uri] = $controller;
        }
        public function hasRoute(string $uri):bool{
            $uri = '/'.$uri;
            return array_key_exists($uri,self::$routes);
        }
        public function run(){
            $uri = explode('?',$this->request);
            //var_dump($uri);
            if($this->hasRoute($uri[0])){
                return array($uri[0],(self::$routes['/'.$uri[0]]));
            }
        }
    }
?>