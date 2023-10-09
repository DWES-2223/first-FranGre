<?php
include_once("Worker.php");

class Employee extends Worker
{
    private float $hoursWorked;
    private float $pricePerHour;

    public function __construct( string $nombre, string $apellidos, int $edad )
    {
        parent::__construct( $nombre, $apellidos, $edad );
    }

    public function getHoursWorked(): float
    {
        return $this->hoursWorked;
    }

    public function setHoursWorked( float $hoursWorked ): void
    {
        $this->hoursWorked = $hoursWorked;
    }

    public function getPricePerHour(): float
    {
        return $this->pricePerHour;
    }

    public function setPricePerHour( float $pricePerHour ): void
    {
        $this->pricePerHour = $pricePerHour;
    }

    public function calculateSalary(): float
    {
        return $this->getHoursWorked() * $this->getPricePerHour();
    }
}