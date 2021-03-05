<?php

namespace App\View\Components\Cards\Work;

use Illuminate\View\Component;

class WorkCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.cards.work.work-card');
    }
}
