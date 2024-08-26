<?php

namespace BasicAuth;

class BasicAuth
{

    public function basicLogin(string $username , string $password) : string {
        return $username .'-'. $password;
    }

}
