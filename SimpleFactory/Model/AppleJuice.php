<?php

namespace Pattern\SimpleFactory\Model;
use Pattern\SimpleFactory\Interface\DrinkInterface;

class AppleJuice implements DrinkInterface
{
    public function pour():string{
        return "Pouring Apple Juice";
    }
}
