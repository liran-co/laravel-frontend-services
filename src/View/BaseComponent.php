<?php

namespace LiranCo\FrontendServices\View;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;

abstract class BaseComponent extends Component
{
    public $show;
    
    public function __construct($show = true)
    {
        $this->show = $show;
    }

    public function render()
    {
        return $this->show ? view('services::components.' . $this->getServiceName()) : '';
    }
}
