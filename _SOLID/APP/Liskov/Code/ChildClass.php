<?php 

namespace APP\Liskov\Code;

class ChildClass extends ParentClass 
{
    // over write 
    public function print():string{
        // will over write function but save type return 
        //  parent::print(); 
        return " Child Class" ;
    }

}
