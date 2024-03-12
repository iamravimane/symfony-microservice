<?php

class ImmutablePerson
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getUsername()
    {
        return $this->name;
    }

    public function getUserAge()
    {
        return $this->age;
    }

    public function withName($name)
    {
        return new self($name, $this->age);
    }
}


$person = new ImmutablePerson('John', 30);

echo $person->getUserAge();

$newPerson = $person->withName('Ravi');

echo $newPerson->getUsername();
