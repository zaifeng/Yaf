<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {//默认Action
        //$userid = $this->getRequest()->getQuery("userid", 0);
        //$userid = $this->getRequest()->getPost("userid", 0);
        $this->getView()->assign("content", "Hello  大爷你好");
    }

    public function testAction(){
        $test = Yaf_Application::app()->getConfig();
        var_dump($test);
        $this->getView()->assign("content", "Hello  大爷你好");
    }
}
?>
