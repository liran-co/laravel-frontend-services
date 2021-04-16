<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\Interfaces\FrontendServiceInterface;
use LiranCo\FrontendServices\View\BaseComponent;

class Segment extends BaseComponent implements FrontendServiceInterface
{
    public $writeKey;
    
    public function __construct($authOnly = false)
    {
        parent::__construct();
        
        $this->writeKey = config('services.segment.write_key');
    }

    public function getServiceName() : string
    {
        return 'segment';
    }
}
