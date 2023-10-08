<?php

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


    function toHTML( Person $person )
    {
        ?>
        <p>
            <?php
            parent::getFullName() . " cobro " . $this->calculateSalary() . " € mensuales";
            ?>
        </p>
        <?php

    }

    function calculateSalary(): float
    {
        return $this->getHoursWorked() * $this->getPricePerHour();
    }
}