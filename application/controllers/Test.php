<?php
class TestController extends AppController {
    public function indexAction() {//默认Action
        $this->_view->test = "Hello world";
    }
}
?>
