<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewJobRequest;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function show(Request $request, $jobId)
    {
        $job = Job::find($jobId);
        
        if(!Storage::exists($job->jobUrl)){
            abort(404);
        }

        return Storage::response($job->jobUrl);
    }
}