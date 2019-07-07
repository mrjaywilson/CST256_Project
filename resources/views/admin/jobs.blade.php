@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <h2>Jobs</h2>
        </div>
        <div class="justify-content-left">
            <a href="newjob" class="btn btn-primary">Add New</a>
        </div>
        <div class="row justify-content-center">
            </div>
            <table>
                <tr>
                    <th>Company</th>
                    <th>Job Title</th>
                    <th>Salary</th>
                    <th></th>
                    <th></th>
                </tr>

                @foreach($jobs as $job)
                    <tr>
                        <td><a href="{{ 'viewjob' }}/{{ $job->id }}">{{ $job->company_name }}</a></td>
                        <td>{{ $job->job_title }}</td>
                        <td>{{ $job->salary }}</td>
                        <td>
                            <form action="editjob" METHOD="POST">
                                @csrf
                                <button class="btn btn-primary" value="{{ $job->id }}" name="edit" style="width: 100%">Edit Job</button>
                            </form>
                        </td>
                        <td>
                            <form action="deletejob" METHOD="POST">
                                @csrf
                                <button class="btn btn-primary" value="{{ $job->id }}" name="delete" style="width: 100%">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            </form>
        </div>
    </div>
@endsection