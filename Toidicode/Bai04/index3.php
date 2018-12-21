<?php
class Person
{
    public $name;
    function setName($name)
    {
        //Dung vi su dung trong class con
        $this->name = $name;
    }
    function getName()
    {
        //Dung vi su dung trong class con
        return $this->name;
    }
}
//Khoi tao Class
$person = new Person();
//tac dong vao thuoc tinh name
$person->name = 'Vu Van A';
//tac dong vao bien name thong qua ham setName
$person->setName('Vu Thanh Tai');
echo $person->getName();