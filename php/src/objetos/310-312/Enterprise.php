<?php
include_once("Worker.php");
include_once("Employee.php");
include_once("Manager.php");

class Enterprise implements JSerializable
{
    private string $name;
    private string $address;
    private array $workers;

    public function __construct( string $name, string $address )
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName( string $name ): void
    {
        $this->name = $name;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress( string $address ): void
    {
        $this->address = $address;
    }

    public function getWorkers(): array
    {
        return $this->workers;
    }

    public function addWorker( Worker $worker ): void
    {
        $this->workers[] = $worker;
    }

    public function listWorkersHtml(): void
    {
        foreach ( $this->getWorkers() as $worker ) {
            ?>
            <p>
                <?php
                $worker::toHtml();
                ?>
            </p>
            <?php
        }
    }

    public function getAllPaysheet(): float
    {
        $totalPaysheet = 0;
        foreach ( $this->getWorkers() as $worker ) {
            $totalPaysheet += $worker->calculateSalary();
        }
        return $totalPaysheet;
    }

    public function presentation(): void
    {
        ?>
        <p>
            <?=
            $this->getName() . " situada en " . $this->getAddress();
            ?>
            <br>
        </p>
        <?php

    }


    public function toJSON(): string
    {
        $mapa = array();
        $mapa[] = ["name" => $this->getName()];
        $mapa[] = ["addres" => $this->getAddress()];
        foreach ( $this->getWorkers() as $clave => $valor ) {
            $mapa[$clave] = $valor;
        }
        return json_encode( $mapa );
    }

    public function toSerialize(): string
    {
        return serialize( $this );
    }
}