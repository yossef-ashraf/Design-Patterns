<?php

namespace APP\InterfaceSegregation ;

use APP\InterfaceSegregation\Interfaces\Operations as OperationsInterface;
use APP\InterfaceSegregation\Interfaces\READ as READInterface;

class Operations implements OperationsInterface , READInterface
{
    public function store()
    {
        echo 'store';
    }

    public function update()
    {
        echo 'update';
    }

    public function delete()
    {
        echo 'delete';
    }

    public function read()
    {
        echo 'read';
    }


}
