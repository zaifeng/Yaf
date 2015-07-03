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
        $memcache = new Memcache ;
        $memcache->addServer('127.0.0.1',11211);
        $memcache->addServer('127.0.0.1',11212);
        $qq = $memcache->get('qq');
        if (empty($qq)){
            $memcache->set('qq' , 2 ,0 , 1800) ;
        } else {
            //$memcache->increment('qq');
        }
        $memcache->set('qq' , 2 ,0 , 1800) ;
        $memcache->increment('qq',3);
        $qq = $memcache->get('qq');
        
        var_dump($qq);
        Yaf_Dispatcher::getInstance()->disableView();
    }
}
?>
