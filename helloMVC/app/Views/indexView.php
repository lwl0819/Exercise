<?php

namespace App\Views;

use kernel\View;

class indexView extends View {
    protected $twig;

    public function __construct($path){
        parent::__construct($path);
    }

    public function show($user){
        include(APP_PATH.'app/Views/header.html');
        $twig = $this->getTwig();
        echo $twig->render('index.html.twig', ['name' => 'John Doe', 
    'occupation' => 'gardener']);

        include(APP_PATH.'app/Views/footer.html');
    }

    public function __destruct(){
    }
}
