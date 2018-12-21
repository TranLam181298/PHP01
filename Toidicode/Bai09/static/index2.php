<?php
class ConNguoi
{
    private static $name = 'Vu Thanh Tai';
    public static function getName()
    {
        //goi thuoc tinh tinh
        return self::$name;
        // return ConNguoi::$name;
    }
    public function showAll()
    {
        //goi phuong thuc tinh
        return self::getName();
        //return ConNguoi::getName();
    }
}
//ngoai Class
ConNguoi::$name; //goi thuoc tinh tinh
ConNguoi::showAll(); //goi phuong thuc tinh
?>