<?php

namespace LiranCo\FrontendServices\View\Components;

use Illuminate\View\Component;

class Intercom extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('services::components.intercom');
    }
}
