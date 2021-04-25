<?php


namespace Ficore\Model\Resource;


use App\Entity\Story;
use Ficore\Action\ActionInterface;
use Ficore\Model\Action\Action;

class Scene extends Resource
{
    private string $title;
    private Story $story;

    /**
     * @var ActionInterface[]
     */
    private array $actions;

    /**
     * @return Story
     */
    public function getStory(): Story
    {
        return $this->story;
    }

    /**
     * @param Story $story
     */
    public function setStory(Story $story): void
    {
        $this->story = $story;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return ActionInterface[]
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    public function addActions(ActionInterface $action): void
    {
        $this->actions[] = $action;
    }
}
