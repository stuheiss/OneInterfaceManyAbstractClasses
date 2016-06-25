<?php
namespace My;

abstract class AbstractGeneric implements InterfaceMyContract
{
    public function bar(string $str)
    {
        echo get_class($this)."::bar($str)\n";
    }
    abstract public function foo();
}
