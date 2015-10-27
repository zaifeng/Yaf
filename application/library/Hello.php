<?php

class Hello extends Model
{
    public function __construnct(){
        echo "_construnct" ;
    }

    public function test()
    {
        echo "test";
    }

    public function testq(){
        echo "testq";
    }
}
