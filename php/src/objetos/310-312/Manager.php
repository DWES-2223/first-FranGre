<?php

class Manager extends Worker
{
    private float $salary;

    public function __construct( string $nombre, string $apellidos, int $edad )
    {
        parent::__construct( $nombre, $apellidos, $edad );
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary( float $salary ): void
    {
        $this->salary = $salary;
    }

    function calculateSalary(): float
    {
        return $this->getSalary() + $this->getSalary() * parent::getEdad() / 100;
    }
}