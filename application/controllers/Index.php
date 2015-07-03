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
    
    public function testAction()
    {
        $memcache = memcache_connect('127.0.0.1',11211);
        $memcache->increment('qq',2);

        $key = $memcache->get('qq');
        var_dump($key);
        Yaf_Dispatcher::getInstance()->disableView();
    }
}
?>
