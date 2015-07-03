<?php
class AppRestController extends Yaf_Controller_Abstract
{
    protected $layout ;
    protected $config ;

    public function init()
    {
        $this->getView()->config = Yaf_Application::app()->getConfig();
    }
}
