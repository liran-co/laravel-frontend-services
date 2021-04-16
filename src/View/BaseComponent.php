<?php

namespace LiranCo\FrontendServices\View;

use Illuminate\View\Component;

abstract class BaseComponent extends Component
{
    public $show;
    
    public function __construct($show = true)
    {
        $this->show = $show;
    }

    public function render()
    {
        return $this->shouldShow() ? view('services::components.' . $this->getServiceName()) : '';
    }
    
    protected function shouldShow()
    {
        if (! $this->show) {
            return false;
        }
        
        $environments = $this->getEnvironments();
        
        if (is_array($environments) && ! in_array(env('APP_ENV'), $environments)) {
            return false;
        }
        
        return true;
    }
    
    protected function getEnvironments()
    {
        return config('services.' . $this->getServiceName() . '.environments', null);
    }
}
