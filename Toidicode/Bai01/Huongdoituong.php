<?php
class Personnel
{
    private $name = 'Vu Van A';
    private $age = 20;
    public function getPersonnel()
    {
        return $this->name . '-' . $this->age;
    }
}