<?php

abstract class Worker extends Person
{
    const RANGE_PAY_TAXES = 35000;
    private array $phones;

    function __construct( string $nombre, string $apellidos, int $edad )
    {
        parent::__construct( $nombre, $apellidos, $edad );
    }

    public function getPhones(): array
    {
        return $this->phones;
    }

    public function setPhones( array $phones ): void
    {
        $this->phones = $phones;
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

    abstract function calculateSalary(): float;

    public function havePayTaxes(): bool
    {
        return self::RANGE_PAY_TAXES >= $this->calculateSalary();
    }
}