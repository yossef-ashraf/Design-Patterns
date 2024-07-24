<?php

namespace Pattern\ProtoType;


class AutomaticCarProtoType extends AbstractCarProtoType
{
    
    protected $model = 'Automatic';

     public function __clone()
    {
        // $this->model = clone $this->model;
    }
    


}
