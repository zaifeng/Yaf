#Yaf study

A php framework study log

###yaf 模块
yaf 对模块支持欠缺

通过在配置文件中增加选项

application.modules=Index,Module

来添加模块

模块的访问必须通过

/module/mcontroller/maction 缺一不可

缺少后，会把module当成controller 

###yaf 环境变量

默认yaf会读取application.ini（可自定义）下的product项下值

通过在php.ini添加
[yaf]
yaf.environ = develop
可实现对默认变量的读取，可实现开发机器 跟线上机器共处


一、 获取提交的参数：
1 获取" / "中的参数 例:获取url中/id/12 使用： $this->getRequest()->getParam("id", 0); 只能用来获取“/”后面的参数;
2 获取GET     $this->getRequest()->getQuery('id',0);
3 获取POST   $this->getRequest()->getPost('id',0);
 
用以上方法，如果不存在没有GET或者POST或者url参数中没有id这个参数，就会默认赋值为0；
 
二、全局注册变量
 
一般在Bootstrap.php中，
例:$Db = new Db();
全局注册：Yaf_Registry::set('Db', $Db);
获取：$this->_db = Yaf_Registry::get("Db");
 
三 、其他
1 获取配置文件信息为数组
 $this->_config = Yaf_Application::app()->getConfig();
配置文件中有以下信息：
 
;database 
database.config.charset = "utf8"
database.config.dbname =  "dbname"
;database master 主库配置
database.config.master.host = 127.0.0.1:3306
database.config.master.username = "name"
database.config.master.password = pwd
;database slave  从库配置（如果没有从库，主从配置一样）
database.config.slave.host = 127.0.0.1:3307
database.config.slave.username = "name"
database.config.slave.password = pwd
 
那么通过 this->_config->database->config->toArray(); 方法，得到了一个二维数组
array (
    'charset' => 'utf8',
    'dbname' => 'dbname',
    'master' => array    
    (
        'host'      => '127.0.0.1:3306',     
        'username'  => 'name',          
        'password'  => 'pwd',         
    ),
    'slave' => array     
    (
        'host'      => '127.0.0.1:3307',     
        'username'  => 'name',         
        'password'  => 'pwd',    
    ),
);
 
 2 获取配置文件信息为字符串
配置信息：
;usershow
usershow.config = "a,b,c,d"
获取方法：
Yaf_Application::app()->getConfig()->usershow->config;


