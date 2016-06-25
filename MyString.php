<?php
namespace My;

class MyString extends AbstractMyString
{
    public function foo(string $str)
    {
        echo get_class($this)."::foo($str)\n";
    }
}
