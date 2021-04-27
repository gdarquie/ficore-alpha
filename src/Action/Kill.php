<?php

namespace Ficore\Action;

use Ficore\Model\Resource\Character\Character;

class Kill implements ActionInterface
{
    CONST KILL_ACTION_TYPE = 'kill';

    private string $actionType = self::KILL_ACTION_TYPE;
    private Character $source;
    private Character $target;
    private string $output;

    public function __construct(Character $source, Character $target)
    {
        $this->source = $source;
        $this->target = $target;
        $this->output = $this->computeOutput($source, $target);
    }

    public function getActionType(): string
    {
        return $this->actionType;
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
