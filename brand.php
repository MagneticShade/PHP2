<?php

class Brand {

    public function __construct(private string $name,private  $country)
    {
    }
    public function getName():string{
        return $this->name;
    }
    public function getCountry():Country{
        return $this->country;
    }

}