<?php

namespace App\View\Components\Frontend\Partials;

use Illuminate\View\Component;

class SidebarNavDropdown extends Component
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
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.frontend.partials.sidebar-nav-dropdown');
    }
}
