<?php

 abstract class fruit{
    public function __construct(){
        echo "demo here";
    }
     public abstract function mango();

    public function test(){
        echo "test here";
    }
}
class orange extends fruit{
    public function mango(){
        echo "test";
    }
}
$data = new orange();
$data->mango();
$data->test();