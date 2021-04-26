<?php


namespace Ficore\Action;


use Ficore\Model\Resource\Character;
use Ficore\Model\Resource\Place;

class Kill implements ActionInterface
{
    CONST KILL_ACTION_TYPE = 'kill';

    private Character $source;
    private Character $target;
    private string $output;

    public function __construct(Character $source, Character $target)
    {
        $this->source = $source;
        $this->target = $target;
        $this->output = $this->computeOutput($source, $target);
    }

    public function getSource(): Character
    {
        return $this->source;
    }

    public function getTarget(): Character
    {
        return $this->target;
    }

    public function getOutput(): string
    {
        return $this->output;
    }

    private function computeOutput(Character $source, Character $place)
    {
        return $source->getFullname() . " tue " . $place->getFullname();
    }
}
