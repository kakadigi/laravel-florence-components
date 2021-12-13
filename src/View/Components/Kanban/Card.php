<?php

namespace Kakadigi\FlorenceComponent\View\Components\Kanban;

use Kakadigi\FlorenceComponent\View\Components\Kanban\KanbanComponent;

class Card extends KanbanComponent
{
    public string $title;
    public string $pic;
    public string $date;
    public array $progress;

    public function __construct(
        ?string $title = null,
        ?string $pic = null,
        ?string $date = null,
        ?array $progress = []
    )
    {
        parent::__construct();
        $this->title = $title;
        $this->pic = $pic;
        $this->date = $date;
        $this->progress = $progress;
    }
}