<?php


namespace Ficore\Action;


use Ficore\Model\Resource\Character\Character;
use Ficore\Model\Resource\Place;

class Arrive implements ActionInterface
{
    CONST ARRIVE_ACTION_TYPE = 'arrive';

    private string $actionType = self::ARRIVE_ACTION_TYPE;
    private Character $source;
    private Place $place;
    private string $output;

    public function __construct(Character $source, Place $place)
    {
        $this->source = $source;
        $this->place = $place;
        $this->output = $this->computeOutput($source, $place);
    }

    public function getActionType(): string
    {
        return $this->actionType;
    }

    public function getSource(): Character
    {
        return $this->source;
    }

    public function getPlace(): Place
    {
        return $this->place;
    }

    public function getOutput(): string
    {
        return $this->output;
    }

    private function computeOutput(Character $source, Place $place)
    {
        return $source->getFullname() . " arrive à " . $place->getTitle();
    }
}
