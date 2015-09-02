<?php
class IndexController extends Yaf_Controller_Abstract {
    public function indexAction() {//默认Action
        $test = $this->getRequest()->getParam('code');
        var_dump($test);
        $this->getView()->assign("content", "Hello  大爷你好");
    }

    public function testAction(){
        $test = $this->getRequest()->getParam('code');
        var_dump($test);
        $this->getView()->assign("content", "Hello  大爷你好");
    }
}
?>
