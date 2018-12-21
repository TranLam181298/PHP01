<?php
trait Name
{
    public static function getName()
    {
        return 'Name Trait';
    }
}
class ConNguoi
{
    use Name;
}
$connguoi = new ConNguoi();
echo $connguoi->getName();
echo ConNguoi::getName();
?>