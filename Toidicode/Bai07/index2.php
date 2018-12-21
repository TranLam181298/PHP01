<?php
abstract class DongVat
{
    protected $name;
    abstract protected function getName();
}
class ConTrau extends DongVat
{
    public function getName()
    {
        // TODO: Implement getName() method.
        return $this->name;
    }
}
?>