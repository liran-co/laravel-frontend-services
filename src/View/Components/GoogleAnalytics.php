<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\Interfaces\FrontendServiceInterface;
use LiranCo\FrontendServices\View\BaseComponent;

class GoogleAnalytics extends BaseComponent implements FrontendServiceInterface
{
    public $propertyId;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->orgId = config('services.googleanalytics.property_id');
    }
    
    public function getServiceName() : string
    {
        return 'googleanalytics';
    }
}
