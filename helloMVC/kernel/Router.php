<?php
    use Config\Router;

    Router::addRoute('/login',LoginController::class);
    Router::addRoute('/',IndexController::class);   
?>