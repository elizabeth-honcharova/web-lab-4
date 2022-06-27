<?php

class ParentClass
{
    private $var1;
    private $var2;

    public function __construct($var1, $var2) {
        $this->var1 = $var1;
        $this->var2 = $var2;
    }

    public function getVar1()
    {
        return $this->var1;
    }

    public function setVar1($var1)
    {
        $this->var1 = $var1;
    }

    public function getVar2()
    {
        return $this->var2;
    }

    public function setVar2($var2)
    {
        $this->var2 = $var2;
    }

    public function __toString()
    {
        try
        {
            return $this->getVar1() . " - " . $this->getVar2() . "\n";
        }
        catch (Exception $exception)
        {
            return '';
        }
    }
}