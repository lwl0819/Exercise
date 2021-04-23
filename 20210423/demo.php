<?php

require_once "human.php";
require_once "run.php";

$app = new Human("Peter");

$app ->setRun(new class implements Runner{
    public function run(string $name){
        printf("%s is runner..." ,$name);
    }
});
$runner_name = $app->name;
$app->getRun()->run($runner_name);
?>