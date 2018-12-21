<?php
class Foo
{
    public function __construct()
    {
        echo 'Class Foo duoc khoi tao';
    }
    public function getMessage(){
        echo 'Day la Class Foo';
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        //Class Foo duoc huy
    }
}
$foo = new Foo();
//Ket qua Class Foo duoc khoi tao
$foo->getMessage();
//Ket qua: Day la Class Foo
//Ket qua: Class Foo duoc huy
?>