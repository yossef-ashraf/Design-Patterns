<?php

namespace Pattern\StaticFactory\Cars;
use Pattern\StaticFactory\Interface\CarInterface;

class Benz implements CarInterface
{
    public function model() : string{
        return 'Benz' ;
    }

}
