<?php

namespace Kakadigi\FlorenceComponent\View\Components\Page;

use Kakadigi\FlorenceComponent\View\Components\Component;

abstract class PageComponent extends Component
{
    public function __construct()
    {
        parent::__construct('page');
    }
}
