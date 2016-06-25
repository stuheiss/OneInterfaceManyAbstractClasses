<?php
namespace My;

class MyStringAndInt extends AbstractMyStringAndInt
{
    public function foo(string $str, int $int)
    {
        echo get_class($this)."::foo($str, $int)\n";
    }
}
