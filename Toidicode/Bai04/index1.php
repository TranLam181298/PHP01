<?php
class Person
    {
        private $name;
        private function run()
        {
            return 'Day la ham run';
        }
        function setName($name)
        {
            $this->name = $name;
        }
        function getName()
        {
            return $this->name;
        }
        function getRunMethod()
        {
            return $this->run();
        }
    }
//Khoi tao Class
$person = new Person();
//set thuoc tinh name
$person->setName('Vu Thanh Tai');
//Lay ra thuoc tinh name
echo $person->getName();
//Goi gia tri cua phuong thuc run
echo  $person->getRunMethod();
?>