#Yaf_Config_Ini

Yaf 通过 php的parse_ini_file来解析ini配置文件

配置文件结构如下

;
[product]
application.aaaa=123434
application.bbb=cccc
....

[development]

dev.default=1232
dev.default.db=slave
deve.hello.db=123

[simulator:development]

sim.test.abc=1233
sim.test.abcc=1234

其中Yaf_Application初始化的时候 ，一般会读取product字段的值
即：我们通过Yaf_Application::app()->getConfig()->toArray(); 仅可以获取到product下的配置选项

无法获取[development]和[simulator] 下的配置

但我们可以通过 Yaf_Config_Ini('ini file' , 'section name');来获取相应的配置值

另外冒号":"含义表示 继承，比如上面 获取simulator 配置的时候，可以拿到product下的配置
