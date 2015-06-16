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

