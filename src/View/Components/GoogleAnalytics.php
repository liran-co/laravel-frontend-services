<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\View\BaseComponent;

class GoogleAnalytics extends BaseComponent
{
    public $propertyId;
    
    public function __construct()
    {
        $this->orgId = config('services.googleanalytics.property_id');
    }
    
    public function render()
    {
        return view('services::components.google-analytics');
    }
}
