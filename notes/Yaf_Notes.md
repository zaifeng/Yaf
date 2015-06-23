#Yaf Notes

最近学习yaf的时候遇到一个问题，网站被恶意工具试探，就是访问不存在的页面的时候

框架总是抛出500 错误 

####“PHP message: PHP Fatal error:  Uncaught exception 'Yaf\Exception\LoadFailed\Controller' with message 'Failed opening controller script”

解决方案，在配置文件中加入下面两行：

>application.dispatcher.catchException=true

>application.dispatcher.throwException=true

鸟哥 在yaf手册中，轻描淡写的 就写过去了

看来还是要仔细看手册，手册原文如下

application.dispatcher.throwException   Bool    true    在出错的时候, 是否抛出异常 
application.dispatcher.catchException   Bool    False   是否使用默认的异常捕获Controller, 如果开启, 在有未捕获的异常的时候, 控制权会交给ErrorController的errorAction方法, 可以通过$request->getException()获得此异常对象