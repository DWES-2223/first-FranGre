<?php

abstract class Person
{
    private string $nombre;
    private string $apellidos;
    private int $edad;

    public function __construct( string $nombre, string $apellidos, int $edad )
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->edad = $edad;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre( string $nombre ): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos( string $apellidos ): void
    {
        $this->apellidos = $apellidos;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad( int $edad ): void
    {
        $this->edad = $edad;
    }

    public function getFullName(): string
    {
        return $this->getNombre() . " " . $this->getApellidos();
    }

    public abstract function toHTML();

}