<?php

namespace Pattern\SimpleFactory;
use Pattern\SimpleFactory\Interface\DrinkInterface;

class SimpleFactory
{
    
    public function createJuice(string $juiceType): DrinkInterface
    {
            $juiceType = ucfirst($juiceType);
            $juice = "Pattern\SimpleFactory\Model\\".$juiceType."Juice";
            if(class_exists($juice)){
                return new $juice();
            }
            throw new \InvalidArgumentException('Juice type is not valid');
    }
    
    

}
