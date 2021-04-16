<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\Interfaces\FrontendServiceInterface;
use LiranCo\FrontendServices\View\BaseComponent;

class Sentry extends BaseComponent implements FrontendServiceInterface
{
    public $dsn;
    
    public $environment;
    
    public $debug;
    
    public function __construct()
    {
        parent::__construct();
        
        $this->dsn = config('services.sentry.dsn');
        
        $this->environment = config('services.sentry.environment', 'production');
        
        $this->debug = config('services.sentry.debug', false);
    }

    public function getServiceName() : string
    {
        return 'sentry';
    }
}
