<?php

namespace APP\InterfaceSegregation ;

use APP\InterfaceSegregation\Interfaces\Operations as OperationsInterface;
use APP\InterfaceSegregation\Interfaces\Read as READInterface;

class Read implements READInterface
{
    //  to read only
    public function read()
    {
        echo 'read';
    }


}
