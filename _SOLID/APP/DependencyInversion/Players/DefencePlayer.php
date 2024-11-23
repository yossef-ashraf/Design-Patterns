<?php 

namespace APP\DependencyInversion\Players;

use APP\DependencyInversion\Interfaces\DefenceInterfaces;
use APP\DependencyInversion\Interfaces\PlayerInterfaces;

class DefencePlayer implements PlayerInterfaces ,DefenceInterfaces
{
    
    public function player()
    {
        return $this->defence();
    }
    
    public function defence()
    {
        echo "Defence Player .\n";
    }

}