<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\View\BaseComponent;

class Intercom extends BaseComponent
{
    public $appId;
    
    public function __construct()
    {
        $this->appId = config('services.intercom.app_id');
    }
    
    public function render()
    {
        return view('services::components.intercom');
    }
}
