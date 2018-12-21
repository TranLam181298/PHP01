<?php
interface DongVat
{
    public function getName();
}
interface ConTrau
{
    public function checkSung();
}
class ConNghe implements DongVat,ConTrau
{
    private $name;
    const SUNG = false;
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
    public function checkSung()
    {
        // TODO: Implement checkSung() method.
        return self::SUNG;
    }
}
?>