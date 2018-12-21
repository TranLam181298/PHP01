<?php
class ParentClass{
    function getClass()
    {
        return 'ParentClass';
    }
}
class ChildClass extends ParentClass
    {
    var $name = 'ChildClass';
    function getclass(){
        return 'ChildClass';
    }
    function getMethod()
    {
        echo 'Day la phuong thuc an cua lop' . $this->getclass();
    }
    function getMethodParent(){
        echo 'Day la phuong thuc an cua lop' . parent::getclass();
    }
}
$class = new ChildClass();
$class->getMethod();
//Ket qua: Day la phuong thuc an cua lop Tre con
$class->getMethodParent();
//Ket qua: Day la phuong thuc an cua lop Nguoi lon
?>