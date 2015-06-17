<?php
//define env variable
define('APP_ROOT' , dirname(__DIR__) );
define('APP_PATH' , APP_ROOT.'/application');
define('APP_CONF' , APP_ROOT.'/conf');
$app  = new Yaf_Application(APP_CONF . "/app.ini",'product');
$app->bootstrap()
    ->run();
