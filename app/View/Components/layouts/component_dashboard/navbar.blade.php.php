<?php

namespace App\View\Components\layouts\component_dashboard;

use Illuminate\View\Component;

class navbar.blade.php extends Component
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
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.component_dashboard.navbar.blade.php');
    }
}
