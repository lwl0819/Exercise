<?php
namespace config;

class Router {

    public $request;
    public static $routes = array();

    //建構子必需要剖析網址 URI 的部份
    public function __construct(array $request){
        $this->request = basename($request['REQUEST_URI']);
    }
    
    public static function addRoute(string $uri, $controller) : void {
        self::$routes[$uri] = $controller;
    }

    public function hasRoute(string $uri) : bool {
        $uri = '/'.$uri;
        return array_key_exists($uri, self::$routes);
    }
    
    public function run(){
        $uri = explode('?',$this->request);
        if ($this->hasRoute($uri[0])){
            return array($uri[0],(self::$routes['/'.$uri[0]]));
        }
    }    
}