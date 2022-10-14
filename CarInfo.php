<?php

class CarInfo{
/* об я этом я уже говорил,но здесь вызываются другие функции
про порядок я уже тоже сказал, Brand, Owner, и Model
типы мы им не ставим так,как это не переменные, а ссылки на классы
а вот что сказать нужно так это разница между Get и Set
Get( public function GETBrand) позволяет установить параметр( тут это класс)для чтения,то есть информацию можно только задать,изменять её в коде нельзя
Set ( public function setMiddleName см. класс Owner) же позволяет изменять параметр уже после создания,
*/
    /*кстати public function __construct это конструктор функций,он объявляет параметры,которые потом получает через функции get/set */
    public function __construct(private  $brand,private $owner,private  $model,)
    {
    }
    public function getBrand(): Brand{
        return $this->brand;
    }
    public function getOwner():Owner{
        return $this->owner;
    }
    public function getModel():Model{
        return $this->model;
    }
    public function changeBrand(string $newBrand):void{
        $this->brand=$newBrand;
    }

}
