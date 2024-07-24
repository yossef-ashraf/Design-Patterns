<?php

namespace Pattern\ProtoType;


class ManualCarProtoType extends AbstractCarProtoType
{
    
    protected $model = 'Manual';

    public function __clone()
    {
    
    }
    
    
}
