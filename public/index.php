<?php
define("APP_PATH",  realpath(dirname(__FILE__) . '/../'));
define("PUBLIC_PATH" , dirname(__FILE__));
$app  = new Yaf_Application(APP_PATH . "/conf/app.ini");
$app->bootstrap()
    ->run();
