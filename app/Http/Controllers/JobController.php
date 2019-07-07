<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Illuminate\Support\Facades\Redirect;

class JobController extends Controller
{
    public function create() {
        $data = request()->validate([
            'company_name' => 'required',
            'job_title' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'contact_email' => 'required|email'
        ]);

        Job::create([
            'company_name' => request('company_name'),
            'job_title' => request('job_title'),
            'salary'  => request('salary'),
            'description' => request('description'),
            'contact_email' => request('contact_email')
        ]);

        $jobs = Job::all();

        return view('admin.jobs')->with('jobs', $jobs);
    }

    public function edit() {
        $job = Job::find(request('edit'));

        return view('admin.editjob')->with('job', $job);
    }

    public function save() {
        $data = request()->validate([
            'company_name' => 'required',
            'job_title' => 'required',
            'salary' => 'required',
            'description' => 'required',
            'contact_email' => 'required|email'
        ]);

        Job::where('id', request('edit'))->update([
           'company_name' => request('company_name'),
           'job_title' => request('job_title'),
           'salary'  => request('salary'),
           'description' => request('description'),
           'contact_email' => request('contact_email')
        ]);

        return redirect()->route('jobs');
    }

    public function delete() {
        $id = request('delete');

        Job::where('id', $id)->delete();

        $jobs = Job::all();

        return view('admin.jobs')->with('jobs', $jobs);
    }

    public function view() {
        $job = Job::find(request('id'));

        return view('viewjob')->with('job', $job);
    }

    public function index() {
        $jobs = Job::all();

        return view('admin.jobs')->with('jobs', $jobs);
    }

    public function new() {
        return view('admin.newjob');
    }

    public function jobsearch() {
        $jobs = Job::all();

        return view('jobsearch')->with('jobs', $jobs);
    }

    public function apply() {
        return view('apply');
    }

    public function search() {
        $searchterms = "%" . request('search') . "%";

        $jobs = Job::where('job_title', 'like', $searchterms)
            ->orWhere('description', 'like', $searchterms)
            ->orWhere('company_name', 'like', $searchterms)->get();

        return view('jobsearch')->with('jobs', $jobs);
    }
}
