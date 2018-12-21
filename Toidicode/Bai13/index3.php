<?php
trait Name
{
    private $name = 'Vu Thanh Tai';
    abstract public function getName();
}
class ConNguoi
{
    use Name;
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
}
$connguoi = new ConNguoi();
echo $connguoi->getName();
?>