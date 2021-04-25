<?php

namespace Ficore\Model\Resource;

use Symfony\Component\Uid\Uuid;

final class Character extends Resource
{
    protected string $fullname;
    protected string $uuid;

    public function __construct(string $fullname)
    {
        $this->fullname = $fullname;
        $this->uuid =  Uuid::v4();
    }

    public function getFullname(): string
    {
        return $this->fullname;
    }

    public function getUuid()
    {
        return $this->uuid;
    }
}
