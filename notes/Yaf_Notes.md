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

<table>
    <tr>
        <td>yaf.environ</td> 
        <td>product</td> 
        <td>PHP_INI_ALL</td> 
        <td>环境名称, 当用INI作为Yaf的配置文件时, 这个指明了Yaf将要在INI配置中读取的节的名字</td>
    </tr>
    <tr>
        <td>yaf.library</td> 
        <td>NULL</td>    
        <td>PHP_INI_ALL</td> 
        <td>全局类库的目录路径</td>
    </tr>
    <tr>
        <td>yaf.cache_config</td>    
        <td>0</td>   
        <td>PHP_INI_SYSTEM</td>  
        <td>是否缓存配置文件(只针对INI配置文件生效), 打开此选项可在复杂配置的情况下提高性能</td>
    </tr>
    <tr>
        <td>yaf.name_suffix</td> 
        <td>1</td>  
        <td>PHP_INI_ALL</td> 
        <td>在处理Controller, Action, Plugin, Model的时候, 类名中关键信息是否是后缀式, 比如UserModel, 而在前缀模式下则是ModelUser</td>
    </tr>
    <tr>
        <td>yaf.name_separator</td>  
        <td>""</td>  
        <td>PHP_INI_ALL</td> 
        <td>在处理Controller, Action, Plugin, Model的时候, 前缀和名字之间的分隔符, 默认为空, 也就是UserPlugin, 加入设置为"_", 则判断的依据就会变成:"User_Plugin", 这个主要是为了兼容ST已有的命名规范</td>
    </tr>
    <tr>
        <td>yaf.forward_limit</td>   
        <td>5</td>   
        <td>PHP_INI_ALL</td> 
        <td>forward最大嵌套深度</td>
    </tr>
    <tr>
        <td>yaf.use_namespace</td>
        <td>0</td>   
        <td>PHP_INI_SYSTEM</td>  
        <td>开启的情况下, Yaf将会使用命名空间方式注册自己的类, 比如Yaf_Application将会变成Yaf\Application</td>
    </tr>
    <tr>
        <td>yaf.use_spl_autoload</td>    
        <td>0</td>   
        <td>PHP_INI_ALL</td> 
        <td>开启的情况下, Yaf在加载不成功的情况下, 会继续让PHP的自动加载函数加载, 从性能考虑, 除非特殊情况, 否则保持这个选项关闭</td>
    </tr>
</table>
