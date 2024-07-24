<?php

namespace Pattern\Clone;

class Engine {
    public $horsepower;
    public $fast;

    public function __construct($horsepower , $fast) {
        $this->horsepower = $horsepower;
        $this->fast = $fast;
    }
}
