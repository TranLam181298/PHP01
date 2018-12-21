<?php
trait Name
{
    private $name = 'Vu Thanh Tai';
    private function getName()
    {
        return $this->name;
    }
}
class ConNguoi
{
    use Name
    {
        //thay doi visibility thanh public
        getName as public;
    }
}
$connguoi = new ConNguoi();
echo $connguoi->getName();
?>