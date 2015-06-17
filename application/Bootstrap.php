<?php
class Bootstrap extends Yaf_Bootstrap_Abstract 
{
    private $_config ;

    public function _initConfig()
    {
        $this->_config = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config' , $this->_config);
    }
}
