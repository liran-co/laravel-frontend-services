<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\View\BaseComponent;

class Heap extends BaseComponent
{
    public $appId;
    
    public function __construct()
    {
        $this->appId = config('services.heap.app_id');
    }
    
    public function render()
    {
        return view('services::components.heap');
    }
}
