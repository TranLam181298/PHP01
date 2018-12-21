<?php
class ConNguoi
{
    private  static $name = 'amonymouse';
    public function setName($name)
    {
        self::$name = $name;
    }
    public function getName()
    {
        return self::$name;
    }
}
//Khoi tao doi tuong con nguoi
$chuBlog = new ConNguoi();
$chuBlog ->setName('Vu Thanh Tai');
echo $chuBlog->getName();
$nguoixem = new ConNguoi();
echo $nguoixem->getName();
?>