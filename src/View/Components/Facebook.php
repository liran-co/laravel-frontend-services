<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\View\BaseComponent;

class Facebook extends BaseComponent
{
    public $appId;
    
    public function __construct()
    {
        $this->appId = config('services.facebook.app_id');
    }
    
    public function render()
    {
        return view('services::components.facebook');
    }
}
