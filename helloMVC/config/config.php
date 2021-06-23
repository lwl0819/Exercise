<?php
    namespace Config;

    class Config{
        public function show(){
            $file = fopen("../Config/.ENV",'rb');
            while((!feof($file))&&($line = fgets($file))){
                $line = trim($line);
                $info = explode('=',$line);
                if(empty($info[0])){
                    continue;
                }
                define($info[0],$info[1]);
            }
        }
    }
?>