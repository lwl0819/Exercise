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
        //分析參數
        $uri = array();
        $uri = explode('?',$this->request);
        if (!isset($uri[1])){
            $uri[1] = "";
        }
        if ($this->hasRoute($uri[0])){
            return array($uri[1],(self::$routes['/'.$uri[0]]));
        } else {
            print "error";
        }
    }
}