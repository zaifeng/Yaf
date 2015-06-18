<?php
/**
 *
 */
class MyController extends Yaf_Controller_Abstract
{
    protected $layout ;
    /**
     * Render a php template
     */
    public function init()
    {
        $this->_req = $this->getRequest();
    }
    public function render()
    {
        
    }
}

?>
