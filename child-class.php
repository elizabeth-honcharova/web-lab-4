<?php

class ChildClass extends ParentClass
{
    private $var3;

    public function __construct($var1, $var2, $var3) {
        parent::__construct($var1, $var2);
        $this->var3 = $var3;
    }

    public function getVar3()
    {
        return $this->var3;
    }

    public function setVar3($var3)
    {
        $this->var3 = $var3;
    }

    public function __toString()
    {
        try
        {
            return $this->getVar1() . " - " . $this->getVar2() . " - " . $this->getVar3() . "\n";
        }
        catch (Exception $exception)
        {
            return '';
        }
    }
}