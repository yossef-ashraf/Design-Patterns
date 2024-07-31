<?php

namespace Pattern\StaticFactory;

class StaticFactory 
{
    public static function factory (string $type) {

        $type = ucfirst($type);
        $type = "Pattern\StaticFactory\Cars\\".$type;
        if(class_exists($type)){
            return new $type();
        }
        throw new \InvalidArgumentException('type is not valid');
    
    }

}
