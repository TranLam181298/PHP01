<?php
class Bar
{
    public function __construct()
    {
        echo 'Class Bar duoc khoi tao';
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo 'Class Bar duoc huy';
    }
}
class Foo extends Bar
{
    public function __construct()
    {
        //Goi phuong thuc khoi tao cua Class cha
        parent::__construct();
        echo 'Class Foo duoc khoi tao';
    }
    public function __destruct()
    {
        //Goi phuong thuc huy cua Class cha
        parent::__destruct();
        echo 'Class Foo duoc huy';
    }
}
$foo = new Foo();
?>