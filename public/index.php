<?php
//if yaf extension wasn't loaded exit
if(!extension_loaded("yaf")) exit('Yaf Has Not Been Installed Yet');
//define env variable
define('APP_ROOT' , dirname(__DIR__) );
define('APP_PATH' , APP_ROOT.'/application');
define('APP_CONF' , APP_ROOT.'/conf');
//Yaf_Application 's second param was using in read which configure in ini file
$app  = new Yaf\Application(APP_CONF . "/app.ini",'product');
$app->bootstrap()->run();
