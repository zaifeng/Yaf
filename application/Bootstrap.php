<?php
/**
 * Yaf Bootstrap
 *
 * @author zaifeng <zhzaifeng@sina.com>
 */
class Bootstrap extends Yaf_Bootstrap_Abstract 
{
    /**
     * [_initCommon description]
     * @return [type] [description]
     */
    public function _initCommon()
    {
        Yaf_Loader::import(APP_PATH.'/common/functions.php');
    }

    /**
     * register configure to global
     * @return [type] [description]
     */
    public function _initConfig()
    {
        Yaf_Registry::set('config' , Yaf_Application::app()->getConfig()) ;
    }
    
    /**
     * init local name space
     * @return null
     */
    public function _initLoader()
    {
        Yaf_Loader::getInstance()->registerLocalNamespace( array("Db") ) ;
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {
        $router = $dispatcher->getInstance()->getRouter();
        $route = new Yaf_Route_Rewrite('/sh/:code',array('module'=>'My','controller' => 'Index','action' => 'Index'));
        $router->addRoute('share', $route);
    } 
}

