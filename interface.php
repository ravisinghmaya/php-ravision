<?php

interface cricket{
   public function cricketDescription();
}
interface football{
   public function footballDescription();
}

class sport implements cricket,football{
    public function cricketDescription(){
        echo "cricket here";
    }
    public function footballDescription(){
        echo "football here";
    }
}
$data = new sport();
$data->cricketDescription();
