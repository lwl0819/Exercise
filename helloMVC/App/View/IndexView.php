<?php
    namespace App\View;

    use Kernel\View;

    class IndexView extends View{
        protected $twig;

        public function __construct($path){
            parent::__construct($path);
        }
        public function show($user){
            include (APP_PATH.'App/View/Header.html');
            $twig = $this->getTwig();
            echo $twig->render('index.twig.html', ['name' => 'John Doe', 'occupation' => 'gardener']);
            include (APP_PATH.'App/View/Footer.html');
        }
        public function __destruct(){}
    }
?>