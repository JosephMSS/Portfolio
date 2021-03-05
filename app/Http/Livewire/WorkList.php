<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class WorkList extends Component
{
    public function render()
    {
        $project=Project::all()->first();
        return view('livewire.work-list',compact('project'));
    }
}
