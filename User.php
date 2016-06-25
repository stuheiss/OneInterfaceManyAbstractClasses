<?php
namespace My;

class User
{
    private $uid;
    private $name;

    public function __construct(int $uid, string $name)
    {
        $this->uid = $uid;
        $this->name = $name;
    }

    public function getUid()
    {
        return $this->uid;
    }

    public function getName()
    {
        return $this->name;
    }
}
