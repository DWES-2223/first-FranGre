<?php
include_once "Persona8.php";
const TAXES_LIMIT = 3333;
class Empleado extends Persona8
{
    private $salary;
    private $numbersPhone;

    /**
     * @param $salary
     * @param $numbersPhone
     */
    public function __construct( string $name, string $surname, int $salary )
    {
        parent::__construct( $name, $surname );
        $this->salary = $salary;
        $this->numbersPhone = [];
    }


    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary( $salary ): void
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getNumbersPhone()
    {
        return $this->numbersPhone;
    }

    /**
     * @param mixed $numbersPhone
     */
    public function setNumbersPhone( $numbersPhone ): void
    {
        $this->numbersPhone = $numbersPhone;
    }


    public function addMobilePhone( int $phoneNumber ): void
    {
        $this->numbersPhone[] = $phoneNumber;
    }

    public function listMobilePhones(): string
    {
        // implode(","$this->getNumbersPhone());
        $phones = "";
        foreach ( $this->getNumbersPhone() as $numberPhone ) {
            $phones .= $numberPhone . ", ";
        }
        return substr( $phones, 0, count( $this->getNumbersPhone() ) - 3 );
    }

    public function deleteAllPhones(): void
    {
        $this->setNumbersPhone( [] );
    }

    public function haveToPaytaxes(): bool
    {
        return $this->getSalary() > TAXES_LIMIT;
    }

    public function __toString(): string
    {
        return  parent::print(). "<br> $this->salary €";
    }
}