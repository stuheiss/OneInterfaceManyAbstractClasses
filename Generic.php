<?php
namespace My;

class Generic extends AbstractGeneric
{
    public function foo()
    {
        echo get_class($this)."::foo()\n";
    }
}
