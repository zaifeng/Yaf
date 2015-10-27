<?php

    $request = new Yaf_Request_Simple("CLI", "Index", "Controller", "Hello", array("para" => 2));
    print_r($request);
