<?php

trait MyTrait
{


    public function myMethod()
    {
        echo 'MyTrait';
    }
}

trait MyTrait1
{


    public function myMethod1()
    {
        echo 'MyTrait1';
    }
}


class Example
{
    public function myMethod()
    {
        echo 'Example class';
    }
}

// Define a class that uses the trait
class MyClass extends Example {
    // Use the Greeting trait in this class
    use MyTrait,MyTrait1;

    public function greet() {
        // Access the method from the trait
        echo $this->myMethod() . "World!";
    }
}


 $b= new MyClass();
 $b->greet();