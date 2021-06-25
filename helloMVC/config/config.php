<?php
namespace config;

class Config{
    public function show(){
        $file = fopen("../config/.env",'rb');
        while ((! feof($file)) && ($line = fgets($file))){
            $line = trim($line);
            $info = explode('=',$line);
            if (empty($info[0])){
                continue;
            }
            define($info[0],$info[1]);
        }
    }

}