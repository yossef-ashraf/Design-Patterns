<?php

namespace Pattern\Adapter\Auth;
use BasicAuth\BasicAuth;
use Pattern\Adapter\Interface\AuthInterface;
// use Pattern\Adapter\Vendor\BasicAuth;

class AdapterBasicAuth implements AuthInterface
{

    private $BasicAuth;

    public function __construct(BasicAuth $BasicAuth) {
        $this->BasicAuth =$BasicAuth;
    }

    public function login(array $prams) : string {
        return $this->BasicAuth->basicLogin($prams['username'] , $prams['password']);
    }



}
