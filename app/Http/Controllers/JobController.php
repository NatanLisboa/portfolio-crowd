<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewJobRequest;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function createJob(NewJobRequest $request){
        $validated = $request->validated();

        Job::create([
            'name'=> $validated['name'],
            'description' => $validated['description'],
            'jobUrl' => $request->file('job')->store('jobs'),
            'user_id' =>  Auth::id()
        ]);

    }

    public function listExistentJobs()
    {
        $id = Auth::id();

        $jobs = Job::where('user_id',$id)->get();

        return view('dashboard',["jobs" => $jobs]);
    }

    public function getEditJob(Request $request,$id)
    {   
        $job = Job::find($id);

        return view('editJob',["job" => $job]);
    }

    public function editJob(NewJobRequest $request,$id)
    {
        $job = Job::find($id);
        $validated = $request->validated();
        if($request->file('job')){
            $job->jobUrl = $request->file('job')->store('jobs');
        }
        $job->name = $validated['name'];
        $job->description = $validated['description'];

        $job->save();

        return $this->listExistentJobs();
    }

    public function deleteJob(Request $request,$id)
    {
        $job = Job::find($id);
        $job->delete();
        return $this->listExistentJobs();
    }
}