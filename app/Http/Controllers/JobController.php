<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobIndustry;
use App\Models\JobRole;
use App\Models\JobType;
use Illuminate\Http\Request;

class JobController extends Controller
{

    #-- find candidates blade file ---#
    public function findCandidates(Request $request)
    {
        return view('front.pages.find_candidates');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private function getJobData()
    {
        $data['job_types'] = JobType::all();
        $data['job_categories'] = JobCategory::all();
        $data['job_roles'] = JobRole::all();
        $data['job_industries'] = JobIndustry::all();

        return $data;
    }
    public function findJobs(Request $request)
    {
        $data = $this->getJobData();
        return view('front.pages.find_jobs', compact('data'));
    }

     public function index()
    {
        $data = $this->getJobData();
        return view('front.pages.create-post', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
    }
}
