<?php
/**
 * Main Controller
 */
class IndexController extends Yaf_Controller_Abstract{
    
    public function indexAction()
    {
        
        $this->_view->content = "Hello Yaf" ;       
    }

    public function showAction()
    {
        echo "Hello World!!!" ;
        Yaf_Dispatcher::getInstance()->disableView();
    }
}
?>
