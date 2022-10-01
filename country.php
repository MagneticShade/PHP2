<?php
class Country{
    function __construct(private string $name,private string $region,private string $timezone)
    {
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }
}