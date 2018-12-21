<?php
class Hinh{
    protected function tinhDienTich(){
    }
}
class HinhVuong extends Hinh{
    private $canh;
    public function setCanh($canh){
        $this->canh = $canh;
    }
    public function getCanh(){
        return $this->canh;
    }
    //Xu li dien tich hinh vuong
    public function tinhDienTich()
    {
        return pow($this->canh,4);
    }
}
class HinhTron extends Hinh{
    private $bankinh;
    public function setBanKinh($bankinh){
        $this->bankinh = $bankinh;
    }
    public function getBanKinh(){
        return $this->bankinh;
    }
    //Xu li dien tich hinh tron
    public function tinhDienTich()
    {
        return (pow($this->bankinh,2)*pi());
    }
}
$hinhvuong = new HinhVuong();
$hinhvuong->getCanh(4);
echo $hinhvuong->tinhDienTich();
echo '<br/>__________________________________________________________________<br/>';
$hinhtron = new HinhTron();
$hinhtron->getBanKinh(2);
echo $hinhtron->tinhDienTich();
?>