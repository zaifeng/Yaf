<?php
/**
 * yaf 框架报错类调用
 *  默认错误会调用这个Controller 中 ErrorAction
 */

class ErrorController extends Yaf_Controller_Abstract
{
    
    /**
     * 错误异常提示
     * 
     */
    public function errorAction($exception){
        $this->getView()->assign("file", $exception->getFile());
        $this->getView()->assign("line", $exception->getLine());
        $this->getView()->assign("code", $exception->getCode());
        $this->getView()->assign("message", $exception->getMessage());
    }
}