<?php
namespace My;

class MyUser extends AbstractMyUser
{
    public function foo(User $user)
    {
        echo get_class($this)."::foo(".var_export($user, true).")\n";
    }
}
