<?php


namespace Ficore\Domain\Character;


use Ficore\Model\Resource\Character;

class CharacterFactory
{
    public function __invoke(string $name)
    {
        return new Character($name);
    }
}