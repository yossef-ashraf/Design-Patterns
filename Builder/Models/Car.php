<?php

namespace Pattern\Builder\Models;

class Car
{
    private $data=[];

    public function setPart($name , $val){
        $this->data[$name] = $val ;
    }
}
