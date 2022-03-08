<?php

class abc{
    public static $data="sachin";

    public static function getData(){
        return static::$data;
    }
}
class xyz extends abc{
    public static $data="ravi";
}


echo xyz::getData();