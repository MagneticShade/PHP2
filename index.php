<?php
$car= new CarInfo(
    brand: new Brand(
        name:'BMW',
        country:new Country('Germany','eu','+2'),
        owner:new Owner('Вася')
    ),
    model: new Model(
        name:'x5',
        country:new Country('Swedish','eu','+2'),
        productionDate:new DateTime('2022-01-10'),
        techSpec:'asdf' ),
);
echo($car->getBrand()->getName());
