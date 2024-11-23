<?php 

namespace APP\DependencyInversion\Players;

use APP\DependencyInversion\Interfaces\AttackInterfaces;
use APP\DependencyInversion\Interfaces\PlayerInterfaces;

class AttackPlayer implements PlayerInterfaces ,AttackInterfaces
{
    
    public function player()
    {
        return $this->attack();
    }
    
    public function attack()
    {
        echo "Attack Player .\n";
    }

}
