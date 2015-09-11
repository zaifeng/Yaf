<?php
class AppController extends Yaf_Controller_Abstract
{
    protected $layout ;
    protected $config ;

    public function init()
    {
        $this->getView()->config = Yaf_Application::app()->getConfig();
        Yaf_Dispatcher::getInstance()->disableView();
    }

    public $actions = array(
        'test' => 'actions/member/Test.php',
    );
}
