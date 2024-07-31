<?php

namespace Pattern\StaticFactory\Cars;
use Pattern\StaticFactory\Interface\CarInterface;

class BMW implements CarInterface
{
    public function model():string {
        return 'BMW';
    }

}
