<?php


namespace Pattern\ProtoType;

abstract class AbstractCarProtoType
{
    
    protected $model;
    // protected $color;
    // protected $manufacturer;
    
    abstract public function __clone();
    
    public function getModel()
    {
        return $this->model;
    }
    
    public function setModel($model)
    {
        $this->model = $model;
    }
    
    // public function getColor()
    // {
    //     return $this->color;
    // }
    
    // public function setColor($color)
    // {
    //     $this->color = $color;
    // }
    
    // public function getManufacturer()
    // {
    //     return $this->manufacturer;
    // }
    
    // public function setManufacturer($manufacturer)
    // {
    //     $this->manufacturer = $manufacturer;
    // }
    
    // public function __toString()
    // {
    //     return $this->manufacturer . ' ' . $this->model . ' ' . $this->color;
    // }
    

}
