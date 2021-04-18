<?php


namespace Ficore\Model\Resource;


final class Character extends Resource
{
    protected string $fullname;

    public function __construct(string $fullname)
    {
        $this->fullname = $fullname;
    }
}