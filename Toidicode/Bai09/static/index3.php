<?php
class ConNguoi
{
    private static $name = 'Vu Thanh Tai';
    public static function getName()
    {
        return ConNguoi::$name;
    }
}
class NguoiLon extends ConNguoi
{
    public function getName()
    {
        parent::getName();
    }
}
?>