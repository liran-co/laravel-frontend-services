<?php

namespace LiranCo\FrontendServices\View\Components;

use LiranCo\FrontendServices\View\BaseComponent;

class Segment extends BaseComponent
{
    public $writeKey;
    
    public function __construct($authOnly = false)
    {
        $this->writeKey = config('services.segment.write_key');
    }

    public function getComponentName()
    {
        return 'services::components.segment';
    }
}
