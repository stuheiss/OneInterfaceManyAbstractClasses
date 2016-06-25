<?php
namespace My;

abstract class AbstractMyString implements InterfaceMyContract
{
    public function bar(string $str)
    {
        echo get_class($this)."::bar($str)\n";
    }
    abstract public function foo(string $str);
}
