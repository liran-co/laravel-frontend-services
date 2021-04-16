<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\Interfaces\FrontendServiceInterface;
use LiranCo\FrontendServices\View\BaseComponent;

class Intercom extends BaseComponent implements FrontendServiceInterface
{
    public $appId;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->appId = config('services.intercom.app_id');
    }
    
    public function getServiceName() : string
    {
        return 'intercom';
    }
}
