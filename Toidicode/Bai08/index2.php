<?php
interface DongVat
{
    public function getName();
}
interface ConTrau extends DongVat
{
    public function checkSung();
}
class ConNghe implements ConTrau
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