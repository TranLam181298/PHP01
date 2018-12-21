<?php
trait Name
{
    private static $name = 'Chua xet';
    public function setName($name)
    {
        self::$name= $name;
    }
    public function getName()
    {
        return self::$name;
    }
}
class ConNguoi
{
    use Name;
}
$connguoi = new ConNguoi();
$connguoi->setName('Vu Thanh Tai');
echo $connguoi->getName();
$trecon = new ConNguoi();
echo $trecon->getName();
$nguoilon = new NguoiLon();
echo $nguoilon->getName();
?>