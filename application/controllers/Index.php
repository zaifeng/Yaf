<?php
/**
 * Main Controller
 */
class IndexController extends Yaf\Controller_Abstract{
    
    public function indexAction()
    {
        $this->_view->content = "Hello Yaf" ;       
    }

    public function showAction()
    {
        $uid = $this->getRequest();
        dump($uid);
        Yaf\Dispatcher::getInstance()->disableView();
    }
}
?>
