<?php
/**
 * Yaf Bootstrap
 *
 * @author zaifeng <zhzaifeng@sina.com>
 */
class Bootstrap extends Yaf\Bootstrap_Abstract 
{
    /**
     * [_initCommon description]
     * @return [type] [description]
     */
    public function _initCommon()
    {
        Yaf\Loader::import(APP_PATH.'/common/functions.php');
    }

    /**
     * register configure to global
     * @return [type] [description]
     */
    public function _initConfig()
    {
        Yaf\Registry::set('config' , Yaf\Application::app()->getConfig()) ;
    }
    
    /**
     * init local name space
     * @return null
     */
    public function _initLoader()
    {
        Yaf\Loader::getInstance()->registerLocalNamespace( array("Db") ) ;
    }

}

