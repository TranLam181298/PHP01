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
        echo 'Class Foo duoc khoi tao';
    }
    public function __destruct()
    {
        echo 'Class Foo duoc huy';
    }
}
$foo = new Foo();
?>