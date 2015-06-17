<?php
define('APP_ROOT' , dirname(__DIR__) );
define('APP_PATH' , APP_ROOT.'/application');
$app  = new Yaf_Application(APP_ROOT . "/conf/app.ini");
$app->bootstrap()
    ->run();
