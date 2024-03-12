<?php


class ParentClass{

protected $name;

protected function sayHello()
{

    echo  "Hello , $this->name";
}


}




class ChildClass extends ParentClass
{

    public function __construct($name)
    {
        $this->name = $name;
        
    }


        
    public function greet()
    {
        return $this->sayHello();
    }
}



class GrandChild extends ChildClass
{

    public function __construct($realName)
    {
        $this->name = $realName ;       
    }

    public function greetInGrandChild()
    {
        return $this->sayHello();
    }
}


