<?php

namespace APP\Liskov;
use APP\Liskov\Code\ChildClass;
use APP\Liskov\Code\ParentClass;

class Liskov  {

    public function __construct() {
        $Class = new ChildClass ;
        // $Class = new ParentClass ;
        echo $Class->print();
    }
}


