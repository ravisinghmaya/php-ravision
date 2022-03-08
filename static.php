<?php

class abc{
    public static $data;
    public function __construct(){
        
    }
    
    public static function fruit(){
       return self::$data = "test";
    }
}
echo abc::fruit();
//abc::fruit();
//$data = new abc();
//$data->fruit();