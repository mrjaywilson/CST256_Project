@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <h2>Find Jobs</h2>
        </div>
        <div class="justify-content-right pt-3">
            <form action="search" method="post">
                @csrf
                <input class="p-1" type="text" name="search">
                <button class="btn btn-primary" style="width: 50px"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="row justify-content-center">
        </div>
        <table>
            <tr>
                <th>Company</th>
                <th>Job Title</th>
                <th>Salary</th>
                <th></th>
            </tr>

            @foreach($jobs as $job)
                <tr>
                    <td>{{ $job->company_name }}</td>
                    <td><a href="{{ 'viewjob' }}/{{ $job->id }}">{{ $job->job_title }}</a></td>
                    <td>{{ $job->salary }}</td>
                    <td>
                        <form action="apply" METHOD="POST">
                            @csrf
                            <button class="btn btn-primary" value="{{ $job->id }}" name="apply" style="width: 100%">
                                Quick Apply
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection