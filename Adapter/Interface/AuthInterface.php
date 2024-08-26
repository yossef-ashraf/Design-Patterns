<?php

namespace Pattern\Adapter\Interface;

interface AuthInterface
{
    public function login(array $prams) : string;

}
