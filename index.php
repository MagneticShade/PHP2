<?php
class CarInfo{

    public function __construct(private string $brand,private string $model)
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
$car= new CarInfo(
    model: new Model(
        name:'x5',
        country:new Country('Swedish','eu','+2'),
        startProductionDate:'1990-01-01',
        productionDate:new DateTime('2022-01-10'),
        techSpec:'asdf' ),
    brand: new Brand(
        name:'BMW',
        country:new Country('Germany','eu','+2'),
        owner:new owner('Вася')
    ),
);
echo($car->getBrand()->getName());