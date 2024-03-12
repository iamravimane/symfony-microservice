<?php

class MyClass{


    private $property1;
    private $property2;


    private function __construct($pro1, $pro2 )
    {
        
        $this->property1 = $pro1;
        $this->property2 = $pro2;
    }

    public static function createWithProperty1($pro1)
    {
        return new self($pro1 , null);
    }

    public static function createWithProperty2($pro2)
    {
        return new self(null , $pro2);
    }


}