<?php

namespace App\Views;

use kernel\View;

class indexView extends View {
    protected $twig;

    public function __construct($path){
        parent::__construct($path);
    }

    public function show($user){
        $twig = $this->getTwig();
        echo $twig->render('index.html.twig', ['name' => 'John Doe', 
    'occupation' => 'gardener']);
    }

    public function __destruct(){
    }
}