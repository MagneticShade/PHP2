<?php
class Brand {

    public function __construct(private string $name,private string $country,public string $owner)
    {
    }
    public function getName():string{
        return $this->name;
    }
    public function getCountry():Country{
        return $this->country;
    }
    public function getOwner():User{
        return $this->owner;
    }

}