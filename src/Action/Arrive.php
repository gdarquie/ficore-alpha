<?php


namespace Ficore\Action;


use Ficore\Model\Resource\Character;
use Ficore\Model\Resource\Place;

class Arrive implements ActionInterface
{
    CONST ARRIVE_ACTION_TYPE = 'arrive';

    private string $actionType = self::ARRIVE_ACTION_TYPE;
    private Character $source;
    private Place $place;

    public function __construct(Character $source, Place $place)
    {
        $this->source = $source;
        $this->place = $place;
    }

    public function getActionType(): string
    {
        return $this->actionType;
    }

    public function getSource(): Character
    {
        return $this->source;
    }

    public function setSource(Character $source): void
    {
        $this->source = $source;
    }

    public function getPlace(): Place
    {
        return $this->place;
    }

    public function setPlace(Place $place): void
    {
        $this->place = $place;
    }
}