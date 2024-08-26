<?php

namespace Pattern\Adapter;
use Pattern\Adapter\Interface\AuthInterface;

class Adapter
{

    private $AuthInterface;

    
    public function __construct(AuthInterface $AuthInterface){
        $this->AuthInterface = $AuthInterface;
    }

    public function login(array $prams) : string {
        return $this->AuthInterface->login($prams);
    }


}
