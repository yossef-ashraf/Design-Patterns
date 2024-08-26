<?php

namespace Pattern\Adapter\Auth;
use Pattern\Adapter\Interface\AuthInterface;
use TokenAuth\TokenAuth;
// use Pattern\Adapter\Vendor\TokenAuth;

class AdapterTokenAuth implements AuthInterface
{
    private $TokenAuth;

    public function __construct(TokenAuth $TokenAuth) {
        $this->TokenAuth =$TokenAuth;
    }

    public function login(array $prams) : string {
        return $this->TokenAuth->tokenLogin($prams['key'] , $prams['token']);
    }

}
