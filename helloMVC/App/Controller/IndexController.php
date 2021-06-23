<?php
    namespace App\Controller;

    use Kernel\Controller;
    use App\Model\IndexModel;
    use App\View\IndexView;

    class IndexController extends Controller{
        protected $paras;

        public function __construct($parameter){
            parent::__construct($parameter);
        }
        public function getUri(){
            $this->paras = parent::getUri();
            return $this->paras;
        }
        public function run(){
            $view = new IndexView("/");
            $view->show($result);
        }    
            //print $result;
            //(new Indexview())->show($result);
    }
?>