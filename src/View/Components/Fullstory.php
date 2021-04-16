<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\View\BaseComponent;

class Fullstory extends BaseComponent
{
    public $orgId;
    
    public $debug;
    
    public function __construct()
    {
        $this->orgId = config('services.fullstory.org_id');
        
        $this->debug = config('services.fullstory.debug', false);
    }
    
    public function render()
    {
        return view('services::components.fullstory');
    }
}
