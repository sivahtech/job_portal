<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\JobCategory;
use App\Models\JobIndustry;
use App\Models\JobRole;
use App\Models\JobType;

class JobFilter extends Component
{ 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.job-filter', ['data' => $this->data]);
    }
}
