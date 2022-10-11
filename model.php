<?php

class Model
{
    public function __construct(private string $name, private  $country,private Datetime $productionDate,private string $techSpec)
    {
    }

    public function getTechSpec(): string
    {
        return $this->techSpec;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getCountry(): Country
    {
        return $this->country;
    }
    public function getProductionDate():DateTime{
        return $this->productionDate;
    }
}