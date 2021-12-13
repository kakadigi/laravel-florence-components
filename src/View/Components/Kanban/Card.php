<?php

namespace Kakadigi\FlorenceComponent\View\Components\Kanban;

use Kakadigi\FlorenceComponent\View\Components\Kanban\KanbanComponent;

class Card extends KanbanComponent
{
    public $title;
    public $pic;
    public $date;
    public $progress;


    public function __construct($title = null, $pic = null, $date = null, $progress = [])
    {
        parent::__construct();
        $this->title = $title;
        $this->pic = $pic;
        $this->date = $date;
        $this->progress = $progress;
    }
}
