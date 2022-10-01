<?php
//
class User{
    private ?string $middleName = null;
     public function __construct(private string $surname,private string $name,private string $date ){
    }
    public function getName():string{
        return $this->name;
    }
     public function getSurname():string{
         return $this->surname;
     }
     public function getDate():string{
         return $this->date;
     }
    public function getmiddleName():?string{
         return $this->middleName;
    }
    public function setmiddleName():void{
         $this->middleName=$middleName;
    }
    public function GetFullName():string{
        return $this->getName.
        $this->getSurname.
        $this->getDate;
    }
 }
$user1=new User(surname:'ПЫХИН',name:'ИВАН',date:'1999-1-1' );
 echo $user1->getSurname();
echo $user1->getName();
echo $user1->getDate();
echo $user1->GetFullName();
/