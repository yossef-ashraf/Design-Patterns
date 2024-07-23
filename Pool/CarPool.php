<?php

namespace Pattern\Pool;

class CarPool
{
    /**
     * Summary of busyCar
     * @var Car[]
     */
    private $busyCar = [];
    
        /**
     * Summary of freeCar
     * @var Car[]
     */

    private $freeCar = [];

    public function rentCar():Car{
        if(count($this->freeCar) == 0){
            $car = new Car();
        }else{
            $car = array_pop($this->freeCar);
        }
        $this->busyCar[spl_object_hash($car)] = $car;
        return $car;
    }

    public function freeCar(Car $car):void{
        $id = spl_object_hash($car);
        if(isset($this->busyCar[$id])){
            unset($this->busyCar[$id]);
            $this->freeCar[$id] = $car;
        }
    }

    public function getCountFreeCar(): int
    {
        return count($this->freeCar);
    }

    public function getCountRentCar(): int
    {
        return count($this->busyCar);
    }

    public function getFreeCar(): array
    {
        return $this->freeCar;
    }

    public function getRentCar(): array
    {
        return $this->busyCar;
    }

    
    
}
