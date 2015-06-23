<?php
class Cache{
    
    //实例化cache
    static private $instance = null;
    //资源句柄
    private $handle = null;
    /**
     * 单例模式实例化对象
     * @access public
     * @return object  $instance 
     */
    static public function getInstance(){
        if(self::$instance == null){
            $cache_type = Yaf_Registry::get('config')->application->default->cache;
            $class = "Cache_".$cache_type;
            if(class_exists($class)){
                self::$instance = new $class();
            }
        }
        return self::$instance;
    }
    /**
     * 魔术方法加载方法
     * @access public
     * @param  string  $method   方法     
     * @param  args    $args     参数
     */
    public function __call($method,$args){
        $this->handle = self::$instance;
        if(method_exists($this->handle,$method)){
             return call_user_func_array(array($this->handler,$method), $args);
        }else{
            Error(Lang('_METHOD_NOT_EXIST_'),1005);
        }
    }
}