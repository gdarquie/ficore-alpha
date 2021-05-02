<?php


namespace Ficore\Model\Resource\Story;

use Ficore\Model\Fiction\Fiction;
use Ficore\Model\Resource\Character\Character;

class Story
{
    protected string $title;
    protected Fiction $fiction;
    protected array $characters;
    protected array $scenes;

    public function __construct(string $title, Fiction $fiction)
    {
        $this->setTitle($title);
        $this->setFiction($fiction);
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getFiction(): Fiction
    {
        return $this->fiction;
    }

    public function setFiction(Fiction $fiction): void
    {
        $this->fiction = $fiction;
    }

    /**
     * @param Character[] $characters
     */
    public function addCharacters(array $characters): void
    {
        foreach ($characters as $character) {
            $this->characters[] = $character;
        }
    }

    public function getCharacters(): array
    {
        return $this->characters;
    }

    public function setCharacters(array $characters): void
    {
        $this->characters = $characters;
    }

    public function getScenes(): array
    {
        return $this->scenes;
    }

    public function setScenes(array $scenes): void
    {
        $this->scenes = $scenes;
    }
}
