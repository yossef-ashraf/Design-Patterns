<?php 

namespace APP\SingleResponsibility;

// use APP\SingleResponsibilityUser\login;
// use APP\SingleResponsibilityUser\register;


class SingleResponsibilityUser{

    private $log;
    private $register;

    public function __construct(login $log, register $register){
        $this->log = $log;
        $this->register = $register;
    }

}












