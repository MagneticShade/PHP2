<?php
class CarInfo{

    public function __construct(private  $brand,private  $model)
    {
    }
    public function getBrand(): Brand{
        return $this->brand;
    }
    public function getModel():Model{
        return $this->model;
    }
    public function changeBrand(string $newBrand):void{
        $this->brand=$newBrand;
    }

}
