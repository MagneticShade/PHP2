<?php

class Owner
{
/* Отчество $middleName это необязательный параметр,чтобы сделать параметр необязательным нужно придать ему значение,
чтобы избажать конфликтов необязательные функции нужно записывать в конце. */
    public function __construct(private string $firstName,private string $lastName,private string $email,private string $phoneNumber, private string $middleName = '')
    {
    }
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }
    public function setMiddleName(string $middleName) : void
    {
        $this->middleName = $middleName;
    }
}

