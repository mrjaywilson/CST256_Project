<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobRestController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        $jobdata = json_encode($jobs);

        echo $jobdata;
    }

    public function show($id)
    {
        $jobs = Job::find($id);

        $jobdata = json_encode($jobs);

        echo $jobdata;
    }
}
