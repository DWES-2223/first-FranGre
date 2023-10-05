<?php
const RETIRED_AGE = 65;
class Persona8
{
    private static $retiredAge = RETIRED_AGE;
    private $name;
    private $surname;
    private $age;

    public function __construct( string $name, string $surname, ?int $age = 25 )
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName( string $name )
    {
        $this->name = $name;
    }

    public function setSurname( string $surname )
    {
        $this->surname = $surname;
    }

    public function setAge( int $age )
    {
        $this->age = $age;
    }

    public function getFullName(): string
    {
        return $this->getName() . " " . $this->getSurname();
    }

    public function isRetired()
    {
        return $this->getAge() > RETIRED_AGE;
    }

    public static function modifyRetiredAge( int $age )
    {
        self::$retiredAge = $age;
    }

}