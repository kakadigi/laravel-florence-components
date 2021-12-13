<?php

namespace Kakadigi\FlorenceComponent\View\Components\Kanban;

use Kakadigi\FlorenceComponent\View\Components\Component;

abstract class KanbanComponent extends Component
{
    public function __construct()
    {
        parent::__construct('kanban');
    }
}
