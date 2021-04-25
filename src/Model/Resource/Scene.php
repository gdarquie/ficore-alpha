<?php


namespace Ficore\Model\Resource;


use App\Entity\Story;
use Ficore\Model\Action\Action;

class Scene extends Resource
{
    private string $title;
    private Story $story;

    /**
     * @var Action[]
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
     * @return Action[]
     */
    public function getActions(): array
    {
        return $this->actions;
    }

    public function addActions(Action $action): array
    {
        $this->actions[] = $action;
    }
}
