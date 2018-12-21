<?php
class ConNguoi{
    public $name;
    public $mat;
    public $mui;
    const SOCHAN = 2;
    //khai bao phuong thuc
    public function an(){
    }
    public function noi($caunoi)
    {
        //Goi phuong thuc trong Class
        return $this->getSoChan();
    }
    public function di()
    {
    }
    public function getName()
    {
        //Goi thuoc tinh dong trong Class
        return $this->name;
    }
    public function getSoChan()
    {
        //Goi thuoc tinh Const trong Class
        return self::SOCHAN;
    }
}
//Khoi tao Class
$connguoi = new ConNguoi();
//Goi thuoc tinh ngoai Class va gan gia tri moi cho thuoc tinh
$connguoi ->name = 'Vu Thanh Tai';
//Goi lai thuoc tinh de xem thay doi
echo $connguoi->name;
//Goi phuong thuc
echo $connguoi->noi('Vu Thanh Tai');
?>