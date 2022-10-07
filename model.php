<?php

class Model
{
    public function __construct(private string $name, private  $country,private DateTime $startProductionDate,private Datetime $productionDate,private string $techSpec)
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
    public function getStartProductionDate():DateTime{
        return $this->startProductionDate;
    }
    public function getProductionDate():DateTime{
        return $this->productionDate;
    }
}