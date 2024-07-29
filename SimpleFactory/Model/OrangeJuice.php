<?php

namespace Pattern\SimpleFactory\Model;
use Pattern\SimpleFactory\Interface\DrinkInterface;

class OrangeJuice implements DrinkInterface
{
    public function pour():string{
        return "Pouring Orange Juice";
    }
    
}
