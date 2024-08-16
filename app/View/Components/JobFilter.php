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
    public function __construct()
    {

        $this->data['job_types'] = JobType::all();
        $this->data['job_categories'] = JobCategory::all();
        $this->data['job_roles'] = JobRole::all();
        $this->data['job_industries'] = JobIndustry::all();
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
