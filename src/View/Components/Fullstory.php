<?php

namespace LiranCo\FrontendServices\View\Components;

use Illuminate\View\Component;

class Fullstory extends Component
{
    /**
     * The org id.
     *
     * @var string
     */
    public $orgId;
    
    /**
     * Debug mode.
     *
     * @var string
     */
    public $debug;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->orgId = config('services.fullstory.org_id');
        
        $this->debug = config('services.fullstory.debug', false);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('services::components.fullstory');
    }
}
