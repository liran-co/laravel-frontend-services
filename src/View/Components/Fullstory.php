<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\Interfaces\FrontendServiceInterface;
use LiranCo\FrontendServices\View\BaseComponent;

class Fullstory extends BaseComponent implements FrontendServiceInterface
{
    public $orgId;
    
    public $debug;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->orgId = config('services.fullstory.org_id');
        
        $this->debug = config('services.fullstory.debug', false);
    }
    
    public function getServiceName() : string
    {
        return 'fullstory';
    }
}
