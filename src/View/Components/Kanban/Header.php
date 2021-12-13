<?php

namespace Kakadigi\FlorenceComponent\View\Components\Kanban;

use Kakadigi\FlorenceComponent\View\Components\Kanban\KanbanComponent;

class Header extends KanbanComponent
{
    public $title;
    public function __construct($title = null)
    {
        parent::__construct();
        $this->title = $title;
    }
}
