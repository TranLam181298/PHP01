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
    use Name{
        //Dinh danh moi cho getName
        getName as public doName;
    }
}
$connguoi = new ConNguoi();
echo $connguoi->doName();
?>