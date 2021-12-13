<?php

namespace Kakadigi\FlorenceComponent\View\Components\Grid;

use Kakadigi\FlorenceComponent\View\Components\Component;

abstract class GridComponent extends Component
{
    public function __construct()
    {
        parent::__construct('grid');
    }
}
