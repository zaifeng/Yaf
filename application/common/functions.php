<?php

function dump($var, $echo=true, $label=null, $strict=true) 
{
    $label = ($label === null) ? '' : rtrim($label) . ' ';
    if (!$strict) {
        if (ini_get('html_errors')) {
            $output = print_r($var, true);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        } else {
            $output = $label . print_r($var, true);
        }
    } else {
        ob_start();
        var_dump($var);
        $output = ob_get_clean();
        if (!extension_loaded('xdebug')) {
            $output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
            $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
        }
    }
    if ($echo) {
        echo($output);
        return null;
    }else
        return $output;
}

function Lang($name='')
{
    static $_lang = array();
    
    if(empty($name)){
        return $_lang;
    }
    if(is_string($name)){
        return empty($_lang[$name])?'Language pack undefined':$_lang[$name];
    }
    //定义语言包
    if(is_array($name)){
        $_lang = array_merge($_lang,$name);
    }
}

function Error($message,$code='1000')
{
    throw new Yaf\Exception($message,$code);
}

function cache($name,$value = null)
{
    $cache = Register::_get('cache');
    if( null != $value){
        $cache->set($name,$value);
    }else{
        return $cache->get($name);
    }
   
}