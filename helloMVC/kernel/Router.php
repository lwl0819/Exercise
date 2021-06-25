<?php
use config\Router;

Router::addRoute('/login',LoginController::class);
Router::addRoute('/',IndexController::class);